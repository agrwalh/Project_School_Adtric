@extends('layouts.frontend')

@section('title', $item->title . ' | The Manthan School Noida')
@section('meta_description', \Illuminate\Support\Str::limit(strip_tags($item->short_description), 155))

@section('og_image')
    <meta property="og:image" content="{{ $item->image_url }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $item->title }}">
    <meta name="twitter:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($item->short_description), 155) }}">
    <meta name="twitter:image" content="{{ $item->image_url }}">
@endsection

@section('content')

<!-- Article Header & Breadcrumbs -->
<div class="bg-brand-navy text-white py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center space-x-2 text-xs text-pink-300 font-semibold mb-4">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
            <span>/</span>
            <a href="{{ route('news-events.index') }}" class="hover:text-white transition">News & Events</a>
            <span>/</span>
            <span class="text-slate-300 truncate max-w-xs">{{ $item->title }}</span>
        </nav>

        <!-- Category Badge & Date -->
        <div class="flex items-center space-x-3 mb-4">
            @if($item->category === 'Event')
                <span class="px-3.5 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-brand-pink text-white shadow">Event</span>
            @elseif($item->category === 'News')
                <span class="px-3.5 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-sky-600 text-white shadow">News</span>
            @else
                <span class="px-3.5 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-amber-500 text-white shadow">Achievement</span>
            @endif

            <span class="text-xs text-slate-300 flex items-center">
                <svg class="w-3.5 h-3.5 mr-1 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                {{ $item->event_date->format('F d, Y') }}
            </span>
        </div>

        <!-- Article Title -->
        <h1 class="text-2xl sm:text-4xl lg:text-5xl font-black font-heading leading-tight tracking-tight">
            {{ $item->title }}
        </h1>

        <!-- Short Description Subheading -->
        <p class="text-base sm:text-lg text-slate-200 mt-4 leading-relaxed font-normal">
            {{ $item->short_description }}
        </p>

    </div>
</div>

<!-- Main Body -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        <!-- Left: Article Content (8 cols) -->
        <div class="lg:col-span-8">
            <article class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200">
                
                <!-- Main Featured Image -->
                <div class="rounded-2xl overflow-hidden mb-8 shadow-md">
                    <img src="{{ $item->image_url }}" 
                         alt="{{ $item->title }}" 
                         class="w-full h-auto max-h-[500px] object-cover object-center">
                </div>

                <!-- Rich Text Content -->
                <div class="prose prose-slate max-w-none text-slate-700 text-base sm:text-lg leading-relaxed space-y-6">
                    {!! $item->content !!}
                </div>

                <!-- Social Share & Return Link -->
                <div class="mt-12 pt-8 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
                    <a href="{{ route('news-events.index') }}" class="inline-flex items-center text-xs font-bold text-brand-navy hover:text-brand-pink uppercase tracking-wider transition">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        Back to All Events
                    </a>

                    <!-- Share buttons -->
                    <div class="flex items-center space-x-2 text-xs font-semibold text-slate-500">
                        <span>Share:</span>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($item->title . ' - ' . url()->current()) }}" 
                           target="_blank" 
                           rel="noopener"
                           class="px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 hover:bg-emerald-100 transition font-bold">
                            WhatsApp
                        </a>
                        <button type="button" 
                                onclick="navigator.clipboard.writeText(window.location.href); alert('Link copied to clipboard!');" 
                                class="px-3 py-1.5 rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition font-bold">
                            Copy Link
                        </button>
                    </div>
                </div>

            </article>
        </div>

        <!-- Right: Sidebar (4 cols) -->
        <div class="lg:col-span-4 space-y-8">
            
            <!-- Quick Admission CTA Widget -->
            <div class="bg-gradient-to-br from-brand-pink to-pink-700 rounded-3xl p-7 text-white shadow-xl relative overflow-hidden">
                <div class="relative z-10">
                    <span class="text-pink-200 text-xs font-bold uppercase tracking-wider">Admissions 2026-27</span>
                    <h3 class="text-2xl font-black font-heading mt-1 leading-snug">
                        Experience Our Joyful Campus
                    </h3>
                    <p class="text-pink-100 text-xs mt-2 leading-relaxed">
                        Watch one classroom observation session and decide after that. We welcome parents from Toddlers through Grade 2.
                    </p>
                    <a href="{{ route('home') }}#enquiry" class="mt-5 inline-flex items-center justify-center w-full py-3 rounded-full bg-white text-brand-pink hover:bg-slate-50 font-extrabold text-xs uppercase tracking-wider shadow transition">
                        Book a Campus Tour
                    </a>
                </div>
            </div>

            <!-- Related / Recent Events -->
            @if(isset($relatedItems) && $relatedItems->count() > 0)
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-200">
                    <h3 class="font-heading font-bold text-lg text-brand-navy border-b border-slate-100 pb-3 mb-4">
                        Recent Stories & Events
                    </h3>
                    <div class="space-y-4">
                        @foreach($relatedItems as $rel)
                            <a href="{{ route('news-events.show', $rel->slug) }}" class="flex items-start space-x-3 group">
                                <div class="w-16 h-16 rounded-xl overflow-hidden bg-slate-100 flex-shrink-0">
                                    <img src="{{ $rel->image_url }}" alt="{{ $rel->title }}" class="w-full h-full object-cover group-hover:scale-105 transition">
                                </div>
                                <div class="flex-grow">
                                    <span class="text-[10px] font-bold text-brand-pink uppercase tracking-wider">{{ $rel->category }}</span>
                                    <h4 class="text-xs font-bold text-slate-800 group-hover:text-pink-600 transition line-clamp-2 leading-snug">
                                        {{ $rel->title }}
                                    </h4>
                                    <span class="text-[10px] text-slate-400 mt-0.5 block">{{ $rel->event_date->format('M d, Y') }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Campus Contact card -->
            <div class="bg-brand-navy text-white rounded-3xl p-6 shadow-sm">
                <h4 class="font-heading font-bold text-base text-pink-400 mb-2">Campus Visits Helpline</h4>
                <p class="text-xs text-slate-300 leading-relaxed mb-4">
                    Sector 78, Noida, Uttar Pradesh.<br>
                    Monday to Saturday, 8:00 AM – 4:00 PM.
                </p>
                <div class="text-xs space-y-1">
                    <p><span class="text-slate-400">Front Office:</span> <a href="tel:01207133925" class="font-semibold text-white hover:text-pink-400">0120-7133925</a></p>
                    <p><span class="text-slate-400">Admissions:</span> <a href="tel:+919643304760" class="font-semibold text-pink-300 hover:text-white">+91 96433 04760</a></p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
