@extends('layouts.frontend')

@section('title', 'The Manthan School | News & Events and Admissions | Noida Sector 78')
@section('meta_description', 'Discover vibrant school life at The Manthan School Noida. Read our latest News & Events and submit an online Admission Enquiry for Academic Year 2026-27.')

@section('content')

<!-- ========================================== -->
<!-- HERO SECTION                               -->
<!-- ========================================== -->
<section class="relative bg-brand-navy overflow-hidden text-white">
    <!-- Background Image with Dark & Gradient Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=2000&q=80" 
             alt="The Manthan School Campus" 
             class="w-full h-full object-cover opacity-20 filter brightness-75">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/90 to-brand-navy/60"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
        <div class="max-w-2xl">
            <!-- Badge -->
            <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold text-pink-300 mb-6">
                <span class="w-2 h-2 rounded-full bg-brand-pink animate-ping"></span>
                <span>Admissions Open for 2026-27 • Sector 78, Noida</span>
            </div>

            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight font-heading leading-tight mb-6">
                A LITTLE WORLD OF <br>
                <span class="text-brand-pink underline decoration-wavy decoration-pink-400">BIG BEGINNINGS</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-200 leading-relaxed mb-8 font-normal">
                Experiential, play-powered and competency-based education. Nurturing curious minds, joyful spirits, and strong lifelong foundations from Toddlers to Grade 2.
            </p>

            <!-- Action CTAs -->
            <div class="flex flex-wrap items-center gap-4">
                <a href="#enquiry" class="px-8 py-3.5 rounded-full bg-brand-pink hover:bg-brand-pink-hover text-white font-bold text-sm shadow-xl shadow-pink-600/30 transition transform hover:-translate-y-0.5">
                    Book a Campus Visit
                </a>
                <a href="{{ route('news-events.index') }}" class="px-7 py-3.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/30 text-white font-semibold text-sm backdrop-blur-sm transition">
                    Explore Event Diary →
                </a>
            </div>

            <!-- Quick Metrics -->
            <div class="grid grid-cols-3 gap-6 pt-12 mt-12 border-t border-white/10">
                <div>
                    <span class="block text-2xl sm:text-3xl font-extrabold text-white font-heading">1:8</span>
                    <span class="text-xs text-slate-300">Teacher-Student Ratio</span>
                </div>
                <div>
                    <span class="block text-2xl sm:text-3xl font-extrabold text-pink-400 font-heading">100%</span>
                    <span class="text-xs text-slate-300">Safe & Monitored Campus</span>
                </div>
                <div>
                    <span class="block text-2xl sm:text-3xl font-extrabold text-white font-heading">CBSE</span>
                    <span class="text-xs text-slate-300">Curricular Pedagogy</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Curved Wave Bottom Divider -->
    <div class="relative h-12 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-12 text-pink-600 fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>


