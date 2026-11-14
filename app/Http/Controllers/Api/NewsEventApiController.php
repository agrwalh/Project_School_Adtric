<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsEventResource;
use App\Models\NewsEvent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NewsEventApiController extends Controller
{
    /**
     * GET /api/news-events
     * Fetch published news and events with optional category filter and pagination.
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $category = $request->query('category');
        $perPage = min(max((int) $request->query('per_page', 6), 1), 50);

        $query = NewsEvent::published()
            ->orderBy('event_date', 'desc')
            ->orderBy('id', 'desc');

        if ($category && in_array($category, ['News', 'Event', 'Achievement'])) {
            $query->where('category', $category);
        }

        $items = $query->paginate($perPage);

        return NewsEventResource::collection($items);
    }

    /**
     * GET /api/news-events/{slug}
     * Fetch a single published news or event item by unique slug.
     */
    public function show(string $slug): NewsEventResource|JsonResponse
    {
        $item = NewsEvent::published()
            ->where('slug', $slug)
            ->first();

        if (! $item) {
            return response()->json([
                'success' => false,
                'message' => 'The requested news or event item was not found.',
            ], 404);
        }

        return new NewsEventResource($item);
    }
}
