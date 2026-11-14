<?php

namespace Tests\Feature;

use App\Models\AdmissionEnquiry;
use App\Models\NewsEvent;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::create([
            'name' => 'School Admin',
            'email' => 'admin@manthan.edu.in',
            'password' => bcrypt('Admin@123456'),
            'is_admin' => true,
        ]);
    }

    public function test_guest_cannot_access_admin_dashboard_or_management(): void
    {
        $this->get('/admin')->assertRedirect('/login');
        $this->get('/admin/news-events')->assertRedirect('/login');
        $this->get('/admin/enquiries')->assertRedirect('/login');
    }

    public function test_authenticated_admin_can_access_dashboard(): void
    {
        $response = $this->actingAs($this->admin)->get('/admin');
        $response->assertStatus(200);
        $response->assertSee('Admin Dashboard');
    }

    public function test_admin_can_create_news_event_with_auto_generated_slug(): void
    {
        Storage::fake('public');

        $file = UploadedFile::fake()->image('robotics_exhibition.png');

        $response = $this->actingAs($this->admin)->post('/admin/news-events', [
            'title' => 'Spring Science & Robotics Carnival',
            'category' => 'Event',
            'event_date' => Carbon::now()->format('Y-m-d'),
            'image' => $file,
            'short_description' => 'A showcase of science models and coding projects.',
            'content' => '<p>Detailed story about the science carnival.</p>',
            'is_published' => 1,
        ]);

        $response->assertRedirect('/admin/news-events');
        $this->assertDatabaseHas('news_events', [
            'title' => 'Spring Science & Robotics Carnival',
            'slug' => 'spring-science-robotics-carnival',
            'category' => 'Event',
            'is_published' => 1,
        ]);
    }

    public function test_admin_can_edit_and_update_news_event(): void
    {
        $item = NewsEvent::create([
            'title' => 'Original Event Name',
            'slug' => 'original-event-name',
            'category' => 'Event',
            'event_date' => '2026-11-01',
            'short_description' => 'Original short description',
            'content' => 'Original content',
            'is_published' => true,
        ]);

        $response = $this->actingAs($this->admin)->put("/admin/news-events/{$item->id}", [
            'title' => 'Updated Event Title',
            'category' => 'Achievement',
            'event_date' => '2026-11-05',
            'short_description' => 'Updated short description',
            'content' => 'Updated content',
            'is_published' => 0,
        ]);

        $response->assertRedirect('/admin/news-events');
        $this->assertDatabaseHas('news_events', [
            'id' => $item->id,
            'title' => 'Updated Event Title',
            'slug' => 'updated-event-title',
            'category' => 'Achievement',
            'is_published' => 0,
        ]);
    }

    public function test_admin_can_delete_news_event(): void
    {
        $item = NewsEvent::create([
            'title' => 'Temporary Event to Delete',
            'slug' => 'temp-event-delete',
            'category' => 'News',
            'event_date' => '2026-11-01',
            'short_description' => 'Short desc',
            'content' => 'Content',
            'is_published' => true,
        ]);

        $response = $this->actingAs($this->admin)->delete("/admin/news-events/{$item->id}");

        $response->assertRedirect('/admin/news-events');
        $this->assertDatabaseMissing('news_events', ['id' => $item->id]);
    }

    public function test_admin_can_update_enquiry_status_via_ajax(): void
    {
        $enquiry = AdmissionEnquiry::create([
            'parent_name' => 'Sunil Gupta',
            'student_name' => 'Kavya Gupta',
            'class_applying_for' => 'Nursery',
            'mobile' => '9876500000',
            'status' => 'New',
        ]);

        // Update status to Contacted
        $response = $this->actingAs($this->admin)->postJson("/admin/enquiries/{$enquiry->id}/status", [
            'status' => 'Contacted',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'new_status' => 'Contacted',
        ]);

        $this->assertDatabaseHas('admission_enquiries', [
            'id' => $enquiry->id,
            'status' => 'Contacted',
        ]);
    }

    public function test_admin_can_export_enquiries_to_csv(): void
    {
        AdmissionEnquiry::create([
            'parent_name' => 'Deepak Chopra',
            'student_name' => 'Aanya Chopra',
            'class_applying_for' => 'Kindergarten',
            'mobile' => '9898989898',
            'status' => 'New',
        ]);

        $response = $this->actingAs($this->admin)->get('/admin/enquiries/export-csv');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/csv; charset=UTF-8');
    }
}