<!-- ========================================== -->
<!-- NEWS & EVENTS SECTION ("THE EVENT DIARY")  -->
<!-- ========================================== -->
<section id="events" class="py-16 lg:py-24 bg-pink-600 text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Row -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <div class="flex items-center space-x-2 text-pink-200 text-xs font-bold uppercase tracking-widest mb-2">
                    <span class="w-6 h-0.5 bg-white"></span>
                    <span>Happenings & Milestones</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white">
                    THE EVENT DIARY
                </h2>
                <p class="text-pink-100 text-sm sm:text-base mt-2 max-w-xl">
                    Events and celebrations that create joyful moments throughout the year.
                </p>
            </div>

            <!-- "View All" Button -->
            <div class="mt-6 md:mt-0">
                <a href="{{ route('news-events.index') }}" 
                   class="inline-flex items-center px-6 py-2.5 rounded-full bg-white text-pink-600 hover:bg-slate-100 font-bold text-xs uppercase tracking-wider shadow-lg transition transform hover:-translate-y-0.5">
                    <span>ALL EVENTS & COMPETITIONS</span>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

        <!-- Latest 3 Published Items Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($latestItems as $item)
                <article class="bg-white rounded-3xl overflow-hidden shadow-xl text-slate-800 flex flex-col group transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl">
                    <!-- Image Wrapper -->
                    <div class="relative h-56 overflow-hidden bg-slate-100">
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

                    <!-- Card Body -->
                    <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold font-heading text-brand-navy group-hover:text-pink-600 transition line-clamp-2 leading-snug">
                                <a href="{{ route('news-events.show', $item->slug) }}">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="mt-3 text-slate-600 text-sm line-clamp-3 leading-relaxed">
                                {{ $item->short_description }}
                            </p>
                        </div>

                        <!-- Footer link -->
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
            @empty
                <div class="col-span-3 text-center py-12 bg-white/10 rounded-3xl p-8">
                    <p class="text-white text-lg">No news and events published yet.</p>
                </div>
            @endforelse
        </div>

        <!-- Mobile View All CTA -->
        <div class="mt-10 text-center md:hidden">
            <a href="{{ route('news-events.index') }}" class="inline-flex items-center px-6 py-3 rounded-full bg-white text-pink-600 font-bold text-xs uppercase shadow">
                View All News & Events →
            </a>
        </div>

    </div>

    <!-- Cloud divider to white section -->
    <div class="relative h-12 w-full overflow-hidden leading-none mt-16">
        <svg class="relative block w-full h-12 text-slate-50 fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>


<!-- ========================================== -->
<!-- PROGRAMMES OVERVIEW SECTION                -->
<!-- ========================================== -->
<section id="programmes" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-brand-pink text-xs font-bold uppercase tracking-widest">Discovery and Possibility</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy font-heading mt-2">
                THE RIGHT BEGINNING FOR EVERY STAGE
            </h2>
            <p class="text-slate-600 text-sm mt-2">
                Carefully tailored learning stages designed for holistic cognitive, emotional, and social readiness.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Stage 1 -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200/80 hover:shadow-md transition">
                <div class="h-40 rounded-2xl overflow-hidden mb-4 bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=600&q=80" alt="Toddlers" class="w-full h-full object-cover">
                </div>
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-heading font-bold text-lg text-brand-navy">Toddlers</h3>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-full bg-pink-100 text-brand-pink">1.5 - 2.5 yrs</span>
                </div>
                <p class="text-xs font-semibold text-slate-500 mb-2">Cuddle Bugs</p>
                <p class="text-xs text-slate-600 leading-relaxed">
                    First days away from home. Settling in, sensory play and one familiar adult caregiver.
                </p>
            </div>

            <!-- Stage 2 -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200/80 hover:shadow-md transition">
                <div class="h-40 rounded-2xl overflow-hidden mb-4 bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=600&q=80" alt="Pre-Nursery" class="w-full h-full object-cover">
                </div>
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-heading font-bold text-lg text-brand-navy">Pre-Nursery</h3>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-full bg-pink-100 text-brand-pink">2.5 - 3.5 yrs</span>
                </div>
                <p class="text-xs font-semibold text-slate-500 mb-2">Hatchlings</p>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Language begins. Songs, stories, sharing and the first shape of a reassuring daily routine.
                </p>
            </div>

            <!-- Stage 3 -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200/80 hover:shadow-md transition">
                <div class="h-40 rounded-2xl overflow-hidden mb-4 bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=600&q=80" alt="Nursery" class="w-full h-full object-cover">
                </div>
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-heading font-bold text-lg text-brand-navy">Nursery</h3>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-full bg-pink-100 text-brand-pink">3.5 - 4.5 yrs</span>
                </div>
                <p class="text-xs font-semibold text-slate-500 mb-2">Nestlings</p>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Letters, numbers and friendships, all of it experienced through active play and creative making.
                </p>
            </div>

            <!-- Stage 4 -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200/80 hover:shadow-md transition">
                <div class="h-40 rounded-2xl overflow-hidden mb-4 bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=600&q=80" alt="Kindergarten" class="w-full h-full object-cover">
                </div>
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-heading font-bold text-lg text-brand-navy">Kindergarten</h3>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-full bg-pink-100 text-brand-pink">4.5 - 5.5 yrs</span>
                </div>
                <p class="text-xs font-semibold text-slate-500 mb-2">Fledglings</p>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Reading, phonics, early writing and the confidence to express opinions and collaborate in groups.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================== -->
