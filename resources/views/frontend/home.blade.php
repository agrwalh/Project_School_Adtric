@extends('layouts.frontend')

@section('title', 'The Manthan School | Best Pre-Primary & Primary School in Noida Sector 78')
@section('meta_description', 'The Manthan School Noida - A Mahagun Initiative. Experiential, holistic early childhood learning in a secure and nurturing campus.')

@push('styles')
<style>
    /* Hide scrollbar for clean carousels */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    /* Grab cursor for drag scrolling */
    .grab-scroll {
        cursor: grab;
    }
    .grab-scroll:active {
        cursor: grabbing;
    }
</style>
@endpush

@section('content')

<!-- ============================================================== -->
<!-- SECTION 1: HERO HEADER (Matching Screenshot 14)                -->
<!-- ============================================================== -->
<section class="relative bg-brand-navy min-h-[560px] lg:min-h-[640px] flex items-center overflow-hidden">
    <!-- Hero Background Image (Children on yellow car) -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero_photo.jpg') }}" 
             alt="The Manthan School Children" 
             class="w-full h-full object-cover object-center filter brightness-95">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="max-w-2xl text-white">
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black font-heading leading-tight tracking-tight drop-shadow-md select-none">
                A LITTLE <br>
                WORLD OF <span class="text-white">BIG</span> <br>
                BEGINNINGS
            </h1>
            <p class="mt-4 sm:mt-6 text-sm sm:text-base text-slate-100 max-w-lg leading-relaxed font-sans">
                Early years education rooted in play, care and curious discovery. For toddlers to Grade 2.
            </p>

            <div class="flex flex-wrap items-center gap-4 pt-6">
                <!-- Book a campus visit pill button matching screenshot 14 -->
                <a href="#enquiry" 
                   class="px-8 py-3.5 rounded-full border-2 border-white text-white hover:bg-white hover:text-brand-navy font-bold text-xs uppercase tracking-wider backdrop-blur-sm transition duration-200 transform hover:-translate-y-0.5 shadow-lg">
                    BOOK A CAMPUS VISIT
                </a>

                <!-- Watch the school film link with play icon -->
                <button type="button" 
                        onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1', 'The Manthan School Experience Film')" 
                        class="inline-flex items-center text-xs font-bold text-white hover:text-pink-300 transition duration-200 group ml-2">
                    <span class="w-10 h-10 rounded-full bg-white/20 border border-white/40 flex items-center justify-center mr-2.5 group-hover:scale-110 group-hover:bg-brand-pink transition">
                        <svg class="w-4 h-4 text-white fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </span>
                    <span>Watch the school film</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Bottom Cloud Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 h-10 w-full overflow-hidden leading-none z-10 pointer-events-none">
        <svg class="relative block w-full h-10 text-brand-pink fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 2: LEARNING BEGINS WITH WONDER (Matching Screenshot 11)-->
<!-- ============================================================== -->
<section class="bg-brand-pink text-white py-16 lg:py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-6">
                <h2 class="text-3xl sm:text-5xl font-black font-heading leading-tight tracking-tight select-none">
                    LEARNING BEGINS <br>
                    WITH WONDER
                </h2>
                <p class="text-sm sm:text-base text-pink-100 leading-relaxed font-sans max-w-lg">
                    Children do not start as blank slates. They arrive full of questions, ideas and their own view of everything around them. Our role is to create a space safe enough to try, rich enough to explore, and warm enough to fail in.
                </p>
                <div class="pt-2">
                    <a href="#safe" 
                       class="inline-block px-7 py-3 rounded-full border-2 border-white text-white hover:bg-white hover:text-brand-pink font-bold text-xs uppercase tracking-wider transition">
                        EXPLORE OUR PHILOSOPHY →
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white/20 transform rotate-1 hover:rotate-0 transition duration-300">
                    <img src="{{ asset('images/drums_photo.jpg') }}" 
                         alt="Children playing drums at Manthan School" 
                         class="w-full h-auto object-cover">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 3: WHY THE MANTHAN SCHOOL (Matching Screenshot 10)     -->
