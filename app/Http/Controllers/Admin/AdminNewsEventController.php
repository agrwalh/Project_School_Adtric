<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsEventRequest;
use App\Http\Requests\UpdateNewsEventRequest;
use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNewsEventController extends Controller
{
    /**
     * Display a listing of news & events with search and filtering.
     */
    public function index(Request $request)
    {
        $query = NewsEvent::orderBy('event_date', 'desc')->orderBy('id', 'desc');

        if ($request->filled('category')) {
            $query->filterCategory($request->query('category'));
        }

        if ($request->filled('status')) {
            $isPublished = $request->query('status') === 'published';
            $query->where('is_published', $isPublished);
        }

        if ($request->filled('search')) {
            $search = $request->query('search');
            $query->where('title', 'like', "%{$search}%");
        }

        $items = $query->paginate(10)->withQueryString();

        return view('admin.news-events.index', compact('items'));
    }

    /**
     * Show the form for creating a new news/event item.
     */
    public function create()
    {
        return view('admin.news-events.create');
    }

    /**
     * Store a newly created news/event in storage.
     */
    public function store(StoreNewsEventRequest $request)
    {
        $validated = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news-events', 'public');
        }

        $slug = NewsEvent::generateUniqueSlug($validated['title']);

        NewsEvent::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'event_date' => $validated['event_date'],
            'image' => $imagePath,
            'short_description' => $validated['short_description'],
            'content' => $validated['content'],
            'is_published' => $request->boolean('is_published', true),
        ]);

        return redirect()->route('admin.news-events.index')
            ->with('success', 'News/Event item created successfully!');
    }

    /**
     * Show the form for editing the specified news/event item.
     */
    public function edit(NewsEvent $newsEvent)
    {
        return view('admin.news-events.edit', compact('newsEvent'));
    }

    /**
     * Update the specified news/event in storage.
     */
    public function update(UpdateNewsEventRequest $request, NewsEvent $newsEvent)
    {
        $validated = $request->validated();

        $imagePath = $newsEvent->image;
        if ($request->hasFile('image')) {
            // Delete old uploaded image if it was in storage
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('news-events', 'public');
        }

        // Regenerate slug if title was modified
        $slug = $newsEvent->slug;
        if ($newsEvent->title !== $validated['title']) {
            $slug = NewsEvent::generateUniqueSlug($validated['title'], $newsEvent->id);
        }

        $newsEvent->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'event_date' => $validated['event_date'],
            'image' => $imagePath,
            'short_description' => $validated['short_description'],
            'content' => $validated['content'],
            'is_published' => $request->boolean('is_published'),
        ]);

        return redirect()->route('admin.news-events.index')
            ->with('success', 'News/Event item updated successfully!');
    }

    /**
     * Remove the specified news/event from storage.
     */
    public function destroy(NewsEvent $newsEvent)
    {
        if ($newsEvent->image && Storage::disk('public')->exists($newsEvent->image)) {
            Storage::disk('public')->delete($newsEvent->image);
        }

        $newsEvent->delete();

        return redirect()->route('admin.news-events.index')
            ->with('success', 'News/Event item deleted successfully!');
    }
}
