<?php

namespace App\Jobs;

use App\Models\AdmissionEnquiry;
use App\Services\CrmWebhookService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncEnquiryToCrmJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     */
    public int $tries = 3;

    /**
     * The number of seconds to wait before retrying the job.
     */
    public int $backoff = 30;

    /**
     * Create a new job instance.
     */
    public function __construct(public AdmissionEnquiry $enquiry)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(CrmWebhookService $crmService): void
    {
        $crmService->push($this->enquiry);
    }
}