<!-- ============================================================== -->
<section class="bg-white py-16 lg:py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        
        <!-- Centered Section Title with Pink Wave Underline -->
        <div class="text-center mb-10">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black font-heading text-brand-navy tracking-tight select-none">
                WHY THE MANTHAN SCHOOL
            </h2>
            <div class="w-28 h-1.5 bg-brand-pink rounded-full mx-auto mt-2"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mt-6">
            
            <!-- Left Text Content -->
            <div class="lg:col-span-5 space-y-6">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-brand-pink leading-tight tracking-tight select-none">
                    EXPERIENTIAL <br>
                    LEARNING FOR <br>
                    HOLISTIC GROWTH
                </h3>
                <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-sans max-w-md">
                    Experiential, competency based learning that builds curiosity, confidence and strong values, in a safe campus with experienced educators.
                </p>
                <div class="pt-2">
                    <a href="#enquiry" 
                       class="inline-block px-7 py-3 rounded-full border-2 border-brand-pink text-brand-pink hover:bg-brand-pink hover:text-white font-bold text-xs uppercase tracking-wider transition duration-200">
                        READ THE MANTHAN MANTRA
                    </a>
                </div>
            </div>

            <!-- Right Visual Illustration with Kids & Doodles (from Screenshot 10) -->
            <div class="lg:col-span-7 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-xl">
                    <img src="{{ asset('images/kids_drawing_full.png') }}" 
                         alt="Experiential Learning at Manthan School" 
                         class="w-full h-auto drop-shadow-md select-none rounded-2xl">
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 4: THE RIGHT BEGINNING FOR EVERY STAGE (Screenshot 9)  -->
<!-- Interactive Smooth Carousel Slider                             -->
<!-- ============================================================== -->
<section id="programmes" class="bg-brand-pink py-16 lg:py-20 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-10">
            <span class="text-pink-200 text-sm font-black font-heading tracking-widest uppercase block mb-1">
                DISCOVERY AND POSSIBILITY.
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight select-none">
                THE RIGHT BEGINNING FOR EVERY STAGE
            </h2>
        </div>

        <!-- 6 Stage Cards Interactive Carousel -->
        <div id="stages-carousel" 
             class="flex space-x-6 overflow-x-auto scroll-smooth no-scrollbar py-4 px-1 grab-scroll select-none">
            
            <!-- 1. Toddlers -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-4 bg-slate-200 shadow-inner">
                        <img src="{{ asset('images/stage_toddlers.jpg') }}" alt="Toddlers" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Toddlers</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2.5 py-0.5 rounded-full border border-slate-200 shadow-sm">1.5 - 2.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Cuddle Bugs</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        First days away from home. Settling in, sensory play and one familiar adult.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition inline-flex items-center">
                        Explore <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

            <!-- 2. Pre-Nursery -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-4 bg-slate-200 shadow-inner">
                        <img src="{{ asset('images/stage_prenursery.jpg') }}" alt="Pre-Nursery" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Pre-Nursery</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2.5 py-0.5 rounded-full border border-slate-200 shadow-sm">2.5 - 3.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Hatchlings</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Language begins. Songs, stories, sharing and the first shape of a joyful routine.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition inline-flex items-center">
                        Explore <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

            <!-- 3. Nursery -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-4 bg-slate-200 shadow-inner">
                        <img src="{{ asset('images/stage_nursery.jpg') }}" alt="Nursery" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Nursery</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2.5 py-0.5 rounded-full border border-slate-200 shadow-sm">3.5 - 4.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Nestlings</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Letters, numbers and friendships, all of it still through play, making and curiosity.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition inline-flex items-center">
                        Explore <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

            <!-- 4. Kindergarten -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-4 bg-slate-200 shadow-inner">
                        <img src="{{ asset('images/stage_kindergarten.jpg') }}" alt="Kindergarten" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Kindergarten</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2.5 py-0.5 rounded-full border border-slate-200 shadow-sm">4.5 - 5.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Fledglings</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Reading, early writing, numeric literacy and the confidence to express in a group.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition inline-flex items-center">
                        Explore <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

            <!-- 5. Grade 1 -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-4 bg-slate-200 shadow-inner">
                        <img src="{{ asset('images/stage_grade1.jpg') }}" alt="Grade 1" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Grade 1</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2.5 py-0.5 rounded-full border border-slate-200 shadow-sm">5.5 - 6.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Explorers</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Foundational literacy, arithmetic fluency, environmental awareness and team tasks.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition inline-flex items-center">
                        Explore <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

            <!-- 6. Grade 2 -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-4 bg-slate-200 shadow-inner">
                        <img src="{{ asset('images/stage_grade2.jpg') }}" alt="Grade 2" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Grade 2</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2.5 py-0.5 rounded-full border border-slate-200 shadow-sm">6.5 - 7.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Innovators</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Inquiry-led learning, project-based science and critical thinking for young minds.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition inline-flex items-center">
                        Explore <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Carousel Navigation Controls & Indicator Dots (Matching Screenshot 9) -->
        <div class="flex items-center justify-between pt-6">
            <!-- 6 Interactive Indicator Dots -->
            <div class="flex items-center space-x-2">
                <button type="button" onclick="scrollToSlide('stages-carousel', 0)" id="dot-stages-0" class="w-8 h-2.5 rounded-full bg-cyan-400 transition-all duration-300" aria-label="Slide 1"></button>
                <button type="button" onclick="scrollToSlide('stages-carousel', 1)" id="dot-stages-1" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 2"></button>
                <button type="button" onclick="scrollToSlide('stages-carousel', 2)" id="dot-stages-2" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 3"></button>
                <button type="button" onclick="scrollToSlide('stages-carousel', 3)" id="dot-stages-3" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 4"></button>
                <button type="button" onclick="scrollToSlide('stages-carousel', 4)" id="dot-stages-4" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 5"></button>
                <button type="button" onclick="scrollToSlide('stages-carousel', 5)" id="dot-stages-5" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 6"></button>
            </div>
            
            <!-- Left & Right Arrow Navigation Buttons -->
            <div class="flex items-center space-x-3 text-white">
                <button type="button" 
                        onclick="scrollCarousel('stages-carousel', -1)" 
                        class="w-11 h-11 rounded-full border-2 border-white/40 hover:border-white hover:bg-white hover:text-brand-pink flex items-center justify-center font-black transition active:scale-95 shadow" 
                        aria-label="Previous Stage">
                    ←
                </button>
                <button type="button" 
                        onclick="scrollCarousel('stages-carousel', 1)" 
                        class="w-11 h-11 rounded-full border-2 border-white/40 hover:border-white hover:bg-white hover:text-brand-pink flex items-center justify-center font-black transition active:scale-95 shadow" 
                        aria-label="Next Stage">
                    →
                </button>
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 5: A DAY AT MANTHAN (Matching Screenshot 8)            -->
<!-- Interactive Timeline Carousel Slider                           -->
<!-- ============================================================== -->
<section class="bg-brand-navy py-16 lg:py-20 text-white relative overflow-hidden">
    
    <!-- Top Cloud Curves Divider -->
    <div class="absolute top-0 left-0 right-0 h-10 w-full overflow-hidden leading-none pointer-events-none rotate-180">
        <svg class="relative block w-full h-10 text-brand-pink fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-4">
        
        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-10">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight select-none">
                A DAY AT MANTHAN
            </h2>
            <a href="#enquiry" 
               class="mt-4 sm:mt-0 inline-flex items-center text-xs font-bold uppercase tracking-wider text-white hover:text-cyan-400 transition">
                SEE THE FULL DAY PLAN →
            </a>
        </div>

        <!-- 7 Schedule Period Cards Carousel -->
        <div id="day-carousel" 
             class="flex space-x-6 overflow-x-auto scroll-smooth no-scrollbar py-4 px-1 grab-scroll select-none">
            
            <!-- Period 1: 08:30 -->
            <div class="w-[320px] sm:w-[350px] flex-shrink-0 group bg-brand-navy-light/40 border border-white/10 hover:border-cyan-400/40 p-4 rounded-3xl transition duration-300 hover:-translate-y-1.5 shadow-lg">
                <div class="h-52 rounded-2xl overflow-hidden mb-4 bg-slate-800">
                    <img src="{{ asset('images/day_1.jpg') }}" alt="Arrival" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <span class="text-cyan-400 text-xs font-bold font-mono">08:30</span>
                <h3 class="font-heading font-black text-lg text-white mt-1 mb-1">Arrival and circle time</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-sans">
                    A hand to hold at the gate, then the whole group sits together to sing and welcome the morning.
                </p>
            </div>

            <!-- Period 2: 09:00 -->
            <div class="w-[320px] sm:w-[350px] flex-shrink-0 group bg-brand-navy-light/40 border border-white/10 hover:border-cyan-400/40 p-4 rounded-3xl transition duration-300 hover:-translate-y-1.5 shadow-lg">
                <div class="h-52 rounded-2xl overflow-hidden mb-4 bg-slate-800">
                    <img src="{{ asset('images/day_2.jpg') }}" alt="Free Play" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <span class="text-cyan-400 text-xs font-bold font-mono">09:00</span>
                <h3 class="font-heading font-black text-lg text-white mt-1 mb-1">Free play</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-sans">
                    Children choose their learning corners. Teachers observe, support and note emerging curiosities.
                </p>
            </div>

            <!-- Period 3: 09:45 -->
            <div class="w-[320px] sm:w-[350px] flex-shrink-0 group bg-brand-navy-light/40 border border-white/10 hover:border-cyan-400/40 p-4 rounded-3xl transition duration-300 hover:-translate-y-1.5 shadow-lg">
                <div class="h-52 rounded-2xl overflow-hidden mb-4 bg-slate-800">
                    <img src="{{ asset('images/day_3.jpg') }}" alt="Guided Learning" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <span class="text-cyan-400 text-xs font-bold font-mono">09:45</span>
                <h3 class="font-heading font-black text-lg text-white mt-1 mb-1">Guided learning</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-sans">
                    Small peer groups. Phonics sounds, numbers, pattern blocks, and hands-on sensory exploration.
                </p>
            </div>

            <!-- Period 4: 10:30 -->
            <div class="w-[320px] sm:w-[350px] flex-shrink-0 group bg-brand-navy-light/40 border border-white/10 hover:border-cyan-400/40 p-4 rounded-3xl transition duration-300 hover:-translate-y-1.5 shadow-lg">
                <div class="h-52 rounded-2xl overflow-hidden mb-4 bg-slate-800">
                    <img src="{{ asset('images/day_4.jpg') }}" alt="Snack Time" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <span class="text-cyan-400 text-xs font-bold font-mono">10:30</span>
                <h3 class="font-heading font-black text-lg text-white mt-1 mb-1">Snack & hydration break</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-sans">
                    Wholesome fruits, table manners, independent eating and warm chatter with friends.
                </p>
            </div>

            <!-- Period 5: 11:15 -->
            <div class="w-[320px] sm:w-[350px] flex-shrink-0 group bg-brand-navy-light/40 border border-white/10 hover:border-cyan-400/40 p-4 rounded-3xl transition duration-300 hover:-translate-y-1.5 shadow-lg">
                <div class="h-52 rounded-2xl overflow-hidden mb-4 bg-slate-800">
                    <img src="{{ asset('images/day_5.jpg') }}" alt="Outdoor Play" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <span class="text-cyan-400 text-xs font-bold font-mono">11:15</span>
                <h3 class="font-heading font-black text-lg text-white mt-1 mb-1">Motor skills & play</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-sans">
                    Running, climbing, skating, balancing beams, and gross motor physical development.
                </p>
            </div>

            <!-- Period 6: 12:00 -->
            <div class="w-[320px] sm:w-[350px] flex-shrink-0 group bg-brand-navy-light/40 border border-white/10 hover:border-cyan-400/40 p-4 rounded-3xl transition duration-300 hover:-translate-y-1.5 shadow-lg">
                <div class="h-52 rounded-2xl overflow-hidden mb-4 bg-slate-800">
                    <img src="{{ asset('images/day_6.jpg') }}" alt="Storytelling" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <span class="text-cyan-400 text-xs font-bold font-mono">12:00</span>
                <h3 class="font-heading font-black text-lg text-white mt-1 mb-1">Story & creative arts</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-sans">
                    Puppet theatres, read-aloud rhymes, painting, clay modeling and expressive musical rhythm.
                </p>
            </div>

            <!-- Period 7: 12:45 -->
            <div class="w-[320px] sm:w-[350px] flex-shrink-0 group bg-brand-navy-light/40 border border-white/10 hover:border-cyan-400/40 p-4 rounded-3xl transition duration-300 hover:-translate-y-1.5 shadow-lg">
                <div class="h-52 rounded-2xl overflow-hidden mb-4 bg-slate-800">
                    <img src="{{ asset('images/day_7.jpg') }}" alt="Reflection" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <span class="text-cyan-400 text-xs font-bold font-mono">12:45</span>
                <h3 class="font-heading font-black text-lg text-white mt-1 mb-1">Circle reflection</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-sans">
                    Gathering daily discoveries, packing personal bags and calm, safe handover at dispersal.
                </p>
            </div>

        </div>

        <!-- Carousel Navigation Controls & Indicator Dots (Matching Screenshot 8) -->
        <div class="flex items-center justify-between pt-6">
            <!-- 7 Interactive Indicator Dots -->
            <div class="flex items-center space-x-2">
                <button type="button" onclick="scrollToSlide('day-carousel', 0)" id="dot-day-0" class="w-8 h-2.5 rounded-full bg-cyan-400 transition-all duration-300" aria-label="Step 1"></button>
                <button type="button" onclick="scrollToSlide('day-carousel', 1)" id="dot-day-1" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Step 2"></button>
                <button type="button" onclick="scrollToSlide('day-carousel', 2)" id="dot-day-2" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Step 3"></button>
                <button type="button" onclick="scrollToSlide('day-carousel', 3)" id="dot-day-3" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Step 4"></button>
                <button type="button" onclick="scrollToSlide('day-carousel', 4)" id="dot-day-4" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Step 5"></button>
                <button type="button" onclick="scrollToSlide('day-carousel', 5)" id="dot-day-5" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Step 6"></button>
                <button type="button" onclick="scrollToSlide('day-carousel', 6)" id="dot-day-6" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Step 7"></button>
            </div>

            <!-- Left & Right Arrow Navigation Buttons -->
            <div class="flex items-center space-x-3 text-white">
                <button type="button" 
                        onclick="scrollCarousel('day-carousel', -1)" 
                        class="w-11 h-11 rounded-full border-2 border-white/40 hover:border-white hover:bg-white hover:text-brand-navy flex items-center justify-center font-black transition active:scale-95 shadow" 
                        aria-label="Previous Period">
                    ←
                </button>
                <button type="button" 
                        onclick="scrollCarousel('day-carousel', 1)" 
                        class="w-11 h-11 rounded-full border-2 border-white/40 hover:border-white hover:bg-white hover:text-brand-navy flex items-center justify-center font-black transition active:scale-95 shadow" 
                        aria-label="Next Period">
                    →
                </button>
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 6: THE ROOMS YOUR CHILD WILL BE IN (Screenshot 13)     -->
<!-- ============================================================== -->
<section class="bg-[#fcfaf7] py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-xl mx-auto mb-12">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-brand-navy tracking-tight select-none">
                THE ROOMS YOUR <br>
                CHILD WILL BE IN
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Classrooms -->
            <div class="group relative rounded-3xl overflow-hidden shadow-md bg-slate-900 h-64">
                <img src="{{ asset('images/room_classroom.jpg') }}" alt="Classrooms" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-95">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                    <h3 class="text-white font-heading font-black text-lg">Classrooms</h3>
                </div>
            </div>

            <!-- Activity & Art Room -->
            <div class="group relative rounded-3xl overflow-hidden shadow-md bg-slate-900 h-64">
                <img src="{{ asset('images/room_activity.jpg') }}" alt="Activity and art room" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-95">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                    <h3 class="text-white font-heading font-black text-lg">Activity and art room</h3>
                </div>
            </div>

            <!-- Library Corner -->
            <div class="group relative rounded-3xl overflow-hidden shadow-md bg-slate-900 h-64">
                <img src="{{ asset('images/room_library.jpg') }}" alt="Library corner" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-95">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                    <h3 class="text-white font-heading font-black text-lg">Library corner</h3>
                </div>
            </div>

            <!-- Indoor Play Area -->
            <div class="group relative rounded-3xl overflow-hidden shadow-md bg-slate-900 h-64">
                <img src="{{ asset('images/room_indoor.jpg') }}" alt="Indoor play area" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-95">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                    <h3 class="text-white font-heading font-black text-lg">Indoor play area</h3>
                </div>
            </div>

            <!-- Outdoor Play Area (Span 2 on lg) -->
            <div class="lg:col-span-2 group relative rounded-3xl overflow-hidden shadow-md bg-slate-900 h-64">
                <img src="{{ asset('images/room_outdoor.jpg') }}" alt="Outdoor play area" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-95">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                    <h3 class="text-white font-heading font-black text-lg">Outdoor play area</h3>
                </div>
            </div>

            <!-- Care Room and Washrooms (Span 2 on lg) -->
            <div class="lg:col-span-2 group relative rounded-3xl overflow-hidden shadow-md bg-slate-900 h-64">
                <img src="{{ asset('images/room_care.jpg') }}" alt="Care room and washrooms" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-95">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                    <h3 class="text-white font-heading font-black text-lg">Care room and washrooms</h3>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 7: SIGNATURE PROGRAMMES (Matching Screenshot 4)        -->
