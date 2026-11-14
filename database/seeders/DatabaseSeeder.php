<?php

namespace Database\Seeders;

use App\Models\AdmissionEnquiry;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Admin User
        User::updateOrCreate(
            ['email' => 'admin@manthan.edu.in'],
            [
                'name' => 'School Administrator',
                'password' => Hash::make('Admin@123456'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );

        // Also add an alternative standard admin login (admin@school.com) for convenience
        User::updateOrCreate(
            ['email' => 'admin@school.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('Admin@123456'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );

        // 2. Seed News and Events (at least 6 items required, we seed 8 rich realistic items)
        $this->call(NewsEventSeeder::class);

        // 3. Seed some initial sample admission enquiries
        $sampleEnquiries = [
            [
                'parent_name' => 'Rajesh Sharma',
                'student_name' => 'Aarav Sharma',
                'class_applying_for' => 'Nursery',
                'mobile' => '9876543210',
                'email' => 'rajesh.sharma@example.com',
                'message' => 'Interested in campus tour and bus transport details from Sector 76.',
                'status' => 'New',
                'crm_status' => 'Sent',
                'crm_response' => '{"status": 200, "message": "Synced to CRM"}',
                'created_at' => Carbon::now()->subHours(5),
            ],
            [
                'parent_name' => 'Pooja Verma',
                'student_name' => 'Ananya Verma',
                'class_applying_for' => 'Kindergarten',
                'mobile' => '8765432109',
                'email' => 'pooja.verma@example.com',
                'message' => 'Query about age eligibility and admission process timeline.',
                'status' => 'Contacted',
                'crm_status' => 'Sent',
                'crm_response' => '{"status": 200, "message": "Synced to CRM"}',
                'created_at' => Carbon::now()->subDays(1),
            ],
            [
                'parent_name' => 'Vikram Malhotra',
                'student_name' => 'Reyansh Malhotra',
                'class_applying_for' => 'Pre-Nursery',
                'mobile' => '7654321098',
                'email' => 'vikram.m@example.com',
                'message' => 'Looking for sibling discount details and day-care hours.',
                'status' => 'Closed',
                'crm_status' => 'Sent',
                'crm_response' => '{"status": 200, "message": "Synced to CRM"}',
                'created_at' => Carbon::now()->subDays(3),
            ],
        ];

        foreach ($sampleEnquiries as $enquiry) {
            AdmissionEnquiry::create($enquiry);
        }
    }
}
