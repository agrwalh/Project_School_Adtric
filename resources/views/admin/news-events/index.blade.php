@extends('layouts.admin')

@section('title', 'Manage News & Events')

@section('content')

<!-- Header & Action -->
<div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold font-heading text-brand-navy">
            News & Events Management
        </h1>
        <p class="text-slate-500 text-sm mt-1">
            Publish school celebrations, events, notifications, and achievements.
        </p>
    </div>

    <div>
        <a href="{{ route('admin.news-events.create') }}" class="px-5 py-2.5 rounded-xl bg-brand-pink hover:bg-brand-pink-hover text-white font-bold text-xs uppercase tracking-wider shadow-md shadow-pink-500/20 transition flex items-center">
            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            Add New Event / News
        </a>
    </div>
</div>

<!-- Filters & Search Form -->
<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm mb-6">
    <form method="GET" action="{{ route('admin.news-events.index') }}" class="grid grid-cols-1 sm:grid-cols-12 gap-4">
        
        <!-- Search by Title -->
        <div class="sm:col-span-5">
            <input type="text" 
                   name="search" 
                   value="{{ request('search') }}" 
                   placeholder="Search by title..." 
                   class="w-full px-4 py-2 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink placeholder-slate-400">
        </div>

        <!-- Filter Category -->
        <div class="sm:col-span-3">
            <select name="category" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink text-slate-700">
                <option value="">All Categories</option>
                <option value="Event" {{ request('category') === 'Event' ? 'selected' : '' }}>Events</option>
                <option value="News" {{ request('category') === 'News' ? 'selected' : '' }}>News</option>
                <option value="Achievement" {{ request('category') === 'Achievement' ? 'selected' : '' }}>Achievements</option>
            </select>
        </div>

        <!-- Filter Status -->
        <div class="sm:col-span-2">
            <select name="status" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink text-slate-700">
                <option value="">All Status</option>
                <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
        </div>

        <!-- Filter Buttons -->
        <div class="sm:col-span-2 flex items-center space-x-2">
            <button type="submit" class="w-full py-2 px-3 rounded-xl bg-brand-navy hover:bg-brand-navy-light text-white font-bold text-xs uppercase transition">
                Filter
            </button>
            @if(request()->hasAny(['search', 'category', 'status']))
                <a href="{{ route('admin.news-events.index') }}" class="py-2 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold text-xs transition" title="Clear Filters">
                    ✕
                </a>
            @endif
        </div>

    </form>
</div>

<!-- Items Table -->
<div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-400 uppercase font-bold text-[10px]">
                    <th class="py-3.5 px-4">Thumbnail</th>
                    <th class="py-3.5 px-4">Title & Slug</th>
                    <th class="py-3.5 px-4">Category</th>
                    <th class="py-3.5 px-4">Event Date</th>
                    <th class="py-3.5 px-4">Status</th>
                    <th class="py-3.5 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                @forelse($items as $item)
                    <tr class="hover:bg-slate-50/70 transition">
                        <!-- Thumbnail -->
                        <td class="py-3 px-4">
                            <div class="w-14 h-14 rounded-xl overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                            </div>
                        </td>

                        <!-- Title & Slug -->
                        <td class="py-3 px-4">
                            <a href="{{ route('admin.news-events.edit', $item) }}" class="font-bold text-brand-navy text-sm hover:text-brand-pink transition block max-w-md line-clamp-1">
                                {{ $item->title }}
                            </a>
                            <div class="text-[11px] text-slate-400 font-mono mt-0.5 max-w-sm truncate">
                                /news-events/{{ $item->slug }}
                            </div>
                        </td>

                        <!-- Category -->
                        <td class="py-3 px-4">
                            @if($item->category === 'Event')
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-pink-100 text-brand-pink">Event</span>
                            @elseif($item->category === 'News')
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-sky-100 text-sky-800">News</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-amber-100 text-amber-800">Achievement</span>
                            @endif
                        </td>

                        <!-- Date -->
                        <td class="py-3 px-4 text-slate-600 font-semibold">
                            {{ $item->event_date->format('M d, Y') }}
                        </td>

                        <!-- Published status -->
                        <td class="py-3 px-4">
                            @if($item->is_published)
                                <span class="inline-flex items-center text-xs font-bold text-emerald-600">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-1.5"></span>
                                    Published
                                </span>
                            @else
                                <span class="inline-flex items-center text-xs font-bold text-slate-400">
                                    <span class="w-2 h-2 rounded-full bg-slate-400 mr-1.5"></span>
                                    Draft
                                </span>
                            @endif
                        </td>

                        <!-- Actions -->
                        <td class="py-3 px-4 text-right">
                            <div class="inline-flex items-center space-x-2">
                                <a href="{{ route('news-events.show', $item->slug) }}" target="_blank" class="p-1.5 text-slate-400 hover:text-brand-navy hover:bg-slate-100 rounded-lg transition" title="Preview Live">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </a>

                                <a href="{{ route('admin.news-events.edit', $item) }}" class="p-1.5 text-slate-600 hover:text-brand-pink hover:bg-pink-50 rounded-lg transition" title="Edit Item">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>

                                <form method="POST" action="{{ route('admin.news-events.destroy', $item) }}" onsubmit="return confirm('Are you sure you want to permanently delete this news/event?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition" title="Delete Item">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-12 text-slate-400">
                            No news or event items found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($items->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $items->links() }}
        </div>
    @endif
</div>

@endsection