<!-- Interactive Programmes Carousel Slider                         -->
<!-- ============================================================== -->
<section class="bg-brand-navy py-16 lg:py-20 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-10">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight select-none">
                SIGNATURE PROGRAMMES
            </h2>
            <a href="#enquiry" 
               class="mt-4 sm:mt-0 px-6 py-2.5 rounded-full border border-white/60 text-white hover:bg-white hover:text-brand-navy font-bold text-xs uppercase tracking-wider transition">
                EXPLORE BEYOND ACADEMICS →
            </a>
        </div>

        <!-- 6 Signature Programme Cards Carousel -->
        <div id="signature-carousel" 
             class="flex space-x-6 overflow-x-auto scroll-smooth no-scrollbar py-4 px-1 grab-scroll select-none">
            
            <!-- 1. Around the World -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('images/prog_1.jpg') }}" alt="Around the World" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-heading font-black text-base uppercase text-brand-navy mb-2">AROUND THE WORLD IN 365 DAYS</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-sans">
                        A country a month, through food, music, traditional dress, stories and cultural traditions.
                    </p>
                </div>
            </div>

            <!-- 2. The Shin Programme -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('images/prog_2.jpg') }}" alt="The Shin Programme" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-heading font-black text-base uppercase text-brand-navy mb-2">THE SHIN PROGRAMME</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-sans">
                        Concentration, spatial awareness and mental agility trained in short, joyful daily sessions.
                    </p>
                </div>
            </div>

            <!-- 3. Cambridge English -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('images/prog_3.jpg') }}" alt="Cambridge English" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-heading font-black text-base uppercase text-brand-navy mb-2">CAMBRIDGE ENGLISH</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-sans">
                        A globally recognised framework for fluent spoken vocabulary, phonics and written expression.
                    </p>
                </div>
            </div>

            <!-- 4. Robotics -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('images/prog_4.jpg') }}" alt="Robotics" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-heading font-black text-base uppercase text-brand-navy mb-2">ROBOTICS & STEM</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-sans">
                        Cause, effect, sequencing and early logic, built with chunky modular pieces and small hands.
                    </p>
                </div>
            </div>

            <!-- 5. Abacus & Mental Math -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('images/prog_5.jpg') }}" alt="Abacus" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-heading font-black text-base uppercase text-brand-navy mb-2">ABACUS & MENTAL MATH</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-sans">
                        Visualizing bead calculations to develop lightning speed, memory recall and numbers love.
                    </p>
                </div>
            </div>

            <!-- 6. Theatre & Public Oratory -->
            <div class="w-[300px] sm:w-[320px] bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex-shrink-0 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('images/prog_6.jpg') }}" alt="Theatre & Oratory" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-heading font-black text-base uppercase text-brand-navy mb-2">THEATRE & PUBLIC ORATORY</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-sans">
                        Building courageous stage confidence, clear diction, expressive gestures and empathy.
                    </p>
                </div>
            </div>

        </div>

        <!-- Carousel Navigation Controls & Indicator Dots (Matching Screenshot 4) -->
        <div class="flex items-center justify-between pt-6">
            <!-- 6 Interactive Indicator Dots -->
            <div class="flex items-center space-x-2">
                <button type="button" onclick="scrollToSlide('signature-carousel', 0)" id="dot-sig-0" class="w-8 h-2.5 rounded-full bg-cyan-400 transition-all duration-300" aria-label="Slide 1"></button>
                <button type="button" onclick="scrollToSlide('signature-carousel', 1)" id="dot-sig-1" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 2"></button>
                <button type="button" onclick="scrollToSlide('signature-carousel', 2)" id="dot-sig-2" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 3"></button>
                <button type="button" onclick="scrollToSlide('signature-carousel', 3)" id="dot-sig-3" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 4"></button>
                <button type="button" onclick="scrollToSlide('signature-carousel', 4)" id="dot-sig-4" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 5"></button>
                <button type="button" onclick="scrollToSlide('signature-carousel', 5)" id="dot-sig-5" class="w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" aria-label="Slide 6"></button>
            </div>

            <!-- Left & Right Arrow Navigation Buttons -->
            <div class="flex items-center space-x-3 text-white">
                <button type="button" 
                        onclick="scrollCarousel('signature-carousel', -1)" 
                        class="w-11 h-11 rounded-full border-2 border-white/40 hover:border-white hover:bg-white hover:text-brand-navy flex items-center justify-center font-black transition active:scale-95 shadow" 
                        aria-label="Previous Programme">
                    ←
                </button>
                <button type="button" 
                        onclick="scrollCarousel('signature-carousel', 1)" 
                        class="w-11 h-11 rounded-full border-2 border-white/40 hover:border-white hover:bg-white hover:text-brand-navy flex items-center justify-center font-black transition active:scale-95 shadow" 
                        aria-label="Next Programme">
                    →
                </button>
            </div>
        </div>

    </div>

    <!-- Bottom Cloud Wave Divider with Jumping Girl Avatar from Screenshot 4 & 2 -->
    <div class="relative mt-12">
        <div class="h-10 w-full overflow-hidden leading-none pointer-events-none">
            <svg class="relative block w-full h-10 text-white fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 8: HOW WE KEEP YOUR CHILD SAFE (Matching Screenshot 2) -->
