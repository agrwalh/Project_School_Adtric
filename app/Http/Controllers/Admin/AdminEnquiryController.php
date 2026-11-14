<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionEnquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminEnquiryController extends Controller
{
    /**
     * Display a paginated listing of enquiries (newest first)
     * with status filtering and name/mobile search.
     */
    public function index(Request $request)
    {
        $status = $request->query('status');
        $search = $request->query('search');

        $query = AdmissionEnquiry::orderBy('created_at', 'desc');

        if ($status) {
            $query->filterStatus($status);
        }

        if ($search) {
            $query->search($search);
        }

        $enquiries = $query->paginate(10)->withQueryString();

        return view('admin.enquiries.index', compact('enquiries', 'status', 'search'));
    }

    /**
     * Update enquiry status via AJAX (New, Contacted, Closed).
     */
    public function updateStatus(Request $request, AdmissionEnquiry $enquiry): JsonResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:New,Contacted,Closed'],
        ]);

        $enquiry->update(['status' => $validated['status']]);

        return response()->json([
            'success' => true,
            'message' => "Enquiry status updated to '{$validated['status']}' successfully.",
            'new_status' => $validated['status'],
        ]);
    }

    /**
     * Export enquiries to CSV.
     */
    public function exportCsv(Request $request): StreamedResponse
    {
        $query = AdmissionEnquiry::orderBy('created_at', 'desc');

        if ($request->filled('status')) {
            $query->filterStatus($request->query('status'));
        }

        if ($request->filled('search')) {
            $query->search($request->query('search'));
        }

        $filename = 'admission_enquiries_' . now()->format('Y-m-d_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        return response()->stream(function () use ($query) {
            $file = fopen('php://output', 'w');

            // Header row
            fputcsv($file, [
                'ID',
                'Parent Name',
                'Student Name',
                'Class Applying For',
                'Mobile',
                'Email',
                'Message',
                'Status',
                'CRM Status',
                'CRM Response',
                'Submitted Date & Time',
            ]);

            $query->chunk(100, function ($rows) use ($file) {
                foreach ($rows as $row) {
                    fputcsv($file, [
                        $row->id,
                        $row->parent_name,
                        $row->student_name,
                        $row->class_applying_for,
                        $row->mobile,
                        $row->email ?? '',
                        $row->message ?? '',
                        $row->status,
                        $row->crm_status,
                        $row->crm_response ?? '',
                        $row->created_at->format('Y-m-d H:i:s'),
                    ]);
                }
            });

            fclose($file);
        }, 200, $headers);
    }

    /**
     * Remove the specified enquiry from storage.
     */
    public function destroy(AdmissionEnquiry $enquiry)
    {
        $enquiry->delete();

        return redirect()->route('admin.enquiries.index')
            ->with('success', 'Enquiry deleted successfully!');
    }
}
