@extends('layouts.frontend')

@section('title', 'News, Events & Achievements | The Manthan School Noida')
@section('meta_description', 'Explore all latest news, celebrations, competitions, and academic milestones at The Manthan School Sector 78 Noida.')

@section('content')

<!-- Header & Filter Banner -->
<div class="bg-brand-navy text-white py-14 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-xs text-pink-300 font-semibold mb-3">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
            <span>/</span>
            <span class="text-white">News & Events</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight">
            EVENTS, CELEBRATIONS & NEWS
        </h1>
        <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl">
            A window into the joy, learning, discoveries, and accomplishments that shape every single day at The Manthan School.
        </p>

        <!-- Category Filters -->
        <div class="flex flex-wrap items-center gap-2.5 pt-8">
            <a href="{{ route('news-events.index') }}" 
               class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition {{ empty($category) ? 'bg-brand-pink text-white shadow-lg shadow-pink-600/30' : 'bg-white/10 text-slate-300 hover:bg-white/20 hover:text-white' }}">
                All ({{ \App\Models\NewsEvent::published()->count() }})
            </a>
            <a href="{{ route('news-events.index', ['category' => 'Event']) }}" 
               class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition {{ $category === 'Event' ? 'bg-brand-pink text-white shadow-lg shadow-pink-600/30' : 'bg-white/10 text-slate-300 hover:bg-white/20 hover:text-white' }}">
                Events ({{ \App\Models\NewsEvent::published()->where('category', 'Event')->count() }})
            </a>
            <a href="{{ route('news-events.index', ['category' => 'News']) }}" 
               class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition {{ $category === 'News' ? 'bg-brand-pink text-white shadow-lg shadow-pink-600/30' : 'bg-white/10 text-slate-300 hover:bg-white/20 hover:text-white' }}">
                News ({{ \App\Models\NewsEvent::published()->where('category', 'News')->count() }})
            </a>
            <a href="{{ route('news-events.index', ['category' => 'Achievement']) }}" 
               class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition {{ $category === 'Achievement' ? 'bg-brand-pink text-white shadow-lg shadow-pink-600/30' : 'bg-white/10 text-slate-300 hover:bg-white/20 hover:text-white' }}">
                Achievements ({{ \App\Models\NewsEvent::published()->where('category', 'Achievement')->count() }})
            </a>
        </div>

    </div>
</div>

<!-- Main Items Listing -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    @if($items->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($items as $item)
                <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/70 transition duration-300 flex flex-col group hover:-translate-y-1">
                    <!-- Image -->
                    <div class="relative h-56 bg-slate-100 overflow-hidden">
                        <img src="{{ $item->image_url }}" 
                             alt="{{ $item->title }}" 
                             loading="lazy" 
                             class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            @if($item->category === 'Event')
                                <span class="px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-pink-600 text-white shadow">Event</span>
                            @elseif($item->category === 'News')
                                <span class="px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-sky-600 text-white shadow">News</span>
                            @else
                                <span class="px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-amber-500 text-white shadow">Achievement</span>
                            @endif
                        </div>

                        <!-- Date Badge -->
                        <div class="absolute bottom-3 right-3 bg-brand-navy/90 backdrop-blur-sm text-white px-3 py-1 rounded-xl text-xs font-bold flex items-center shadow">
                            <svg class="w-3.5 h-3.5 mr-1.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            {{ $item->event_date->format('M d, Y') }}
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between">
                        <div>
                            <h2 class="text-xl font-bold font-heading text-brand-navy group-hover:text-pink-600 transition line-clamp-2 leading-snug">
                                <a href="{{ route('news-events.show', $item->slug) }}">
                                    {{ $item->title }}
                                </a>
                            </h2>
                            <p class="mt-3 text-slate-600 text-sm line-clamp-3 leading-relaxed">
                                {{ $item->short_description }}
                            </p>
                        </div>

                        <div class="pt-6 mt-6 border-t border-slate-100 flex items-center justify-between">
                            <a href="{{ route('news-events.show', $item->slug) }}" class="inline-flex items-center text-xs font-bold text-pink-600 hover:text-pink-800 uppercase tracking-wider transition">
                                <span>Read Full Story</span>
                                <svg class="w-3.5 h-3.5 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <span class="text-[11px] text-slate-400 font-medium">3 min read</span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $items->links() }}
        </div>

    @else
        <div class="text-center py-20 bg-white rounded-3xl border border-slate-200 p-8 max-w-lg mx-auto">
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-pink-100 text-brand-pink flex items-center justify-center text-2xl">
                📰
            </div>
            <h3 class="text-xl font-bold text-brand-navy">No items found</h3>
            <p class="text-slate-500 text-sm mt-1">There are no published items under this category right now.</p>
            <div class="mt-6">
                <a href="{{ route('news-events.index') }}" class="px-5 py-2.5 rounded-full bg-brand-pink text-white font-bold text-xs uppercase">
                    View All Items
                </a>
            </div>
        </div>
    @endif

</div>

<!-- Bottom Callout -->
<div class="bg-brand-pink py-12 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
        <div class="text-center md:text-left mb-6 md:mb-0">
            <h3 class="text-2xl font-black font-heading">Want to experience The Manthan School in action?</h3>
            <p class="text-pink-100 text-sm mt-1">Join one of our campus observation sessions or book a 1-on-1 counselor meeting.</p>
        </div>
        <a href="{{ route('home') }}#enquiry" class="px-8 py-3.5 rounded-full bg-white text-brand-pink hover:bg-slate-100 font-extrabold text-sm uppercase tracking-wider shadow-lg transition">
            Book Campus Visit
        </a>
    </div>
</div>

@endsection