<!-- ADMISSION ENQUIRY & PARENT FAQS SECTION (From Mockup Image 3)   -->
<!-- ============================================================== -->
<section id="enquiry" class="py-20 bg-brand-pink text-white relative overflow-hidden">
    
    <!-- Cloud top divider -->
    <div class="absolute top-0 left-0 right-0 h-10 w-full overflow-hidden leading-none rotate-180">
        <svg class="relative block w-full h-10 text-slate-50 fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- LEFT: QUESTIONS PARENTS ASK (FAQ Accordion) -->
            <div id="faq" class="lg:col-span-6 space-y-6">
                <div>
                    <span class="text-pink-200 text-xs font-bold uppercase tracking-widest">Admission Clarity</span>
                    <h2 class="text-3xl sm:text-4xl font-black font-heading tracking-tight mt-1">
                        QUESTIONS PARENTS ASK
                    </h2>
                    <p class="text-pink-100 text-sm mt-2">
                        Everything you need to know about our admissions process, curriculum, and care.
                    </p>
                </div>

                <!-- FAQ Accordion Items -->
                <div class="space-y-3 pt-2" id="faq-accordion">
                    
                    <!-- Q1 -->
                    <div class="border-b border-pink-400/40 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm sm:text-base hover:text-pink-200 transition">
                            <span>What is the minimum age for Nursery admission?</span>
                            <span class="faq-icon text-xl font-light transform transition-transform">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            For Nursery admission, the child should be 3+ years old as of 31st March of the academic year for which admission is sought.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="border-b border-pink-400/40 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm sm:text-base hover:text-pink-200 transition">
                            <span>What are the school timings for each programme?</span>
                            <span class="faq-icon text-xl font-light transform transition-transform">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Toddlers & Pre-Nursery operate from 9:00 AM to 12:30 PM. Nursery to Grade 2 operate from 8:30 AM to 1:30 PM, Monday through Friday.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="border-b border-pink-400/40 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm sm:text-base hover:text-pink-200 transition">
                            <span>What is the fee structure?</span>
                            <span class="faq-icon text-xl font-light transform transition-transform">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Our fee structure is transparent with quarterly composite fee schedules. Please submit the enquiry form or visit our campus admissions office for the detailed breakdown.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="border-b border-pink-400/40 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm sm:text-base hover:text-pink-200 transition">
                            <span>How many children are in a group and how many adults?</span>
                            <span class="faq-icon text-xl font-light transform transition-transform">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            We maintain an intimate 1:8 adult-to-child ratio in early years, with a dedicated homeroom teacher and an experienced caregiver in every classroom.
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="border-b border-pink-400/40 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm sm:text-base hover:text-pink-200 transition">
                            <span>Is transport available and which sectors does it cover?</span>
                            <span class="faq-icon text-xl font-light transform transition-transform">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Yes, air-conditioned GPS-tracked buses with female attendants and speed governors cover all major sectors across Noida and Greater Noida West.
                        </div>
                    </div>

                    <!-- Q6 -->
                    <div class="border-b border-pink-400/40 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm sm:text-base hover:text-pink-200 transition">
                            <span>Is The Manthan School affiliated to CBSE?</span>
                            <span class="faq-icon text-xl font-light transform transition-transform">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Yes, The Manthan School follows the progressive CBSE curriculum enriched with international early years and Cambridge English pedagogical practices.
                        </div>
                    </div>

                </div>

                <!-- Mascot illustration badge -->
                <div class="pt-6 hidden sm:flex items-center space-x-4 bg-white/10 rounded-2xl p-4 backdrop-blur-sm border border-white/20">
                    <div class="w-12 h-12 rounded-full bg-white text-brand-pink flex items-center justify-center font-black text-xl shadow">
                        💡
                    </div>
                    <div>
                        <p class="font-bold text-sm text-white">Have a specific question?</p>
                        <p class="text-xs text-pink-100">Our admissions counselors are available Monday to Saturday: 0120-7133925</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT: BOOK A CAMPUS VISIT / ADMISSION ENQUIRY FORM -->
            <div class="lg:col-span-6">
                <div class="bg-white rounded-3xl p-6 sm:p-9 shadow-2xl text-slate-800 border-4 border-white/40">
                    
                    <div class="mb-6">
                        <span class="text-brand-pink text-xs font-extrabold uppercase tracking-widest">Book A Campus Visit</span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold font-heading text-brand-navy mt-1">
                            TELL US ABOUT YOUR CHILD
                        </h3>
                        <p class="text-slate-500 text-xs sm:text-sm mt-1">
                            Five fields. We map age to programme, so you do not have to guess.
                        </p>
                    </div>

                    <!-- Alert message container (Success / Deduplication / Error) -->
                    <div id="enquiry-alert" class="hidden mb-6 p-4 rounded-2xl text-sm font-semibold transition-all"></div>

                    <!-- AJAX Admission Enquiry Form -->
                    <form id="admission-enquiry-form" novalidate class="space-y-4">
                        
                        <!-- Parent Name Field -->
                        <div>
                            <label for="parent_name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                Parent / Guardian Name <span class="text-brand-pink">*</span>
                            </label>
                            <input type="text" 
                                   id="parent_name" 
                                   name="parent_name" 
                                   placeholder="e.g. Ramesh Sharma" 
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:border-brand-pink focus:ring-2 focus:ring-brand-pink/20 transition placeholder-slate-400">
                            <p class="field-error text-xs text-rose-600 font-semibold mt-1 hidden" id="error-parent_name"></p>
                        </div>

                        <!-- Two Column Row: Student Name & Class -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Student Name -->
                            <div>
                                <label for="student_name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                    Child / Student Name <span class="text-brand-pink">*</span>
                                </label>
                                <input type="text" 
                                       id="student_name" 
                                       name="student_name" 
                                       placeholder="e.g. Aarav Sharma" 
                                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:border-brand-pink focus:ring-2 focus:ring-brand-pink/20 transition placeholder-slate-400">
                                <p class="field-error text-xs text-rose-600 font-semibold mt-1 hidden" id="error-student_name"></p>
                            </div>

                            <!-- Class Applying For -->
                            <div>
                                <label for="class_applying_for" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                    Programme of Interest <span class="text-brand-pink">*</span>
                                </label>
                                <select id="class_applying_for" 
                                        name="class_applying_for" 
                                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:border-brand-pink focus:ring-2 focus:ring-brand-pink/20 transition text-slate-700">
                                    <option value="" disabled selected>Select Programme / Class</option>
                                    <option value="Toddlers">Toddlers (1.5 - 2.5 yrs)</option>
                                    <option value="Pre-Nursery">Pre-Nursery (2.5 - 3.5 yrs)</option>
                                    <option value="Nursery">Nursery (3.5 - 4.5 yrs)</option>
                                    <option value="Kindergarten">Kindergarten (4.5 - 5.5 yrs)</option>
                                    <option value="Grade 1">Grade 1 (Primary)</option>
                                    <option value="Grade 2">Grade 2 (Primary)</option>
                                </select>
                                <p class="field-error text-xs text-rose-600 font-semibold mt-1 hidden" id="error-class_applying_for"></p>
                            </div>
                        </div>

                        <!-- Two Column Row: Mobile & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Mobile Number -->
                            <div>
                                <label for="mobile" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                    Mobile Number <span class="text-brand-pink">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-xs font-bold text-slate-400">+91</span>
                                    <input type="tel" 
                                           id="mobile" 
                                           name="mobile" 
                                           maxlength="10"
                                           placeholder="10-digit number" 
                                           class="w-full pl-12 pr-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:border-brand-pink focus:ring-2 focus:ring-brand-pink/20 transition placeholder-slate-400">
                                </div>
                                <p class="field-error text-xs text-rose-600 font-semibold mt-1 hidden" id="error-mobile"></p>
                            </div>

                            <!-- Email Address (Optional) -->
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                    Email Address <span class="text-slate-400 text-[10px] lowercase">(optional)</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       placeholder="parent@example.com" 
                                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:border-brand-pink focus:ring-2 focus:ring-brand-pink/20 transition placeholder-slate-400">
                                <p class="field-error text-xs text-rose-600 font-semibold mt-1 hidden" id="error-email"></p>
                            </div>
                        </div>

                        <!-- Message (Optional) -->
                        <div>
                            <label for="message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                Questions or Special Notes <span class="text-slate-400 text-[10px] lowercase">(optional)</span>
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="2" 
                                      placeholder="Any specific questions about transport, timings, or siblings?" 
                                      class="w-full px-4 py-2 rounded-xl border border-slate-200 text-sm focus:border-brand-pink focus:ring-2 focus:ring-brand-pink/20 transition placeholder-slate-400"></textarea>
                            <p class="field-error text-xs text-rose-600 font-semibold mt-1 hidden" id="error-message"></p>
                        </div>

                        <!-- Consent Checkbox -->
                        <div class="flex items-start pt-1">
                            <input type="checkbox" 
                                   id="consent" 
                                   name="consent" 
                                   checked 
                                   class="mt-1 w-4 h-4 text-brand-pink border-slate-300 rounded focus:ring-brand-pink">
                            <label for="consent" class="ml-2.5 text-xs text-slate-600 leading-snug">
                                I agree to be contacted by The Manthan School admissions team via phone, WhatsApp, or email regarding admissions at the Noida campus.
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-3">
                            <button type="submit" 
                                    id="submit-enquiry-btn" 
                                    class="w-full py-3.5 px-6 rounded-2xl bg-brand-pink hover:bg-brand-pink-hover text-white font-extrabold text-sm uppercase tracking-wider shadow-lg shadow-pink-500/30 transition transform hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center">
                                <span id="btn-text">Book My Visit</span>
                                <svg id="btn-spinner" class="animate-spin ml-2 h-4 w-4 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Footer Sub-links from Screenshot 3 -->
                        <div class="pt-3 text-center border-t border-slate-100 mt-4">
                            <div class="flex flex-wrap justify-center items-center gap-x-3 gap-y-1 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                <a href="#faq" class="hover:text-brand-pink transition">Age Criteria</a>
                                <span>|</span>
                                <a href="#faq" class="hover:text-brand-pink transition">Fee Structure</a>
                                <span>|</span>
                                <a href="#faq" class="hover:text-brand-pink transition">Admission FAQs</a>
                                <span>|</span>
                                <a href="tel:01207133925" class="hover:text-brand-pink transition">Call Helpline</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- ============================================================== -->