<!-- ============================================================== -->
<section id="safe" class="bg-white py-16 lg:py-20 relative">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Centered Header for Safety Section -->
        <div class="text-center max-w-xl mx-auto mb-14">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-brand-navy tracking-tight select-none">
                HOW WE KEEP <br>
                YOUR CHILD SAFE
            </h2>
            <div class="w-24 h-1.5 bg-brand-pink rounded-full mx-auto mt-4"></div>
        </div>

        <!-- 8 Grid Cards (4x2) Matching Exact Icons & Text from Screenshot 2 -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- 1. CCTV -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    CCTV in every classroom, corridor and play area
                </p>
            </div>

            <!-- 2. Caregiver -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    A named caregiver for every group
                </p>
            </div>

            <!-- 3. Cleanliness & Sanitization -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Toys, surfaces and washrooms cleaned and sanitised daily
                </p>
            </div>

            <!-- 4. Child-height furniture -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Child-height furniture and soft edge fittings
                </p>
            </div>

            <!-- 5. Background Verified Staff -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Background verified staff trained in early years care
                </p>
            </div>

            <!-- 6. Controlled Entry -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Controlled entry and authorised pickup only
                </p>
            </div>

            <!-- 7. Nurse On Call -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Nurse on call and first-aid trained staff
                </p>
            </div>

            <!-- 8. GPS Tracked Transport -->
            <div class="p-5 rounded-2xl bg-[#fafbfc] hover:bg-slate-50 transition border border-slate-100 hover:border-slate-200">
                <div class="w-10 h-10 text-cyan-600 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                    </svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    GPS tracked transport with an attendant on every bus
                </p>
            </div>

        </div>

        <!-- Links matching screenshot 2 -->
        <div class="flex flex-wrap items-center justify-center gap-6 mt-12 text-xs font-bold">
            <a href="#safe" class="text-brand-pink hover:text-pink-800 transition">
                Read the safety and care policy →
            </a>
            <a href="#safe" class="text-slate-500 hover:text-slate-800 transition">
                Transport and timings →
            </a>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 9: THE EVENT DIARY (Matching Screenshot 12)            -->
