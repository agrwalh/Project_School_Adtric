<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Homepage: Displays the hero banner, News & Events section (latest 3 published items),
     * and the Admission Enquiry section from the mockup.
     */
    public function index()
    {
        $latestItems = NewsEvent::published()
            ->orderBy('event_date', 'desc')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        return view('frontend.home', compact('latestItems'));
    }

    /**
     * "View all" page: Lists all published news & events with category filter and pagination.
     */
    public function allNewsEvents(Request $request)
    {
        $category = $request->query('category');

        $query = NewsEvent::published()
            ->orderBy('event_date', 'desc')
            ->orderBy('id', 'desc');

        if ($category && in_array($category, ['News', 'Event', 'Achievement'])) {
            $query->where('category', $category);
        }

        $items = $query->paginate(6)->withQueryString();

        $categories = [
            'All' => 'All Categories',
            'Event' => 'Events',
            'News' => 'Latest News',
            'Achievement' => 'Achievements',
        ];

        return view('frontend.news-events.index', compact('items', 'category', 'categories'));
    }

    /**
     * Detail page: Opens at /news-events/{slug} with its own page title and meta description.
     */
    public function showNewsEvent(string $slug)
    {
        $item = NewsEvent::published()
            ->where('slug', $slug)
            ->firstOrFail();

        // Related items for sidebar/footer recommendation
        $relatedItems = NewsEvent::published()
            ->where('id', '!=', $item->id)
            ->orderBy('event_date', 'desc')
            ->take(3)
            ->get();

        return view('frontend.news-events.show', compact('item', 'relatedItems'));
    }
}
