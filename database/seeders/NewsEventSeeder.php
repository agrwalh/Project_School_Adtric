<?php

namespace Database\Seeders;

use App\Models\NewsEvent;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NewsEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Diwali Celebrations & Cultural Fest',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(4)->format('Y-m-d'),
                'image' => 'news-events/diwali.jpg',
                'short_description' => 'Students and staff celebrated the festival of lights with traditional performances, rangoli competitions, and cultural workshops.',
                'content' => "<p>The Manthan School illuminated with festive radiance as the school community came together to celebrate Diwali. The festivities kicked off with an auspicious diya lighting ceremony followed by soulful musical recitals and traditional dance performances by early years learners.</p><p>Students engaged in eco-friendly rangoli making, handcrafted clay diya painting, and collaborative storytelling sessions highlighting the values of kindness, victory of good over evil, and empathy. Parents were also invited to witness an inspiring theatrical presentation prepared by our kindergarten children.</p><p>The day concluded with sweet distributions and a pledge by the entire student body to celebrate a pollution-free green Diwali.</p>",
                'is_published' => true,
            ],
            [
                'title' => 'Annual Sports Day: Sprinting Towards Excellence',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'image' => 'news-events/sports.jpg',
                'short_description' => 'Students showcased agility, teamwork, and sportsmanship across various track, obstacle, and athletic competitions.',
                'content' => "<p>Energy, passion, and unyielding team spirit echoed across the sports grounds during the Annual Sports Day celebration at The Manthan School. Over 300 students participated enthusiastically across diverse fun obstacle courses, 50m sprints, relay races, and balance drills.</p><p>The event was graced by esteemed athletic mentors who commended the children's disciplined coordination and perseverance. Trophies and medals were awarded across all age groups, celebrating not just winning, but active participation and healthy living.</p>",
                'is_published' => true,
            ],
            [
                'title' => 'Janmashtami Utsav & Musical Extravaganza',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(18)->format('Y-m-d'),
                'image' => 'news-events/janmashtami.jpg',
                'short_description' => 'Joyful festivities including classical dance, flute decoration, and interactive enactment of Krishna folklore.',
                'content' => "<p>The campus transformed into a vibrant cultural tableau as our pre-nursery and nursery children came dressed in colorful traditional attire portraying Radha and Krishna. The auditorium resonated with cheerful devotional rhymes and cheerful laughter.</p><p>Children took part in butter pot decoration crafts, peacock feather headband making, and an interactive puppet show demonstrating teamwork, friendship, and moral values.</p>",
                'is_published' => true,
            ],
            [
                'title' => '1st Prize at National Inter-School Storytelling Contest',
                'category' => 'Achievement',
                'event_date' => Carbon::now()->subDays(25)->format('Y-m-d'),
                'image' => 'news-events/storytelling.jpg',
                'short_description' => 'Our young orators brought home prestigious laurels in voice modulation, narrative pacing, and expression.',
                'content' => "<p>We are exceedingly proud to announce that students of Grade 1 and 2 from The Manthan School clinched the championship trophy at the National Storytelling and Oratory Conclave 2026.</p><p>Competing against 45 leading schools across the country, our learners captivated the jury with their dramatic flair, vocabulary enrichment, and confident stage presence. Kudos to our educators and speech mentors for nurturing these talents.</p>",
                'is_published' => true,
            ],
            [
                'title' => 'Creative Strokes: Annual Art & Craft Exhibition',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(32)->format('Y-m-d'),
                'image' => 'news-events/art.jpg',
                'short_description' => 'A vibrant exhibition of paintings, recycled sculptures, and tactile crafts created by our budding artists.',
                'content' => "<p>Creativity knows no boundaries! The Creative Strokes exhibition provided a platform for students from Toddlers to Grade 2 to showcase their imaginative art. The exhibition gallery featured watercolor landscapes, pottery artifacts, papier-mâché sculptures, and recycled material installations.</p><p>Visiting parents praised the thematic depth and innovative medium exploration guided by the school's dedicated visual arts faculty.</p>",
                'is_published' => true,
            ],
            [
                'title' => 'Launch of Advanced Robotics & AI Maker Space',
                'category' => 'News',
                'event_date' => Carbon::now()->subDays(40)->format('Y-m-d'),
                'image' => 'news-events/robotics.jpg',
                'short_description' => 'State-of-the-art experiential laboratory equipped with modular robotics kits, sensor modules, and logic boards.',
                'content' => "<p>In keeping with our vision of progressive experiential learning, The Manthan School is thrilled to inaugurate its new Robotics & AI Innovation Lab. Designed specifically for early childhood through primary learners, the facility introduces computational logic and creative problem solving through hands-on play.</p><p>Students will work with age-appropriate tangible coding blocks, tactile sensor circuits, and collaborative building modules that bring science and math concepts to life.</p>",
                'is_published' => true,
            ],
            [
                'title' => 'Cambridge English Partner School Distinction',
                'category' => 'Achievement',
                'event_date' => Carbon::now()->subDays(55)->format('Y-m-d'),
                'image' => 'news-events/cambridge.jpg',
                'short_description' => 'Awarded prestigious recognition for excellence in foundational English language acquisition and phonics training.',
                'content' => "<p>The Manthan School has been officially conferred the Cambridge English Partner Distinction in recognition of its structured phonics, early literacy framework, and communicative language development across all classrooms.</p><p>This accolade is a testament to our ongoing investment in world-class teacher training and internationally benchmarked curricula.</p>",
                'is_published' => true,
            ],
            [
                'title' => 'Nature & Biodiversity Field Trip to Regional Botanical Garden',
                'category' => 'Event',
                'event_date' => Carbon::now()->subDays(62)->format('Y-m-d'),
                'image' => 'news-events/fieldtrip.jpg',
                'short_description' => 'Children explored indigenous flora, medicinal herbs, and butterfly conservatory in an immersive outdoor lesson.',
                'content' => "<p>Learning extended beyond four walls as our nursery and kindergarten students spent an exhilarating day exploring nature at the regional botanical garden. Guided by naturalists, the children touched different leaf textures, observed pollination in the butterfly conservatory, and identified seasonal fruit trees.</p><p>The trip emphasized environmental stewardship, sensory discovery, and hands-on observation in alignment with our holistic growth curriculum.</p>",
                'is_published' => true,
            ],
        ];

        foreach ($items as $item) {
            $slug = NewsEvent::generateUniqueSlug($item['title']);

            NewsEvent::updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $item['title'],
                    'category' => $item['category'],
                    'event_date' => $item['event_date'],
                    'image' => $item['image'],
                    'short_description' => $item['short_description'],
                    'content' => $item['content'],
                    'is_published' => $item['is_published'],
                ]
            );
        }
    }
}
