<?php

namespace Database\Seeders;

use App\Models\NewsEvent;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NewsEventSeeder extends Seeder
{
    /**
     * Run the database seeds matching the exact items in Screenshot 12 ("THE EVENT DIARY").
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Diwali celebration',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'image' => 'news-events/diwali.jpg',
                'short_description' => 'Festive joy and cultural performances as early learners celebrate the festival of lights with handcrafted diyas and storytelling.',
                'content' => '<p>The Manthan School illuminated with festive radiance as the school community celebrated Diwali. Children engaged in eco-friendly rangoli making, clay diya painting, and collaborative storytelling sessions highlighting the values of kindness and empathy.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Sports day, portrait frame',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'image' => 'news-events/sports.jpg',
                'short_description' => 'Agility, team spirit, and physical coordination showcased across fun track sprints and obstacle balance drills.',
                'content' => '<p>Energy, passion, and unyielding team spirit echoed across our sports grounds during the Annual Sports Day celebration. Over 300 early years students participated enthusiastically across diverse fun obstacle courses, 50m sprints, and relay races.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Janmashtami Celebration',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(9)->format('Y-m-d'),
                'image' => 'news-events/janmashtami.jpg',
                'short_description' => 'Cheer, classical tunes, and colorful folk attire during our early childhood Janmashtami cultural festival.',
                'content' => '<p>The campus transformed into a colorful cultural celebration as pre-nursery and nursery children dressed in traditional attire. Rhymes, puppet shows, and interactive storytelling made the day magical.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Storytelling competition',
                'category' => 'Achievement',
                'event_date' => Carbon::now()->subDays(14)->format('Y-m-d'),
                'image' => 'news-events/storytelling.jpg',
                'short_description' => 'Young scholars demonstrate oratory flair, voice modulation, and creative narrative expression.',
                'content' => '<p>We are exceedingly proud to announce that students from The Manthan School won top laurels at the National Storytelling and Oratory Conclave, captivating the jury with their vocabulary enrichment and confident presence.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Fancy dress',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(20)->format('Y-m-d'),
                'image' => 'news-events/fancy_dress.jpg',
                'short_description' => 'Space explorers, community helpers, and storybook characters brought to life by imaginative learners.',
                'content' => '<p>Creativity and confidence took center stage as children took on different personas, delivering short monologues about historical figures, astronauts, and community guardians.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Art exhibition',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(27)->format('Y-m-d'),
                'image' => 'news-events/art.jpg',
                'short_description' => 'Creative strokes: A colorful gallery of watercolor canvases, clay pottery, and recycled material crafts.',
                'content' => '<p>The Creative Strokes exhibition provided a platform for students from Toddlers to Grade 2 to showcase their tactile creations. Parents praised the thematic depth and innovative medium exploration.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Field trip group',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(35)->format('Y-m-d'),
                'image' => 'news-events/fieldtrip.jpg',
                'short_description' => 'Hands-on experiential discovery exploring wildlife habitats, botanical gardens, and nature trails.',
                'content' => '<p>Learning extended beyond four walls as our nursery and kindergarten students spent an exhilarating day exploring nature at the regional botanical conservatory.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Graduation, Grade 2',
                'category' => 'Achievement',
                'event_date' => Carbon::now()->subDays(42)->format('Y-m-d'),
                'image' => 'news-events/graduation.jpg',
                'short_description' => 'Honouring foundational milestones: Celebrating our graduates as they transition to middle school learning.',
                'content' => '<p>Caps flying high! A heartfelt graduation ceremony bidding farewell to Grade 2 scholars as they step forward into broader academic chapters.</p>',
                'is_published' => true,
            ],
        ];

        // Wipe old records to ensure clean sync
        NewsEvent::truncate();

        foreach ($items as $item) {
            $slug = NewsEvent::generateUniqueSlug($item['title']);

            NewsEvent::create([
                'title' => $item['title'],
                'slug' => $slug,
                'category' => $item['category'],
                'event_date' => $item['event_date'],
                'image' => $item['image'],
                'short_description' => $item['short_description'],
                'content' => $item['content'],
                'is_published' => $item['is_published'],
            ]);
        }
    }
}
