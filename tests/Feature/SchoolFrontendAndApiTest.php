<?php

namespace Tests\Feature;

use App\Models\AdmissionEnquiry;
use App\Models\NewsEvent;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class SchoolFrontendAndApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed 4 news events
        NewsEvent::create([
            'title' => 'Annual Sports Day 2026',
            'slug' => 'annual-sports-day-2026',
            'category' => 'Event',
            'event_date' => Carbon::now()->subDays(2),
            'short_description' => 'Students showcased amazing athletic talents.',
            'content' => '<p>Full story of sports day celebrations.</p>',
            'is_published' => true,
        ]);

        NewsEvent::create([
            'title' => 'Robotics Fair Launch',
            'slug' => 'robotics-fair-launch',
            'category' => 'News',
            'event_date' => Carbon::now()->subDays(5),
            'short_description' => 'Inauguration of new Robotics laboratory.',
            'content' => '<p>Robotics lab details and pedagogy.</p>',
            'is_published' => true,
        ]);

        NewsEvent::create([
            'title' => 'National Storytelling Award',
            'slug' => 'national-storytelling-award',
            'category' => 'Achievement',
            'event_date' => Carbon::now()->subDays(10),
            'short_description' => 'Our students won 1st position in national contest.',
            'content' => '<p>Storytelling competition victory coverage.</p>',
            'is_published' => true,
        ]);

        NewsEvent::create([
            'title' => 'Internal Staff Workshop Draft',
            'slug' => 'internal-staff-workshop-draft',
            'category' => 'News',
            'event_date' => Carbon::now()->subDays(1),
            'short_description' => 'Unpublished draft item.',
            'content' => '<p>Private draft content.</p>',
            'is_published' => false,
        ]);
    }

    public function test_homepage_loads_and_displays_latest_published_events(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('THE EVENT DIARY');
        $response->assertSee('Annual Sports Day 2026');
        $response->assertSee('Robotics Fair Launch');
        $response->assertSee('National Storytelling Award');
        $response->assertDontSee('Internal Staff Workshop Draft');
        $response->assertSee('TELL US ABOUT YOUR CHILD');
    }

    public function test_view_all_news_events_page_with_category_filtering(): void
    {
        // View all
        $response = $this->get('/news-events');
        $response->assertStatus(200);
        $response->assertSee('Annual Sports Day 2026');
        $response->assertSee('Robotics Fair Launch');

        // Filter by Event
        $filterEvent = $this->get('/news-events?category=Event');
        $filterEvent->assertStatus(200);
        $filterEvent->assertSee('Annual Sports Day 2026');
        $filterEvent->assertDontSee('Robotics Fair Launch');

        // Filter by News
        $filterNews = $this->get('/news-events?category=News');
        $filterNews->assertStatus(200);
        $filterNews->assertSee('Robotics Fair Launch');
        $filterNews->assertDontSee('Annual Sports Day 2026');
    }

    public function test_single_news_event_opens_with_seo_title_and_meta_description(): void
    {
        $response = $this->get('/news-events/annual-sports-day-2026');

        $response->assertStatus(200);
        $response->assertSee('<title>Annual Sports Day 2026 | The Manthan School Noida</title>', false);
        $response->assertSee('Students showcased amazing athletic talents.');
        $response->assertSee('Full story of sports day celebrations.', false);
    }

    public function test_single_news_event_returns_404_if_slug_does_not_exist(): void
    {
        $response = $this->get('/news-events/non-existent-event-slug');
        $response->assertStatus(404);
    }

    public function test_admission_enquiry_ajax_validation_rules(): void
    {
        // Invalid mobile (not Indian 10 digits starting with 6,7,8,9)
        $response = $this->postJson('/admission-enquiry', [
            'parent_name' => 'John Doe',
            'student_name' => 'Jane Doe',
            'class_applying_for' => 'Nursery',
            'mobile' => '1234567890', // invalid prefix
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['mobile']);

        // Missing required fields
        $responseMissing = $this->postJson('/admission-enquiry', []);
        $responseMissing->assertStatus(422);
        $responseMissing->assertJsonValidationErrors(['parent_name', 'student_name', 'class_applying_for', 'mobile']);
    }

    public function test_admission_enquiry_successful_submission_and_crm_push(): void
    {
        Http::fake([
            '*' => Http::response(['status' => 'success', 'crm_id' => 999], 200),
        ]);

        $response = $this->postJson('/admission-enquiry', [
            'parent_name' => 'Priya Sharma',
            'student_name' => 'Aarav Sharma',
            'class_applying_for' => 'Pre-Nursery',
            'mobile' => '9876543210',
            'email' => 'priya@example.com',
            'message' => 'Need details regarding day school hours.',
        ]);

        $response->assertStatus(201);
        $response->assertJson([
            'success' => true,
        ]);

        $this->assertDatabaseHas('admission_enquiries', [
            'parent_name' => 'Priya Sharma',
            'student_name' => 'Aarav Sharma',
            'class_applying_for' => 'Pre-Nursery',
            'mobile' => '9876543210',
            'status' => 'New',
        ]);
    }

    public function test_24_hour_deduplication_rule_blocks_duplicate_submission(): void
    {
        Http::fake();

        // 1st submission
        $first = $this->postJson('/admission-enquiry', [
            'parent_name' => 'Sameer Kapoor',
            'student_name' => 'Vihaan Kapoor',
            'class_applying_for' => 'Kindergarten',
            'mobile' => '9812345678',
        ]);
        $first->assertStatus(201);

        // 2nd duplicate submission within 24 hours (same mobile + same class)
        $second = $this->postJson('/admission-enquiry', [
            'parent_name' => 'Sameer Kapoor',
            'student_name' => 'Vihaan Kapoor',
            'class_applying_for' => 'Kindergarten',
            'mobile' => '9812345678',
        ]);

        $second->assertStatus(200);
        $second->assertJson([
            'success' => false,
            'duplicate' => true,
            'message' => 'We have already received your enquiry.',
        ]);

        // Verify only 1 enquiry was created in the database
        $this->assertEquals(1, AdmissionEnquiry::where('mobile', '9812345678')->count());
    }

    public function test_crm_webhook_failure_does_not_break_user_form_submission(): void
    {
        Http::fake([
            '*' => Http::response('CRM Server Error 500', 500),
        ]);

        $response = $this->postJson('/admission-enquiry', [
            'parent_name' => 'Amit Sinha',
            'student_name' => 'Rohan Sinha',
            'class_applying_for' => 'Grade 1',
            'mobile' => '8887776665',
        ]);

        // Form MUST still succeed
        $response->assertStatus(201);
        $response->assertJson(['success' => true]);

        // Database record should register CRM Failed
        $enquiry = AdmissionEnquiry::where('mobile', '8887776665')->first();
        $this->assertNotNull($enquiry);
        $this->assertEquals('Failed', $enquiry->crm_status);
    }

    public function test_rest_api_get_news_events_returns_paginated_api_resource(): void
    {
        $response = $this->getJson('/api/news-events');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'title',
                    'slug',
                    'category',
                    'event_date',
                    'image',
                    'short_description',
                    'content',
                    'is_published',
                ]
            ],
            'links',
            'meta',
        ]);
    }

    public function test_rest_api_get_single_news_event_by_slug(): void
    {
        $response = $this->getJson('/api/news-events/annual-sports-day-2026');

        $response->assertStatus(200);
        $response->assertJsonPath('data.title', 'Annual Sports Day 2026');
        $response->assertJsonPath('data.category', 'Event');
        $response->assertJsonPath('data.slug', 'annual-sports-day-2026');
    }
}
