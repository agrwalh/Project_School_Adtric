<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionEnquiry;
use App\Models\NewsEvent;

class DashboardController extends Controller
{
    /**
     * Display the main admin dashboard with statistics and recent activity.
     */
    public function index()
    {
        $stats = [
            'total_news_events' => NewsEvent::count(),
            'published_news_events' => NewsEvent::published()->count(),
            'total_enquiries' => AdmissionEnquiry::count(),
            'new_enquiries' => AdmissionEnquiry::where('status', AdmissionEnquiry::STATUS_NEW)->count(),
            'contacted_enquiries' => AdmissionEnquiry::where('status', AdmissionEnquiry::STATUS_CONTACTED)->count(),
            'closed_enquiries' => AdmissionEnquiry::where('status', AdmissionEnquiry::STATUS_CLOSED)->count(),
            'crm_sent' => AdmissionEnquiry::where('crm_status', AdmissionEnquiry::CRM_SENT)->count(),
            'crm_failed' => AdmissionEnquiry::where('crm_status', AdmissionEnquiry::CRM_FAILED)->count(),
        ];

        $recentEnquiries = AdmissionEnquiry::orderBy('created_at', 'desc')->take(5)->get();
        $recentNews = NewsEvent::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentEnquiries', 'recentNews'));
    }
}