<!-- Mandatory News & Events section with latest 3 items            -->
<!-- ============================================================== -->
<section id="news-events" class="bg-[#faf7f2] py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10">
            <div>
                <span class="text-brand-pink font-bold text-xs uppercase tracking-widest block mb-1">UPDATES & HAPPENINGS</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-brand-navy tracking-tight select-none">
                    THE EVENT DIARY
                </h2>
            </div>
            <a href="{{ route('news-events.index') }}" 
               class="mt-4 sm:mt-0 px-6 py-2.5 rounded-full border border-slate-300 text-brand-navy hover:bg-brand-pink hover:text-white hover:border-brand-pink font-bold text-xs uppercase tracking-wider transition">
                VIEW ALL NEWS & EVENTS →
            </a>
        </div>

        <!-- Latest 3 Published Items Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse(($latestItems ?? $newsEvents ?? []) as $ev)
            <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between border border-slate-200/80 group">
                <div>
                    <div class="h-52 overflow-hidden bg-slate-100 relative">
                        <img src="{{ $ev->image_url }}" 
                             alt="{{ $ev->title }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider shadow-sm
                                @if($ev->category === 'Achievement') bg-amber-500 text-white
                                @elseif($ev->category === 'Event') bg-brand-pink text-white
                                @else bg-brand-navy text-white @endif">
                                {{ $ev->category }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="text-[11px] font-bold text-slate-400 mb-2 font-mono">
                            {{ $ev->formatted_event_date }}
                        </div>
                        <h3 class="font-heading font-black text-lg text-brand-navy group-hover:text-brand-pink transition line-clamp-2">
                            <a href="{{ route('news-events.show', $ev->slug) }}">
                                {{ $ev->title }}
                            </a>
                        </h3>
                        <p class="text-xs text-slate-600 mt-2.5 line-clamp-3 leading-relaxed font-sans">
                            {{ $ev->short_description }}
                        </p>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-2">
                    <a href="{{ route('news-events.show', $ev->slug) }}" 
                       class="text-xs font-bold text-brand-pink hover:text-pink-800 transition inline-flex items-center">
                        Read Story <span class="ml-1">→</span>
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-3 text-center py-12 bg-white rounded-3xl border border-dashed border-slate-300">
                <p class="text-sm text-slate-500">No news or events published yet. Check back soon!</p>
            </div>
            @endforelse
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 10: VISION BEHIND MANTHAN & CTA BANNER (Screenshot 5)  -->
<!-- ============================================================== -->
<section id="vision" class="bg-[#fcfaf7] pt-16 lg:pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-16">
            
            <!-- Principal Video Box with interactive play trigger -->
            <div class="lg:col-span-6">
                <div class="rounded-3xl overflow-hidden shadow-xl relative bg-slate-900 group cursor-pointer"
                     onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1', 'The Vision Behind The Manthan Experience')">
                    <img src="{{ asset('images/principal.jpg') }}" alt="Principal" class="w-full h-80 sm:h-96 object-cover group-hover:scale-[1.02] transition duration-300">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-cyan-400 hover:bg-cyan-300 text-white flex items-center justify-center shadow-2xl transition transform group-hover:scale-110">
                            <svg class="w-6 h-6 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Text matching Screenshot 5 -->
            <div class="lg:col-span-6 space-y-4">
                <h2 class="text-3xl sm:text-4xl font-black font-heading text-brand-navy tracking-tight leading-tight select-none">
                    THE VISION BEHIND <br>
                    THE MANTHAN EXPERIENCE
                </h2>
                <p class="text-xs text-slate-500 font-sans">
                    Insights from our Principal on nurturing curious minds and shaping lifelong learners.
                </p>

                <div class="border-l-4 border-amber-600 pl-4 py-1 my-4">
                    <p class="text-sm sm:text-base text-slate-700 italic font-serif leading-relaxed">
                        "Every child brings a unique potential. Our endeavour is to provide the right environment and guidance to help them thrive."
                    </p>
                    <p class="text-xs text-slate-500 font-bold mt-2">
                        [Name to supply] · Head of School, Noida Campus
                    </p>
                </div>

                <div>
                    <a href="#safe" class="text-xs font-bold text-brand-navy hover:text-brand-pink transition inline-flex items-center">
                        Meet the full team →
                    </a>
                </div>
            </div>

        </div>

    </div>

    <!-- Navy Banner with 3D Boy Building Blocks from Screenshot 5 -->
    <div class="bg-brand-navy text-white py-8 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative">
                
                <div class="space-y-1 text-center md:text-left">
                    <h3 class="font-heading font-black text-xl sm:text-2xl tracking-tight select-none">
                        BRING YOUR CHILD. <br>
                        WATCH ONE SESSION. <br>
                        DECIDE AFTER THAT.
                    </h3>
                </div>

                <div class="text-xs text-slate-300 text-center md:text-left border-y md:border-y-0 md:border-x border-white/20 py-2 md:py-0 md:px-8">
                    Visits run during <br class="hidden sm:inline"> school hours, Monday to Friday.
                </div>

                <div class="flex flex-wrap items-center justify-center gap-3">
                    <a href="#enquiry" 
                       class="px-6 py-3 rounded-full bg-white text-brand-navy hover:bg-slate-100 font-bold text-xs uppercase tracking-wider transition shadow-md">
                        ENQUIRE ABOUT ADMISSION
                    </a>
                    <a href="#enquiry" 
                       class="px-6 py-3 rounded-full bg-brand-pink hover:bg-brand-pink-hover text-white font-bold text-xs uppercase tracking-wider transition shadow-md">
                        BOOK A CAMPUS VISIT
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 11: WHAT PARENTS SAY (Matching Screenshot 7)           -->
<!-- ============================================================== -->
<section class="bg-white py-16 lg:py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-brand-navy tracking-tight select-none">
                WHAT PARENTS SAY
            </h2>
            <a href="#enquiry" class="px-5 py-2 rounded-full border border-slate-300 text-slate-700 font-bold text-xs uppercase tracking-wider hover:border-brand-pink hover:text-brand-pink transition">
                PARENT TESTIMONIALS →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Testimonial 1 -->
            <div class="bg-[#fef8f0] p-6 rounded-3xl shadow-sm border border-slate-200/80 group">
                <div class="h-56 rounded-2xl overflow-hidden relative mb-4 bg-slate-900 cursor-pointer"
                     onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1', 'Parent Testimonial - Nursery')">
                    <img src="{{ asset('images/parent_1.jpg') }}" alt="Parent" class="w-full h-full object-cover group-hover:scale-105 transition duration-300 opacity-95">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-brand-pink hover:bg-brand-pink-hover text-white flex items-center justify-center shadow-lg transition transform group-hover:scale-110">
                            <svg class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
                <h4 class="font-heading font-black text-base text-brand-navy">[Parent name]</h4>
                <p class="text-xs text-cyan-600 font-bold">Parent, Nursery</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-[#fef8f0] p-6 rounded-3xl shadow-sm border border-slate-200/80 group">
                <div class="h-56 rounded-2xl overflow-hidden relative mb-4 bg-slate-900 cursor-pointer"
                     onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1', 'Parent Testimonial - Pre-Nursery')">
                    <img src="{{ asset('images/parent_2.jpg') }}" alt="Parent" class="w-full h-full object-cover group-hover:scale-105 transition duration-300 opacity-95">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-brand-pink hover:bg-brand-pink-hover text-white flex items-center justify-center shadow-lg transition transform group-hover:scale-110">
                            <svg class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
                <h4 class="font-heading font-black text-base text-brand-navy">[Parent name]</h4>
                <p class="text-xs text-cyan-600 font-bold">Parent, Pre-Nursery</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-[#fef8f0] p-6 rounded-3xl shadow-sm border border-slate-200/80 group">
                <div class="h-56 rounded-2xl overflow-hidden relative mb-4 bg-slate-900 cursor-pointer"
                     onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1', 'Parent Testimonial - Kindergarten')">
                    <img src="{{ asset('images/parent_3.jpg') }}" alt="Parent" class="w-full h-full object-cover group-hover:scale-105 transition duration-300 opacity-95">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-brand-pink hover:bg-brand-pink-hover text-white flex items-center justify-center shadow-lg transition transform group-hover:scale-110">
                            <svg class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
                <h4 class="font-heading font-black text-base text-brand-navy">[Parent name]</h4>
                <p class="text-xs text-cyan-600 font-bold">Parent, Kindergarten</p>
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 12: QUESTIONS PARENTS ASK & BOOK A CAMPUS VISIT        -->
<!-- Matching Screenshot 3 with Accordions + Live AJAX Enquiry Form -->
<!-- ============================================================== -->
<section id="faq" class="bg-brand-pink py-16 lg:py-20 text-white relative">
    
    <div id="enquiry" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left: QUESTIONS PARENTS ASK (Accordion from Screenshot 3) -->
            <div class="lg:col-span-6 space-y-4">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight mb-8 select-none">
                    QUESTIONS PARENTS ASK
                </h2>

                <div class="space-y-3 font-sans">
                    <!-- FAQ 1 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>What is the minimum age for Nursery admission?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            For Nursery admission, the child should be 3+ years old as of 31st March of the academic year applied for.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>What are the school timings for each programme?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Pre-Primary (Toddlers to Kindergarten) runs from 8:30 AM to 12:45 PM. Primary (Grade 1 & 2) runs from 8:30 AM to 2:30 PM, Monday through Friday.
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>What is the fee structure?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Our fee structure is transparent with quarterly installments covering tuition, activities, meals and digital learning tools. Contact admissions for the comprehensive brochure.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>How many children are in a group and how many adults?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            We maintain an adult-to-child ratio of 1:8 in early years to ensure individualized warmth, safety and attentive nurturing.
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>Is transport available and which sectors does it cover?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Air-conditioned, GPS-tracked buses with female attendants cover Sectors 74-79, 50-52, 119-122, and Greater Noida West.
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>What does my child need to bring each day?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Just a spill-proof water bottle and an extra pair of comfortable clothes. All stationery, play materials, and learning kits are provided on campus.
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>How do you settle a child who cries in the first week?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Through gentle settling routines, familiar comfort toys, one-on-one caregiver bonding, and inviting sensory play stations.
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="border-b border-white/20 pb-3">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left text-sm sm:text-base font-semibold py-2 hover:text-pink-200 transition">
                            <span>Is The Manthan School affiliated to CBSE?</span>
                            <span class="faq-icon text-xl font-bold ml-2">+</span>
                        </button>
                        <div class="faq-content hidden pt-2 text-xs sm:text-sm text-pink-100 leading-relaxed">
                            Yes, our sister campus in Greater Noida West is affiliated to CBSE up to Senior Secondary level (Grade 12).
                        </div>
                    </div>
                </div>

                <div class="pt-6 flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-white shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs text-pink-100 italic font-medium">Have more questions? Ask our admission advisors in the form!</span>
                </div>
            </div>

            <!-- Right: BOOK A CAMPUS VISIT Form (Matching Screenshot 3) -->
            <div class="lg:col-span-6">
                
                <h2 class="text-3xl sm:text-4xl font-black font-heading tracking-tight mb-4 select-none">
                    BOOK A CAMPUS VISIT
                </h2>

                <div class="bg-white text-slate-800 p-6 sm:p-8 rounded-3xl shadow-2xl">
                    <h3 class="font-heading font-black text-xl text-brand-pink mb-1 select-none">
                        TELL US ABOUT YOUR CHILD
                    </h3>
                    <p class="text-xs text-slate-500 mb-6">
                        Five fields. We map age to programme, so you do not have to guess.
                    </p>

                    <!-- User Friendly Alert Box -->
                    <div id="enquiry-alert" class="hidden mb-4 p-4 rounded-xl text-xs font-semibold"></div>

                    <!-- AJAX Form with custom inline validations (novalidate prevents default browser popup) -->
                    <form id="admission-enquiry-form" method="POST" action="{{ route('admission-enquiry.store') }}" novalidate class="space-y-4">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Parent Name -->
                            <div>
                                <label for="parent_name" class="block text-[11px] font-bold text-slate-700 mb-1">Parent Name <span class="text-brand-pink">*</span></label>
                                <input type="text" 
                                       name="parent_name" 
                                       id="parent_name" 
                                       placeholder="e.g. Rahul Sharma"
                                       class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-pink/50 focus:border-brand-pink transition">
                                <p class="error-text text-[11px] text-red-600 mt-1 hidden font-medium" data-error-for="parent_name"></p>
                            </div>

                            <!-- Mobile Number (Strict 10-digit numeric only) -->
                            <div>
                                <label for="mobile" class="block text-[11px] font-bold text-slate-700 mb-1">Mobile Number <span class="text-brand-pink">*</span></label>
                                <div class="flex" id="mobile-input-container">
                                    <span class="inline-flex items-center px-3 text-xs bg-slate-100 border border-r-0 border-slate-300 rounded-l-xl text-slate-600 font-semibold select-none">+91</span>
                                    <input type="tel" 
                                           name="mobile" 
                                           id="mobile" 
                                           placeholder="10-digit Indian number"
                                           maxlength="10"
                                           inputmode="numeric"
                                           pattern="[6-9][0-9]{9}"
                                           oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                                           class="w-full px-3.5 py-2.5 text-xs rounded-r-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-pink/50 focus:border-brand-pink transition">
                                </div>
                                <p class="error-text text-[11px] text-red-600 mt-1 hidden font-medium" data-error-for="mobile"></p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Email Address -->
                            <div>
                                <label for="email" class="block text-[11px] font-bold text-slate-700 mb-1">Email Address</label>
                                <input type="email" 
                                       name="email" 
                                       id="email" 
                                       placeholder="parent@example.com"
                                       class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-pink/50 focus:border-brand-pink transition">
                                <p class="error-text text-[11px] text-red-600 mt-1 hidden font-medium" data-error-for="email"></p>
                            </div>

                            <!-- Student / Child's Name -->
                            <div>
                                <label for="student_name" class="block text-[11px] font-bold text-slate-700 mb-1">Child's Name <span class="text-brand-pink">*</span></label>
                                <input type="text" 
                                       name="student_name" 
                                       id="student_name" 
                                       placeholder="e.g. Aarav Sharma"
                                       class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-pink/50 focus:border-brand-pink transition">
                                <p class="error-text text-[11px] text-red-600 mt-1 hidden font-medium" data-error-for="student_name"></p>
                            </div>
                        </div>

                        <!-- Programme of Interest -->
                        <div>
                            <label for="class_applying_for" class="block text-[11px] font-bold text-slate-700 mb-1">Programme of Interest <span class="text-brand-pink">*</span></label>
                            <select name="class_applying_for" 
                                    id="class_applying_for" 
                                    class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-pink/50 focus:border-brand-pink bg-white transition">
                                <option value="" disabled selected>Select child's stage</option>
                                <option value="Toddlers">Toddlers (Cuddle Bugs | 1.5 - 2.5 yrs)</option>
                                <option value="Pre-Nursery">Pre-Nursery (Hatchlings | 2.5 - 3.5 yrs)</option>
                                <option value="Nursery">Nursery (Nestlings | 3.5 - 4.5 yrs)</option>
                                <option value="Kindergarten">Kindergarten (Fledglings | 4.5 - 5.5 yrs)</option>
                                <option value="Grade 1">Grade 1 (5.5 - 6.5 yrs)</option>
                                <option value="Grade 2">Grade 2 (6.5 - 7.5 yrs)</option>
                            </select>
                            <p class="error-text text-[11px] text-red-600 mt-1 hidden font-medium" data-error-for="class_applying_for"></p>
                        </div>

                        <!-- Optional Message -->
                        <div>
                            <label for="message" class="block text-[11px] font-bold text-slate-700 mb-1">Additional Note (Optional)</label>
                            <textarea name="message" 
                                      id="message" 
                                      rows="2" 
                                      placeholder="Any special interests, food allergies or query..."
                                      class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-pink/50 focus:border-brand-pink transition"></textarea>
                        </div>

                        <!-- Consent Checkbox -->
                        <div class="flex items-start space-x-2 pt-1">
                            <input type="checkbox" id="consent" checked class="mt-0.5 rounded text-brand-pink focus:ring-brand-pink">
                            <label for="consent" class="text-[11px] text-slate-600 leading-tight">
                                I agree to be contacted about admissions at the Noida campus.
                            </label>
                        </div>
                        <p class="error-text text-[11px] text-red-600 hidden font-medium" data-error-for="consent"></p>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit" 
                                    id="enquiry-submit-btn" 
                                    class="w-full py-3.5 rounded-xl bg-brand-pink hover:bg-brand-pink-hover text-white font-bold text-xs uppercase tracking-wider transition shadow-lg flex items-center justify-center">
                                <span>Book My Visit</span>
                                <svg id="enquiry-spinner" class="animate-spin ml-2 h-4 w-4 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="text-center pt-1">
                            <a href="#enquiry" class="text-[11px] font-bold text-cyan-600 hover:underline">
                                Start Online Registration
                            </a>
                        </div>
                    </form>

                </div>

                <!-- Bottom Links from Screenshot 3 -->
                <div class="flex flex-wrap items-center justify-between text-[11px] font-bold tracking-wider pt-6 text-pink-100">
                    <a href="#faq" class="hover:text-white">AGE CRITERIA</a>
                    <span>|</span>
                    <a href="#faq" class="hover:text-white">FEE STRUCTURE</a>
                    <span>|</span>
                    <a href="#faq" class="hover:text-white">ADMISSION FAQS</a>
                    <span>|</span>
                    <a href="#enquiry" class="hover:text-white">DOWNLOAD BROCHURE</a>
                </div>

            </div>

        </div>

    </div>

    <!-- Bottom Cloud Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 h-10 w-full overflow-hidden leading-none z-10 pointer-events-none">
        <svg class="relative block w-full h-10 text-[#fcfaf7] fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 13: COME AND SEE THE CAMPUS (Matching Screenshot 1)    -->
<!-- ============================================================== -->
<section class="bg-[#fcfaf7] py-16 lg:py-20 relative">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative pt-4">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-brand-navy tracking-tight select-none">
                COME AND SEE THE CAMPUS
            </h2>
            <p class="text-xs text-slate-500 mt-2 sm:mt-0 font-sans">
                Sector 78, Noida. Visits run during school hours on working days.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Campus Entrance Photo & Contact Details -->
            <div class="lg:col-span-6 bg-white p-6 rounded-3xl shadow-sm border border-slate-200/80">
                <div class="rounded-2xl overflow-hidden mb-6 bg-slate-100 shadow-inner">
                    <img src="{{ asset('images/campus_entrance.jpg') }}" 
                         alt="The Manthan School Entrance" 
                         class="w-full h-64 sm:h-72 object-cover">
                </div>

                <div class="grid grid-cols-2 gap-4 text-xs font-sans">
                    <div>
                        <h4 class="font-bold text-brand-pink uppercase tracking-wider text-[11px]">Address</h4>
                        <p class="text-slate-700 mt-1">Sector 78, Noida, Uttar Pradesh 201301</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-pink uppercase tracking-wider text-[11px]">Phone</h4>
                        <p class="text-slate-700 mt-1">Front office: 0120-4984255</p>
                        <p class="text-slate-700">Admissions: +91 96433 04760</p>
                    </div>
                    <div class="pt-2">
                        <h4 class="font-bold text-brand-pink uppercase tracking-wider text-[11px]">Email</h4>
                        <p class="text-slate-700 mt-1">info@manthan.edu.in</p>
                        <p class="text-slate-700">admission@manthan.edu.in</p>
                    </div>
                    <div class="pt-2">
                        <h4 class="font-bold text-brand-pink uppercase tracking-wider text-[11px]">Office Hours</h4>
                        <p class="text-slate-700 mt-1">8:00 AM – 4:00 PM</p>
                        <p class="text-slate-700">WhatsApp: +91 96433 04760</p>
                    </div>
                </div>
            </div>

            <!-- Campus Map Graphic from Screenshot 1 -->
            <div class="lg:col-span-6 bg-white p-6 rounded-3xl shadow-sm border border-slate-200/80">
                <div class="rounded-2xl overflow-hidden relative shadow-inner group">
                    <img src="{{ asset('images/campus_map.jpg') }}" 
                         alt="Campus Map Sector 78 Noida" 
                         class="w-full h-auto object-cover group-hover:scale-105 transition duration-500">
                    
                    <a href="https://maps.google.com/?q=The+Manthan+School+Sector+78+Noida" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="absolute bottom-4 right-4 px-4 py-2 rounded-full bg-white/95 hover:bg-brand-pink hover:text-white text-brand-navy text-xs font-bold shadow-lg transition duration-200 flex items-center space-x-1.5 backdrop-blur-sm">
                        <svg class="w-4 h-4 fill-current text-brand-pink group-hover:text-white" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span>Open in Google Maps →</span>
                    </a>
                </div>

                <div class="pt-4 flex items-center justify-between text-xs text-slate-500">
                    <span>Near Mahagun Modern & Mywoods Mart</span>
                    <a href="tel:+919643304760" class="font-bold text-brand-pink hover:underline">Call for Directions</a>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- INTERACTIVE VIDEO MODAL                                        -->
<!-- ============================================================== -->
<div id="video-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
    <div class="relative w-full max-w-4xl bg-brand-navy rounded-3xl overflow-hidden shadow-2xl border border-white/20">
        <div class="flex items-center justify-between p-4 bg-brand-navy-dark text-white border-b border-white/10">
            <h4 id="video-modal-title" class="text-sm font-bold truncate">The Manthan School Video</h4>
            <button type="button" 
                    onclick="closeVideoModal()" 
                    class="p-1 rounded-full text-slate-400 hover:text-white hover:bg-white/10 transition"
                    aria-label="Close modal">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div class="aspect-video w-full bg-black">
            <iframe id="video-modal-iframe" class="w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// -------------------------------------------------------------
// Interactive Carousel Scroll Engine with Loop & Dynamic Dots
// -------------------------------------------------------------
function scrollCarousel(containerId, direction) {
    const container = document.getElementById(containerId);
    if (!container) return;
    const card = container.firstElementChild;
    const step = card ? (card.offsetWidth + 24) : 340;

    if (direction > 0) {
        // Next: if near right edge, wrap to beginning
        if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 15) {
            container.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: step, behavior: 'smooth' });
        }
    } else {
        // Prev: if at beginning, wrap to end
        if (container.scrollLeft <= 15) {
            container.scrollTo({ left: container.scrollWidth, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: -step, behavior: 'smooth' });
        }
    }
}

