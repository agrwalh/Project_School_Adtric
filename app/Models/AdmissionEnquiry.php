<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    use HasFactory;

    protected $table = 'admission_enquiries';

    public const STATUS_NEW = 'New';
    public const STATUS_CONTACTED = 'Contacted';
    public const STATUS_CLOSED = 'Closed';

    public const CRM_PENDING = 'Pending';
    public const CRM_SENT = 'Sent';
    public const CRM_FAILED = 'Failed';

    protected $fillable = [
        'parent_name',
        'student_name',
        'class_applying_for',
        'mobile',
        'email',
        'message',
        'status',
        'crm_status',
        'crm_response',
        'ip_address',
    ];

    /**
     * Check if a duplicate enquiry exists within the last 24 hours
     * for the same mobile and class.
     */
    public static function hasRecentDuplicate(string $mobile, string $classApplyingFor): bool
    {
        $since = Carbon::now()->subHours(24);

        return static::where('mobile', $mobile)
            ->where('class_applying_for', $classApplyingFor)
            ->where('created_at', '>=', $since)
            ->exists();
    }

    /**
     * Scope to filter enquiries by status.
     */
    public function scopeFilterStatus($query, ?string $status)
    {
        if ($status && in_array($status, [self::STATUS_NEW, self::STATUS_CONTACTED, self::STATUS_CLOSED])) {
            return $query->where('status', $status);
        }

        return $query;
    }

    /**
     * Scope to search enquiries by parent name, student name, or mobile.
     */
    public function scopeSearch($query, ?string $search)
    {
        if ($search) {
            return $query->where(function ($q) use ($search) {
                $q->where('parent_name', 'like', "%{$search}%")
                    ->orWhere('student_name', 'like', "%{$search}%")
                    ->orWhere('mobile', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        return $query;
    }
}