<!-- CAMPUS LOCATION & VISITS (From Mockup Image 1)                 -->
<!-- ============================================================== -->
<section id="campus" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-xl mx-auto mb-12">
            <span class="text-brand-pink text-xs font-bold uppercase tracking-widest">Visit Us In Person</span>
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-brand-navy mt-1">
                COME AND SEE THE CAMPUS
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm mt-1">
                Sector 78, Noida. Visits run during school hours on working days.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-50 rounded-3xl p-6 sm:p-10 border border-slate-200">
            <!-- Campus Building Photo -->
            <div class="lg:col-span-6 rounded-2xl overflow-hidden shadow-md">
                <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=1200&q=80" 
                     alt="The Manthan School Noida Gate" 
                     class="w-full h-80 object-cover">
            </div>

            <!-- Campus Details Grid -->
            <div class="lg:col-span-6 space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-xs font-bold text-pink-600 uppercase tracking-wider">Address</h4>
                        <p class="text-sm text-slate-800 font-semibold mt-1">
                            Sector 78, Noida,<br>
                            Uttar Pradesh 201301
                        </p>
                        <p class="text-xs text-slate-500 mt-1">Near Mahagun Moderne & Olympia</p>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold text-pink-600 uppercase tracking-wider">Phone</h4>
                        <p class="text-sm text-slate-800 font-semibold mt-1">
                            Front office: <a href="tel:01204984255" class="hover:text-brand-pink">0120-4984255</a><br>
                            Admissions: <a href="tel:+919643304760" class="hover:text-brand-pink text-pink-600">+91 96433 04760</a>
                        </p>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold text-pink-600 uppercase tracking-wider">Email</h4>
                        <p class="text-sm text-slate-800 font-semibold mt-1">
                            <a href="mailto:info@manthan.edu.in" class="hover:text-brand-pink">info@manthan.edu.in</a><br>
                            <a href="mailto:admission@manthan.edu.in" class="hover:text-brand-pink">admission@manthan.edu.in</a>
                        </p>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold text-pink-600 uppercase tracking-wider">Office Hours</h4>
                        <p class="text-sm text-slate-800 font-semibold mt-1">
                            Monday to Saturday<br>
                            8:00 AM – 4:00 PM
                        </p>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-200 flex flex-wrap gap-3">
                    <a href="#enquiry" class="px-6 py-2.5 rounded-full bg-brand-navy hover:bg-brand-navy-light text-white text-xs font-bold shadow transition">
                        Schedule Tour Now
                    </a>
                    <a href="https://maps.google.com/?q=The+Manthan+School+Noida" target="_blank" rel="noopener" class="px-5 py-2.5 rounded-full bg-white hover:bg-slate-100 border border-slate-300 text-slate-700 text-xs font-bold transition flex items-center">
                        <svg class="w-3.5 h-3.5 mr-1.5 text-pink-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                        Open in Google Maps
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // -------------------------------------------------------------
    // FAQ Accordion Interaction
    // -------------------------------------------------------------
    const faqButtons = document.querySelectorAll('.faq-toggle');
    faqButtons.forEach(button => {
        button.addEventListener('click', function () {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            const isHidden = content.classList.contains('hidden');

            // Close all open FAQs
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => {
                i.textContent = '+';
                i.classList.remove('rotate-45');
            });

            if (isHidden) {
                content.classList.remove('hidden');
                icon.textContent = '−';
            }
        });
    });

    // -------------------------------------------------------------
    // Admission Enquiry AJAX Submission
    // -------------------------------------------------------------
    const form = document.getElementById('admission-enquiry-form');
    const alertBox = document.getElementById('enquiry-alert');
    const submitBtn = document.getElementById('submit-enquiry-btn');
    const btnText = document.getElementById('btn-text');
    const btnSpinner = document.getElementById('btn-spinner');

    if (form) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            // Clear previous errors & alerts
            clearErrors();
            hideAlert();

            // Form data preparation
            const formData = {
                parent_name: document.getElementById('parent_name').value.trim(),
                student_name: document.getElementById('student_name').value.trim(),
                class_applying_for: document.getElementById('class_applying_for').value,
                mobile: document.getElementById('mobile').value.trim(),
                email: document.getElementById('email').value.trim(),
                message: document.getElementById('message').value.trim(),
            };

            // Loading state
            setLoading(true);

            try {
                const response = await fetch("{{ route('admission-enquiry.store') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();

                if (response.status === 201 && data.success) {
                    // Success!
                    showAlert('success', data.message || 'Thank you! Your enquiry has been received successfully.');
                    form.reset();
                } else if (data.duplicate) {
                    // 24-Hour Deduplication Rule Hit!
                    showAlert('warning', data.message || 'We have already received your enquiry.');
                } else if (response.status === 422) {
                    // Validation errors (show under each field)
                    if (data.errors) {
                        for (const [field, messages] of Object.entries(data.errors)) {
                            showFieldError(field, messages[0]);
                        }
                    }
                    showAlert('error', 'Please correct the highlighted errors below and submit again.');
                } else if (response.status === 429) {
                    // Rate limit exceeded (5 requests per min)
                    showAlert('error', 'Too many enquiry requests. Please wait a moment before trying again.');
                } else {
                    showAlert('error', data.message || 'Something went wrong. Please try again or call our admissions desk.');
                }
            } catch (err) {
                console.error('Enquiry submission error:', err);
                showAlert('error', 'Unable to submit enquiry right now due to a network issue. Please check your connection or call us at 0120-7133925.');
            } finally {
                setLoading(false);
            }
        });

        // Clear field error as user types
        ['parent_name', 'student_name', 'class_applying_for', 'mobile', 'email', 'message'].forEach(id => {
            const el = document.getElementById(id);
            if (el) {
                el.addEventListener('input', () => clearFieldError(id));
                el.addEventListener('change', () => clearFieldError(id));
            }
        });
    }

    function setLoading(isLoading) {
        if (!submitBtn) return;
        submitBtn.disabled = isLoading;
        if (isLoading) {
            btnText.textContent = 'Submitting...';
            btnSpinner.classList.remove('hidden');
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
        } else {
            btnText.textContent = 'Book My Visit';
            btnSpinner.classList.add('hidden');
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
        }
    }

    function showAlert(type, message) {
        if (!alertBox) return;
        alertBox.className = 'mb-6 p-4 rounded-2xl text-sm font-semibold transition-all';
        
        if (type === 'success') {
            alertBox.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200');
            alertBox.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span>${message}</span>
                </div>
            `;
        } else if (type === 'warning') {
            alertBox.classList.add('bg-amber-50', 'text-amber-800', 'border', 'border-amber-300');
            alertBox.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-amber-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span>${message}</span>
                </div>
            `;
        } else {
            alertBox.classList.add('bg-rose-50', 'text-rose-800', 'border', 'border-rose-200');
            alertBox.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-rose-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span>${message}</span>
                </div>
            `;
        }

        alertBox.classList.remove('hidden');
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function hideAlert() {
        if (!alertBox) return;
        alertBox.classList.add('hidden');
    }

    function showFieldError(field, msg) {
        const errorEl = document.getElementById(`error-${field}`);
        const inputEl = document.getElementById(field);
        if (errorEl) {
            errorEl.textContent = msg;
            errorEl.classList.remove('hidden');
        }
        if (inputEl) {
            inputEl.classList.add('border-rose-500', 'bg-rose-50/30');
        }
    }

    function clearFieldError(field) {
        const errorEl = document.getElementById(`error-${field}`);
        const inputEl = document.getElementById(field);
        if (errorEl) {
            errorEl.classList.add('hidden');
            errorEl.textContent = '';
        }
        if (inputEl) {
            inputEl.classList.remove('border-rose-500', 'bg-rose-50/30');
        }
    }

    function clearErrors() {
        document.querySelectorAll('.field-error').forEach(el => {
            el.classList.add('hidden');
            el.textContent = '';
        });
        document.querySelectorAll('#admission-enquiry-form input, #admission-enquiry-form select, #admission-enquiry-form textarea').forEach(el => {
            el.classList.remove('border-rose-500', 'bg-rose-50/30');
        });
    }
});
</script>
@endpush