function scrollToSlide(containerId, index) {
    const container = document.getElementById(containerId);
    if (!container) return;
    const cards = container.children;
    if (cards[index]) {
        container.scrollTo({
            left: cards[index].offsetLeft - container.offsetLeft,
            behavior: 'smooth'
        });
    }
}

// Attach dynamic scroll tracking for dots & mouse drag scrolling
function setupCarouselTracker(containerId, dotPrefix, totalDots) {
    const container = document.getElementById(containerId);
    if (!container) return;

    // Scroll listener to update dots
    container.addEventListener('scroll', function () {
        const card = container.firstElementChild;
        const step = card ? (card.offsetWidth + 24) : 340;
        const activeIdx = Math.min(totalDots - 1, Math.max(0, Math.round(container.scrollLeft / step)));

        for (let i = 0; i < totalDots; i++) {
            const dot = document.getElementById(`${dotPrefix}-${i}`);
            if (dot) {
                if (i === activeIdx) {
                    dot.className = 'w-8 h-2.5 rounded-full bg-cyan-400 transition-all duration-300';
                } else {
                    dot.className = 'w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300';
                }
            }
        }
    });

    // Mouse drag-to-scroll support
    let isDown = false;
    let startX;
    let scrollLeft;

    container.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    });
    container.addEventListener('mouseleave', () => { isDown = false; });
    container.addEventListener('mouseup', () => { isDown = false; });
    container.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 1.5;
        container.scrollLeft = scrollLeft - walk;
    });
}

