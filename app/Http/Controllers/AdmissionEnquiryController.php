<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdmissionEnquiryRequest;
use App\Mail\NewAdmissionEnquiryMail;
use App\Models\AdmissionEnquiry;
use App\Services\CrmWebhookService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AdmissionEnquiryController extends Controller
{
    /**
     * Store a new admission enquiry submitted via AJAX.
     */
    public function store(StoreAdmissionEnquiryRequest $request, CrmWebhookService $crmService): JsonResponse
    {
        $validated = $request->validated();
        $mobile = trim($validated['mobile']);
        $classApplyingFor = trim($validated['class_applying_for']);

        // Check 24-hour deduplication rule (same mobile + same class)
        if (AdmissionEnquiry::hasRecentDuplicate($mobile, $classApplyingFor)) {
            Log::info("Duplicate enquiry blocked for mobile: {$mobile}, class: {$classApplyingFor} within 24 hours.");

            return response()->json([
                'success' => false,
                'duplicate' => true,
                'message' => 'We have already received your enquiry.',
            ], 200);
        }

        // Create the enquiry record
        $enquiry = AdmissionEnquiry::create([
            'parent_name' => $validated['parent_name'],
            'student_name' => $validated['student_name'],
            'class_applying_for' => $validated['class_applying_for'],
            'mobile' => $mobile,
            'email' => $validated['email'] ?? null,
            'message' => $validated['message'] ?? null,
            'status' => AdmissionEnquiry::STATUS_NEW,
            'crm_status' => AdmissionEnquiry::CRM_PENDING,
            'ip_address' => $request->ip(),
        ]);

        // Push to CRM via webhook (5-second timeout, fault-tolerant, does not block user success)
        try {
            $crmService->push($enquiry);
        } catch (\Throwable $e) {
            Log::error("Unexpected CRM dispatch exception for enquiry #{$enquiry->id}: " . $e->getMessage());
        }

        // Email alert to admissions team (non-blocking)
        try {
            $recipient = env('ADMISSIONS_EMAIL', 'admissions@manthan.edu.in');
            Mail::to($recipient)->send(new NewAdmissionEnquiryMail($enquiry));
        } catch (\Throwable $e) {
            Log::error("Email alert failed for enquiry #{$enquiry->id}: " . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your admission enquiry has been submitted successfully. Our admissions team will contact you shortly.',
            'enquiry_id' => $enquiry->id,
        ], 201);
    }
}
