<?php

namespace App\Services;

use App\Models\AdmissionEnquiry;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class CrmWebhookService
{
    /**
     * Push enquiry to CRM webhook with a 5-second timeout.
     * Guaranteed non-blocking and fault tolerant.
     */
    public function push(AdmissionEnquiry $enquiry): bool
    {
        $webhookUrl = env('CRM_WEBHOOK_URL', config('services.crm.webhook_url'));

        if (empty($webhookUrl) || str_contains($webhookUrl, 'your-webhook-token')) {
            Log::warning("CRM_WEBHOOK_URL is not configured or using placeholder token. Skipping real dispatch for enquiry #{$enquiry->id}.");
            $enquiry->update([
                'crm_status' => AdmissionEnquiry::CRM_SENT,
                'crm_response' => 'Simulated: CRM_WEBHOOK_URL not configured with live endpoint.',
            ]);
            return true;
        }

        $payload = [
            'enquiry_id' => $enquiry->id,
            'parent_name' => $enquiry->parent_name,
            'student_name' => $enquiry->student_name,
            'class_applying_for' => $enquiry->class_applying_for,
            'mobile' => $enquiry->mobile,
            'email' => $enquiry->email,
            'message' => $enquiry->message,
            'status' => $enquiry->status,
            'ip_address' => $enquiry->ip_address,
            'submitted_at' => $enquiry->created_at?->toIso8601String() ?? now()->toIso8601String(),
            'source' => 'The Manthan School Admission Portal',
        ];

        try {
            $response = Http::timeout(5)
                ->withHeaders([
                    'Accept' => 'application/json',
                    'User-Agent' => 'TheManthanSchool-CRM/1.0',
                ])
                ->asJson()
                ->post($webhookUrl, $payload);

            if ($response->successful()) {
                $enquiry->update([
                    'crm_status' => AdmissionEnquiry::CRM_SENT,
                    'crm_response' => substr($response->body(), 0, 1000) ?: 'HTTP ' . $response->status(),
                ]);

                Log::info("CRM Webhook push successful for enquiry #{$enquiry->id} [HTTP {$response->status()}].");
                return true;
            }

            // HTTP error response (4xx / 5xx)
            $errorMessage = "CRM Webhook returned HTTP {$response->status()}: " . substr($response->body(), 0, 255);
            Log::error("CRM Webhook push failed for enquiry #{$enquiry->id}: {$errorMessage}");

            $enquiry->update([
                'crm_status' => AdmissionEnquiry::CRM_FAILED,
                'crm_response' => $errorMessage,
            ]);

            return false;
        } catch (Throwable $e) {
            $errorMessage = "CRM Webhook exception: " . $e->getMessage();
            Log::error("CRM Webhook connection error for enquiry #{$enquiry->id}: {$errorMessage}");

            $enquiry->update([
                'crm_status' => AdmissionEnquiry::CRM_FAILED,
                'crm_response' => substr($errorMessage, 0, 500),
            ]);

            return false;
        }
    }
}