// -------------------------------------------------------------
// Video Modal Engine
// -------------------------------------------------------------
function openVideoModal(url, title) {
    const modal = document.getElementById('video-modal');
    const iframe = document.getElementById('video-modal-iframe');
    const titleEl = document.getElementById('video-modal-title');
    if (!modal || !iframe) return;

    titleEl.textContent = title || 'School Video';
    iframe.src = url;
    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.remove('opacity-0');
        modal.classList.add('opacity-100');
    }, 10);
}

function closeVideoModal() {
    const modal = document.getElementById('video-modal');
    const iframe = document.getElementById('video-modal-iframe');
    if (!modal || !iframe) return;

    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0');
    setTimeout(() => {
        iframe.src = '';
        modal.classList.add('hidden');
    }, 300);
}

// Close on backdrop click & ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeVideoModal();
});
document.addEventListener('click', function(e) {
    const modal = document.getElementById('video-modal');
    if (e.target === modal) closeVideoModal();
});

// -------------------------------------------------------------
// FAQ Accordion & Form Init
// -------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    // Setup carousel dynamic dot trackers
    setupCarouselTracker('stages-carousel', 'dot-stages', 6);
    setupCarouselTracker('day-carousel', 'dot-day', 7);
    setupCarouselTracker('signature-carousel', 'dot-sig', 6);

    // FAQ Accordion
    const faqButtons = document.querySelectorAll('.faq-toggle');
    faqButtons.forEach(button => {
        button.addEventListener('click', function () {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            const isHidden = content.classList.contains('hidden');
            
            // Close all
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => i.textContent = '+');

            // Open clicked
            if (isHidden) {
                content.classList.remove('hidden');
                icon.textContent = '−';
            }
        });
    });

    // -------------------------------------------------------------
    // Admission Enquiry AJAX Form Submission & Inline Validations
    // -------------------------------------------------------------
    const enquiryForm = document.getElementById('admission-enquiry-form');
    const alertBox = document.getElementById('enquiry-alert');
    const submitBtn = document.getElementById('enquiry-submit-btn');
    const spinner = document.getElementById('enquiry-spinner');

    // Helper: Show custom inline error for a field
    function showFieldError(field, message) {
        const inputEl = document.getElementById(field);
        const errEl = document.querySelector(`.error-text[data-error-for="${field}"]`);
        
        if (inputEl) {
            inputEl.classList.remove('border-slate-300', 'focus:ring-brand-pink/50', 'focus:border-brand-pink');
            inputEl.classList.add('border-red-500', 'bg-red-50/30', 'focus:ring-red-400', 'focus:border-red-500');
        }
        if (errEl) {
            errEl.textContent = message;
            errEl.classList.remove('hidden');
        }
    }

    // Helper: Clear inline error for a field
    function clearFieldError(field) {
        const inputEl = document.getElementById(field);
        const errEl = document.querySelector(`.error-text[data-error-for="${field}"]`);
        
        if (inputEl) {
            inputEl.classList.remove('border-red-500', 'bg-red-50/30', 'focus:ring-red-400', 'focus:border-red-500');
            inputEl.classList.add('border-slate-300', 'focus:ring-brand-pink/50', 'focus:border-brand-pink');
        }
        if (errEl) {
            errEl.textContent = '';
            errEl.classList.add('hidden');
        }
    }

    // Attach real-time clear listeners to all inputs
    if (enquiryForm) {
        const fieldsToTrack = ['parent_name', 'mobile', 'email', 'student_name', 'class_applying_for', 'consent'];
        fieldsToTrack.forEach(field => {
            const el = document.getElementById(field);
            if (el) {
                el.addEventListener('input', () => clearFieldError(field));
                el.addEventListener('change', () => clearFieldError(field));
            }
        });

        enquiryForm.addEventListener('submit', async function (e) {
            e.preventDefault();

            // Clear previous errors & alert
            alertBox.classList.add('hidden');
            alertBox.className = 'hidden mb-4 p-4 rounded-xl text-xs font-semibold';
            alertBox.textContent = '';
            fieldsToTrack.forEach(clearFieldError);

            // ---------------------------------------------------------
            // Client-Side Validation
            // ---------------------------------------------------------
            let isValid = true;
            let firstInvalidEl = null;

            // 1. Parent Name
            const parentNameEl = document.getElementById('parent_name');
            const parentNameVal = parentNameEl.value.trim();
            if (!parentNameVal) {
                showFieldError('parent_name', 'Parent or guardian name is required.');
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = parentNameEl;
            } else if (parentNameVal.length < 2) {
                showFieldError('parent_name', 'Name must contain at least 2 characters.');
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = parentNameEl;
            }

            // 2. Mobile Number (Strict Indian 10-digit regex /^[6-9]\d{9}$/)
            const mobileEl = document.getElementById('mobile');
            const mobileVal = mobileEl.value.trim();
            const indianMobilePattern = /^[6-9]\d{9}$/;
            if (!mobileVal) {
                showFieldError('mobile', 'Mobile number is required.');
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = mobileEl;
            } else if (!indianMobilePattern.test(mobileVal)) {
                showFieldError('mobile', 'Enter a valid 10-digit Indian mobile number (starts with 6, 7, 8, or 9).');
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = mobileEl;
            }

            // 3. Child's / Student Name
            const studentNameEl = document.getElementById('student_name');
            const studentNameVal = studentNameEl.value.trim();
            if (!studentNameVal) {
                showFieldError('student_name', "Child's name is required.");
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = studentNameEl;
            } else if (studentNameVal.length < 2) {
                showFieldError('student_name', "Child's name must contain at least 2 characters.");
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = studentNameEl;
            }

            // 4. Programme / Class Applying For
            const classEl = document.getElementById('class_applying_for');
            if (!classEl.value) {
                showFieldError('class_applying_for', 'Please select a programme / stage of interest.');
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = classEl;
            }

            // 5. Email (Optional, but if present must be valid)
            const emailEl = document.getElementById('email');
            const emailVal = emailEl.value.trim();
            if (emailVal) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailVal)) {
                    showFieldError('email', 'Please enter a valid email address (e.g. parent@example.com).');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = emailEl;
                }
            }

            // 6. Consent Checkbox
            const consentEl = document.getElementById('consent');
            if (consentEl && !consentEl.checked) {
                showFieldError('consent', 'Please check this box to agree to be contacted.');
                isValid = false;
                if (!firstInvalidEl) firstInvalidEl = consentEl;
            }

            // If client-side validation failed, highlight and halt
            if (!isValid) {
                alertBox.textContent = 'Please fill in all highlighted fields correctly.';
                alertBox.className = 'mb-4 p-3.5 rounded-xl text-xs font-semibold bg-rose-50 text-rose-800 border border-rose-300 block shadow-sm';
                if (firstInvalidEl) {
                    firstInvalidEl.focus();
                    firstInvalidEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                return;
            }

            // ---------------------------------------------------------
            // AJAX Submit to Laravel Backend
            // ---------------------------------------------------------
            submitBtn.disabled = true;
            spinner.classList.remove('hidden');

            const formData = new FormData(enquiryForm);
            const data = Object.fromEntries(formData.entries());

            try {
                const response = await fetch(enquiryForm.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    // Success alert
                    alertBox.textContent = result.message || 'Thank you! Your enquiry has been received. Our team will contact you shortly.';
                    alertBox.className = 'mb-4 p-4 rounded-xl text-xs font-semibold bg-emerald-50 text-emerald-800 border border-emerald-300 block shadow-sm';
                    enquiryForm.reset();
                    // Scroll to alert
                    alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                } else if (result.duplicate) {
                    // 24-hour deduplication alert
                    alertBox.textContent = result.message || 'We have already received your enquiry. Our team is currently reviewing it.';
                    alertBox.className = 'mb-4 p-4 rounded-xl text-xs font-semibold bg-amber-50 text-amber-900 border border-amber-300 block shadow-sm';
                    alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                } else if (response.status === 422) {
                    // Backend Validation Errors
                    if (result.errors) {
                        for (const [field, messages] of Object.entries(result.errors)) {
                            showFieldError(field, messages[0]);
                        }
                    }

                    alertBox.textContent = result.message || 'Please correct the highlighted errors.';
                    alertBox.className = 'mb-4 p-4 rounded-xl text-xs font-semibold bg-rose-50 text-rose-800 border border-rose-300 block shadow-sm';
                } else {
                    // General server error
                    alertBox.textContent = result.message || 'Something went wrong. Please try again or call our admissions desk.';
                    alertBox.className = 'mb-4 p-4 rounded-xl text-xs font-semibold bg-rose-50 text-rose-800 border border-rose-300 block shadow-sm';
                }
            } catch (err) {
                alertBox.textContent = 'Network error. Please check your connection and try again.';
                alertBox.className = 'mb-4 p-4 rounded-xl text-xs font-semibold bg-rose-50 text-rose-800 border border-rose-300 block shadow-sm';
            } finally {
                submitBtn.disabled = false;
                spinner.classList.add('hidden');
            }
        });
    }
});
</script>
@endpush
