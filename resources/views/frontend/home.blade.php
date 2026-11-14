@extends('layouts.frontend')

@section('title', 'The Manthan School | Best Pre-Primary & Primary School in Noida Sector 78')
@section('meta_description', 'The Manthan School Noida - A Mahagun Initiative. Experiential, holistic early childhood learning in a secure and nurturing campus.')

@section('content')

<!-- ============================================================== -->
<!-- SECTION 1: HERO HEADER (Matching Screenshot 14)                -->
<!-- ============================================================== -->
<section class="relative bg-brand-navy min-h-[580px] lg:min-h-[640px] flex items-center overflow-hidden">
    <!-- Hero Background Image (Children on yellow car) -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('mockup_assets/hero_photo.jpg') }}" 
             alt="The Manthan School Children" 
             class="w-full h-full object-cover object-center filter brightness-90">
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="max-w-2xl text-white">
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black font-heading leading-tight tracking-tight drop-shadow-lg">
                A LITTLE <br>
                WORLD OF <span class="text-white">BIG</span> <br>
                BEGINNINGS
            </h1>
            
            <!-- Magenta squiggly accent line from screenshot -->
            <div class="w-36 h-2 bg-brand-pink rounded-full my-6 shadow-sm"></div>

            <div class="flex flex-wrap items-center gap-4 pt-2">
                <!-- Book a campus visit pill button matching screenshot 14 -->
                <a href="#enquiry" 
                   class="px-8 py-3 rounded-full border-2 border-white text-white hover:bg-white hover:text-brand-navy font-bold text-xs uppercase tracking-wider backdrop-blur-sm transition">
                    BOOK A CAMPUS VISIT
                </a>

                <!-- Watch the school film link with play icon -->
                <a href="#vision" class="inline-flex items-center text-xs font-bold text-white hover:text-pink-300 transition group ml-2">
                    <span class="w-9 h-9 rounded-full bg-white/20 border border-white/40 flex items-center justify-center mr-2.5 group-hover:scale-110 transition">
                        <svg class="w-3.5 h-3.5 text-white fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </span>
                    <span>Watch the school film</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Pink Cloud Wave Bottom Divider -->
    <div class="absolute bottom-0 left-0 right-0 h-10 w-full overflow-hidden leading-none pointer-events-none">
        <svg class="relative block w-full h-10 text-brand-pink fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 2: LEARNING BEGINS WITH WONDER (Matching Screenshot 11)-->
<!-- ============================================================== -->
<section class="bg-brand-pink text-white py-16 lg:py-20 relative overflow-hidden">
    <!-- Top & Bottom Doodles -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left: Photo of kids playing drums with framed border -->
            <div class="lg:col-span-6 relative">
                <div class="p-3 bg-white/10 rounded-3xl border-2 border-white/40 shadow-2xl relative">
                    <img src="{{ asset('mockup_assets/drums_photo.jpg') }}" 
                         alt="Learning Begins With Wonder" 
                         class="w-full h-72 sm:h-84 object-cover rounded-2xl shadow-inner">
                    <!-- Cyan Play Button Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-14 h-14 rounded-full bg-cyan-400 hover:bg-cyan-300 text-white flex items-center justify-center shadow-lg transition transform hover:scale-110 cursor-pointer">
                            <svg class="w-6 h-6 fill-current ml-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Text Content & Mascot Girl -->
            <div class="lg:col-span-6 space-y-5">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight leading-tight">
                    LEARNING BEGINS <br>
                    WITH WONDER.
                </h2>

                <p class="text-pink-100 text-sm sm:text-base leading-relaxed font-normal max-w-xl">
                    At Manthan, children learn by asking questions, trying things out and making sense of the world around them. Our play-based, experiential approach builds language, confidence, curiosity and strong foundations—one experience at a time.
                </p>

                <div class="pt-2">
                    <a href="#programmes" 
                       class="inline-flex items-center px-6 py-3 rounded-full border-2 border-white text-white hover:bg-white hover:text-brand-pink font-bold text-xs uppercase tracking-wider transition">
                        <span>EXPLORE HOW CHILDREN LEARN</span>
                        <span class="ml-2">→</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Section 2 bottom banner: "A CHILDHOOD FILLED WITH WONDER," -->
        <div class="mt-16 text-center">
            <h3 class="text-3xl sm:text-5xl font-black font-heading tracking-wider uppercase text-white/90">
                A CHILDHOOD FILLED WITH WONDER,
            </h3>
        </div>
    </div>

    <!-- Cloud Transition to White Section -->
    <div class="relative h-10 w-full overflow-hidden leading-none mt-10">
        <svg class="relative block w-full h-10 text-white fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 3: WHY THE MANTHAN SCHOOL (Matching Screenshot 10)     -->
<!-- ============================================================== -->
<section class="bg-white py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-6">
            <span class="font-heading font-black text-xl sm:text-2xl text-brand-navy tracking-tight uppercase inline-block border-b-4 border-brand-pink pb-1">
                WHY THE MANTHAN SCHOOL
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <!-- Left Narrative -->
            <div class="lg:col-span-6 space-y-6">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-brand-pink tracking-tight leading-tight">
                    EXPERIENTIAL <br>
                    LEARNING FOR <br>
                    HOLISTIC GROWTH
                </h2>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-lg">
                    Experiential, competency based learning that builds curiosity, confidence and strong values, in a safe campus with experienced educators.
                </p>

                <div class="pt-2">
                    <a href="#vision" 
                       class="inline-flex items-center px-6 py-2.5 rounded-full border border-slate-300 text-slate-700 hover:border-brand-pink hover:text-brand-pink font-bold text-xs uppercase tracking-wider transition">
                        READ THE MANTHAN MANTRA
                    </a>
                </div>
            </div>

            <!-- Right: Mascot Kids Drawing Illustration from Screenshot 10 -->
            <div class="lg:col-span-6 flex justify-center">
                <img src="{{ asset('mockup_assets/drawing_kids.png') }}" 
                     alt="Experiential Learning at Manthan" 
                     class="max-w-full h-auto max-h-[420px] object-contain">
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 4: THE RIGHT BEGINNING FOR EVERY STAGE (Screenshot 9)  -->
<!-- ============================================================== -->
<section id="programmes" class="bg-brand-pink py-16 text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-pink-200 text-sm font-black font-heading tracking-widest uppercase block mb-1">
                DISCOVERY AND POSSIBILITY.
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight">
                THE RIGHT BEGINNING FOR EVERY STAGE
            </h2>
        </div>

        <!-- 4 Stage Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Toddlers -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between transition hover:-translate-y-1">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('mockup_assets/stage_toddlers.jpg') }}" alt="Toddlers" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Toddlers</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded-full border border-slate-200">1.5 - 2.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Cuddle Bugs</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        First days away from home. Settling in, sensory play and one familiar adult.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition">Explore →</a>
                </div>
            </div>

            <!-- Pre-Nursery -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between transition hover:-translate-y-1">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('mockup_assets/stage_prenursery.jpg') }}" alt="Pre-Nursery" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Pre-Nursery</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded-full border border-slate-200">2.5 - 3.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Hatchlings</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Language begins. Songs, stories, sharing and the first shape of a routine.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition">Explore →</a>
                </div>
            </div>

            <!-- Nursery -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between transition hover:-translate-y-1">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('mockup_assets/stage_nursery.jpg') }}" alt="Nursery" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Nursery</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded-full border border-slate-200">3.5 - 4.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Nestlings</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Letters, numbers and friendships, all of it still through play and making.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition">Explore →</a>
                </div>
            </div>

            <!-- Kindergarten -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg flex flex-col justify-between transition hover:-translate-y-1">
                <div>
                    <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                        <img src="{{ asset('mockup_assets/stage_kindergarten.jpg') }}" alt="Kindergarten" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="font-heading font-black text-xl text-brand-navy">Kindergarten</h3>
                        <span class="text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded-full border border-slate-200">4.5 - 5.5 yrs</span>
                    </div>
                    <p class="text-xs font-bold text-brand-pink mt-0.5 mb-2">Fledglings</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Reading, early writing and the confidence to work in a group.
                    </p>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200/60">
                    <a href="#enquiry" class="text-xs font-bold text-brand-pink hover:text-pink-800 transition">Explore →</a>
                </div>
            </div>

        </div>

        <!-- Slider Navigation Controls from Screenshot -->
        <div class="mt-8 flex items-center justify-between">
            <div class="flex items-center space-x-1.5">
                <span class="w-8 h-2 rounded-full bg-cyan-400"></span>
                <span class="w-2 h-2 rounded-full bg-white/40"></span>
                <span class="w-2 h-2 rounded-full bg-white/40"></span>
                <span class="w-2 h-2 rounded-full bg-white/40"></span>
            </div>
            <div class="flex items-center space-x-3 text-white text-lg font-bold">
                <button class="hover:text-cyan-300">←</button>
                <button class="hover:text-cyan-300">→</button>
            </div>
        </div>

    </div>

    <!-- Cloud Transition to Deep Blue -->
    <div class="relative h-10 w-full overflow-hidden leading-none mt-12">
        <svg class="relative block w-full h-10 text-brand-navy fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 5: A DAY AT MANTHAN (Matching Screenshot 8)            -->
<!-- ============================================================== -->
<section class="bg-brand-navy text-white py-16 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-3xl sm:text-4xl font-black font-heading tracking-tight">
                A DAY AT MANTHAN
            </h2>
            <a href="#enquiry" class="px-5 py-2 rounded-full bg-white text-brand-navy font-bold text-xs uppercase tracking-wider hover:bg-slate-100 transition">
                SEE THE FULL DAY PLAN →
            </a>
        </div>

        <!-- 3 Time Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- 08:30 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg text-slate-800">
                <div class="h-60 bg-slate-200 overflow-hidden">
                    <img src="{{ asset('mockup_assets/day_1.jpg') }}" alt="Arrival" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-cyan-600 block">08:30</span>
                    <h3 class="font-heading font-black text-xl text-brand-navy mt-1">Arrival and circle time</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        A hand to hold at the gate, then the whole group sits together.
                    </p>
                </div>
            </div>

            <!-- 09:00 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg text-slate-800">
                <div class="h-60 bg-slate-200 overflow-hidden">
                    <img src="{{ asset('mockup_assets/day_2.jpg') }}" alt="Free Play" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-cyan-600 block">09:00</span>
                    <h3 class="font-heading font-black text-xl text-brand-navy mt-1">Free play</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Children choose their corner. Teachers watch and note.
                    </p>
                </div>
            </div>

            <!-- 09:45 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg text-slate-800">
                <div class="h-60 bg-slate-200 overflow-hidden">
                    <img src="{{ asset('mockup_assets/day_3.jpg') }}" alt="Guided Learning" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-cyan-600 block">09:45</span>
                    <h3 class="font-heading font-black text-xl text-brand-navy mt-1">Guided learning</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Small groups. Sounds, numbers, patterns, hands-on exploration.
                    </p>
                </div>
            </div>
        </div>

        <!-- Slider controls -->
        <div class="mt-8 flex items-center justify-between">
            <div class="flex items-center space-x-1.5">
                <span class="w-8 h-2 rounded-full bg-cyan-400"></span>
                <span class="w-2 h-2 rounded-full bg-white/40"></span>
                <span class="w-2 h-2 rounded-full bg-white/40"></span>
            </div>
            <div class="flex items-center space-x-3 text-white text-lg font-bold">
                <button class="hover:text-cyan-300">←</button>
                <button class="hover:text-cyan-300">→</button>
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 6: THE ROOMS YOUR CHILD WILL BE IN (Screenshot 13)     -->
<!-- ============================================================== -->
<section id="campus" class="bg-[#fef8f0] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-brand-navy tracking-tight">
                THE ROOMS YOUR CHILD WILL BE IN
            </h2>
            <a href="#enquiry" class="px-5 py-2 rounded-full border border-slate-300 bg-white text-slate-700 font-bold text-xs uppercase tracking-wider hover:border-brand-pink hover:text-brand-pink transition">
                SEE ALL FACILITIES →
            </a>
        </div>

        <!-- Photo Mosaic matching Screenshot 13 -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
            
            <!-- Classrooms (large left) -->
            <div class="md:col-span-6 rounded-3xl overflow-hidden relative group h-72 shadow-sm">
                <img src="{{ asset('mockup_assets/room_classroom.jpg') }}" alt="Classrooms" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute bottom-4 left-4 text-white font-bold text-base drop-shadow">Classrooms</div>
            </div>

            <!-- Activity & Art Room + Library Corner (mid col) -->
            <div class="md:col-span-3 space-y-4">
                <div class="rounded-3xl overflow-hidden relative group h-[136px] shadow-sm">
                    <img src="{{ asset('mockup_assets/room_activity.jpg') }}" alt="Activity and art room" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute bottom-3 left-3 text-white font-bold text-xs drop-shadow">Activity and art room</div>
                </div>
                <div class="rounded-3xl overflow-hidden relative group h-[136px] shadow-sm">
                    <img src="{{ asset('mockup_assets/room_library.jpg') }}" alt="Library corner" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute bottom-3 left-3 text-white font-bold text-xs drop-shadow">Library corner</div>
                </div>
            </div>

            <!-- Indoor Play Area (right col) -->
            <div class="md:col-span-3 rounded-3xl overflow-hidden relative group h-72 shadow-sm">
                <img src="{{ asset('mockup_assets/room_indoor.jpg') }}" alt="Indoor play area" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute bottom-4 left-4 text-white font-bold text-base drop-shadow">Indoor play area</div>
            </div>

            <!-- Outdoor Play Area (bottom left) -->
            <div class="md:col-span-6 rounded-3xl overflow-hidden relative group h-64 shadow-sm">
                <img src="{{ asset('mockup_assets/room_outdoor.jpg') }}" alt="Outdoor play area" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute bottom-4 left-4 text-white font-bold text-base drop-shadow">Outdoor play area</div>
            </div>

            <!-- Care Room and Washrooms (bottom right) -->
            <div class="md:col-span-6 rounded-3xl overflow-hidden relative group h-64 shadow-sm">
                <img src="{{ asset('mockup_assets/room_care.jpg') }}" alt="Care room and washrooms" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute bottom-4 left-4 text-white drop-shadow max-w-sm">
                    <div class="font-bold text-base">Care room and washrooms</div>
                    <div class="text-[11px] text-white/90 font-medium leading-snug">We show these on purpose. Child-height basins, a care room with a bed, and a cleaning log on the wall.</div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 7: SIGNATURE PROGRAMMES (Matching Screenshot 4)        -->
<!-- ============================================================== -->
<section class="bg-brand-navy text-white py-16 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-3xl sm:text-4xl font-black font-heading tracking-tight">
                SIGNATURE PROGRAMMES
            </h2>
            <a href="#enquiry" class="px-5 py-2 rounded-full bg-white text-brand-navy font-bold text-xs uppercase tracking-wider hover:bg-slate-100 transition">
                EXPLORE BEYOND ACADEMICS →
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Prog 1 -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg">
                <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                    <img src="{{ asset('mockup_assets/prog_1.jpg') }}" alt="Around the World" class="w-full h-full object-cover">
                </div>
                <h3 class="font-heading font-black text-base text-brand-navy uppercase">AROUND THE WORLD IN 365 DAYS</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    A country a month, through food, music and dress.
                </p>
            </div>

            <!-- Prog 2 -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg">
                <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                    <img src="{{ asset('mockup_assets/prog_2.jpg') }}" alt="The Shin Programme" class="w-full h-full object-cover">
                </div>
                <h3 class="font-heading font-black text-base text-brand-navy uppercase">THE SHIN PROGRAMME</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Concentration and mental agility, in short daily sessions.
                </p>
            </div>

            <!-- Prog 3 -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg">
                <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                    <img src="{{ asset('mockup_assets/prog_3.jpg') }}" alt="Cambridge English" class="w-full h-full object-cover">
                </div>
                <h3 class="font-heading font-black text-base text-brand-navy uppercase">CAMBRIDGE ENGLISH</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    A recognised framework for spoken and written English.
                </p>
            </div>

            <!-- Prog 4 -->
            <div class="bg-[#fef8f0] text-slate-800 p-5 rounded-3xl shadow-lg">
                <div class="h-44 rounded-2xl overflow-hidden mb-4 bg-slate-200">
                    <img src="{{ asset('mockup_assets/prog_4.jpg') }}" alt="Robotics" class="w-full h-full object-cover">
                </div>
                <h3 class="font-heading font-black text-base text-brand-navy uppercase">ROBOTICS</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Cause and effect, built with big pieces and small hands.
                </p>
            </div>
        </div>

        <!-- Slider controls -->
        <div class="mt-8 flex items-center justify-between">
            <div class="flex items-center space-x-1.5">
                <span class="w-8 h-2 rounded-full bg-cyan-400"></span>
                <span class="w-2 h-2 rounded-full bg-white/40"></span>
                <span class="w-2 h-2 rounded-full bg-white/40"></span>
            </div>
            <div class="flex items-center space-x-3 text-white text-lg font-bold">
                <button class="hover:text-cyan-300">←</button>
                <button class="hover:text-cyan-300">→</button>
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 8: HOW WE KEEP YOUR CHILD SAFE (Matching Screenshot 2) -->
<!-- ============================================================== -->
<section class="bg-white py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-xl mx-auto mb-14">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-brand-navy tracking-tight">
                HOW WE KEEP <br>
                YOUR CHILD SAFE
            </h2>
        </div>

        <!-- 8 Grid Cards (4x2) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    CCTV in every classroom, corridor and play area
                </p>
            </div>

            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    A named caregiver for every group
                </p>
            </div>

            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Toys, surfaces and washrooms cleaned and sanitised daily
                </p>
            </div>

            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Child-height furniture and soft edge fittings
                </p>
            </div>

            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Background verified staff trained in early years care
                </p>
            </div>

            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Controlled entry and authorised pickup only
                </p>
            </div>

            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    Nurse on call and first-aid trained staff
                </p>
            </div>

            <div class="space-y-3">
                <div class="w-10 h-10 text-cyan-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <p class="text-xs text-slate-700 font-semibold leading-relaxed">
                    GPS tracked transport with an attendant on every bus
                </p>
            </div>

        </div>

        <div class="mt-12 text-center flex flex-wrap justify-center items-center gap-6 text-xs font-bold">
            <a href="#faq" class="text-brand-pink hover:underline">Read the safety and care policy →</a>
            <a href="#faq" class="text-slate-500 hover:text-slate-800">Transport and timings →</a>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 9: THE EVENT DIARY (Matching Screenshot 12)            -->
<!-- ============================================================== -->
<section id="events" class="bg-brand-pink text-white py-16 lg:py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Row from Screenshot 12 -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
            <div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white">
                    THE EVENT DIARY
                </h2>
                <p class="text-pink-100 text-xs sm:text-sm mt-1">
                    Events and celebrations that create joyful moments throughout the year.
                </p>
            </div>

            <!-- "ALL EVENTS & COMPETITIONS →" button -->
            <div class="mt-4 md:mt-0">
                <a href="{{ route('news-events.index') }}" 
                   class="inline-flex items-center px-6 py-2 rounded-full bg-white text-brand-navy hover:text-brand-pink font-bold text-xs uppercase tracking-wider shadow transition">
                    <span>ALL EVENTS & COMPETITIONS →</span>
                </a>
            </div>
        </div>

        <!-- The 8 Event Diary Cards (Exact matching Screenshot 12) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @php
                $allEvents = \App\Models\NewsEvent::published()->take(8)->get();
            @endphp

            @foreach($allEvents as $ev)
                <a href="{{ route('news-events.show', $ev->slug) }}" 
                   class="group relative rounded-2xl overflow-hidden shadow-md h-48 sm:h-56 bg-slate-900 block transform hover:scale-[1.02] transition duration-300">
                    <img src="{{ $ev->image_url }}" 
                         alt="{{ $ev->title }}" 
                         class="w-full h-full object-cover object-center opacity-90 group-hover:opacity-100 group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3">
                        <span class="text-white text-xs sm:text-sm font-bold drop-shadow line-clamp-1 block">
                            {{ $ev->title }}
                        </span>
                        <span class="text-[10px] text-pink-300 font-semibold block mt-0.5">
                            {{ $ev->category }} • {{ $ev->event_date->format('M d') }}
                        </span>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 10: VISION BEHIND MANTHAN & CTA BANNER (Screenshot 5)  -->
<!-- ============================================================== -->
<section id="vision" class="bg-[#fef8f0] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-10">
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-brand-navy tracking-tight">
                THE VISION BEHIND <br>
                THE MANTHAN EXPERIENCE
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm mt-1">
                Insights from our Principal on nurturing curious minds and shaping lifelong learners.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-14">
            <!-- Left: Principal Photo with play button -->
            <div class="lg:col-span-6 rounded-3xl overflow-hidden relative shadow-md">
                <img src="{{ asset('mockup_assets/principal.jpg') }}" alt="Principal" class="w-full h-80 object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-14 h-14 rounded-full bg-cyan-400 text-white flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 fill-current ml-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
            </div>

            <!-- Right: Quote -->
            <div class="lg:col-span-6 space-y-4 pl-0 lg:pl-6">
                <blockquote class="border-l-4 border-slate-400 pl-4 text-slate-700 text-base sm:text-lg leading-relaxed italic">
                    "Every child brings a unique potential. Our endeavour is to provide the right environment and guidance to help them thrive."
                </blockquote>
                <p class="text-xs text-slate-500 font-medium pl-4">
                    [Name to supply] • Head of School, Noida Campus
                </p>
                <div class="pt-2 pl-4">
                    <a href="#campus" class="text-xs font-bold text-brand-navy hover:text-brand-pink transition">Meet the full team →</a>
                </div>
            </div>
        </div>

        <!-- Blue CTA Banner from Screenshot 5: "BRING YOUR CHILD. WATCH ONE SESSION. DECIDE AFTER THAT." -->
        <div class="bg-brand-navy rounded-3xl p-6 sm:p-10 text-white flex flex-col lg:flex-row lg:items-center justify-between gap-6 shadow-xl relative overflow-hidden">
            <div class="max-w-xl">
                <h3 class="text-2xl sm:text-3xl font-black font-heading leading-tight">
                    BRING YOUR CHILD. <br>
                    WATCH ONE SESSION. <br>
                    DECIDE AFTER THAT.
                </h3>
                <p class="text-xs text-slate-300 mt-3">
                    Visits run during school hours, Monday to Friday.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3 relative z-10">
                <a href="#enquiry" class="px-6 py-2.5 rounded-full bg-white text-brand-navy hover:bg-slate-100 font-extrabold text-xs uppercase tracking-wider transition">
                    ENQUIRE ABOUT ADMISSION
                </a>
                <a href="#enquiry" class="px-6 py-2.5 rounded-full bg-brand-pink hover:bg-brand-pink-hover text-white font-extrabold text-xs uppercase tracking-wider transition">
                    BOOK A CAMPUS VISIT
                </a>
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 11: WHAT PARENTS SAY (Matching Screenshot 7)           -->
<!-- ============================================================== -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-brand-navy tracking-tight">
                WHAT PARENTS SAY
            </h2>
            <a href="#enquiry" class="px-5 py-2 rounded-full border border-slate-300 text-slate-700 font-bold text-xs uppercase tracking-wider hover:border-brand-pink hover:text-brand-pink transition">
                PARENT TESTIMONIALS →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Testimonial 1 -->
            <div class="bg-[#fef8f0] p-6 rounded-3xl shadow-sm border border-slate-200/80">
                <div class="h-56 rounded-2xl overflow-hidden relative mb-4">
                    <img src="{{ asset('mockup_assets/parent_1.jpg') }}" alt="Parent" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-brand-pink text-white flex items-center justify-center shadow">
                            <svg class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
                <h4 class="font-heading font-black text-base text-brand-navy">[Parent name]</h4>
                <p class="text-xs text-cyan-600 font-bold">Parent, Nursery</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-[#fef8f0] p-6 rounded-3xl shadow-sm border border-slate-200/80">
                <div class="h-56 rounded-2xl overflow-hidden relative mb-4">
                    <img src="{{ asset('mockup_assets/parent_2.jpg') }}" alt="Parent" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-brand-pink text-white flex items-center justify-center shadow">
                            <svg class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
                <h4 class="font-heading font-black text-base text-brand-navy">[Parent name]</h4>
                <p class="text-xs text-cyan-600 font-bold">Parent, Nursery</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-[#fef8f0] p-6 rounded-3xl shadow-sm border border-slate-200/80">
                <div class="h-56 rounded-2xl overflow-hidden relative mb-4">
                    <img src="{{ asset('mockup_assets/parent_3.jpg') }}" alt="Parent" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-brand-pink text-white flex items-center justify-center shadow">
                            <svg class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
                <h4 class="font-heading font-black text-base text-brand-navy">[Parent name]</h4>
                <p class="text-xs text-cyan-600 font-bold">Parent, Nursery</p>
            </div>
        </div>

    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 12: QUESTIONS PARENTS ASK & BOOK A CAMPUS VISIT        -->
<!-- (Exact layout matching Screenshot 3)                           -->
<!-- ============================================================== -->
<section id="enquiry" class="py-20 bg-brand-pink text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- LEFT: QUESTIONS PARENTS ASK (8 Accordion Items) -->
            <div id="faq" class="lg:col-span-6 space-y-6">
                <h2 class="text-3xl sm:text-4xl font-black font-heading tracking-tight text-white">
                    QUESTIONS PARENTS ASK
                </h2>

                <div class="space-y-2 pt-2" id="faq-accordion">
                    
                    <!-- Q1 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>What is the minimum age for Nursery admission?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            For Nursery admission, the child should be 3+ years old as of 31st March of the academic year for which admission is sought.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>What are the school timings for each programme?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            Toddlers & Pre-Nursery operate from 9:00 AM to 12:30 PM. Nursery to Grade 2 operate from 8:30 AM to 1:30 PM, Monday through Friday.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>What is the fee structure?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            Our fee structure is transparent with composite quarterly payments. Please submit the form or visit the school for the complete fee sheet.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>How many children are in a group and how many adults?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            We maintain an intimate 1:8 adult-to-child ratio in early years, with a dedicated homeroom teacher and an experienced caregiver in every classroom.
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>Is transport available and which sectors does it cover?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            Yes, air-conditioned GPS-tracked buses with female attendants and speed governors cover all major sectors across Noida and Greater Noida West.
                        </div>
                    </div>

                    <!-- Q6 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>What does my child need to bring each day?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            A healthy snack box, water bottle, and a spare change of clothes in their school bag. All stationery and sensory tools are provided by the school.
                        </div>
                    </div>

                    <!-- Q7 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>How do you settle a child who cries in the first week?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            Through a gentle settling period, one-on-one caregiver comfort, engaging sensory toys, and welcoming parents to stay during the initial transition days.
                        </div>
                    </div>

                    <!-- Q8 -->
                    <div class="border-b border-pink-400/40 pb-2.5">
                        <button type="button" class="faq-toggle w-full flex items-center justify-between text-left py-2 font-bold text-sm hover:text-pink-200 transition">
                            <span>Is The Manthan School affiliated to CBSE?</span>
                            <span class="faq-icon text-lg">+</span>
                        </button>
                        <div class="faq-content hidden pt-1 text-xs text-pink-100 leading-relaxed">
                            Yes, The Manthan School is affiliated with CBSE, following experiential and competency-based curricula.
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT: BOOK A CAMPUS VISIT (White Form Card from Screenshot 3) -->
            <div class="lg:col-span-6">
                <div class="bg-white rounded-3xl p-6 sm:p-9 shadow-2xl text-slate-800">
                    
                    <div class="mb-5">
                        <h2 class="text-2xl sm:text-3xl font-black font-heading text-brand-pink tracking-tight uppercase">
                            BOOK A CAMPUS VISIT
                        </h2>
                        <h3 class="text-lg font-bold text-brand-navy mt-1">
                            TELL US ABOUT YOUR CHILD
                        </h3>
                        <p class="text-slate-500 text-xs mt-1">
                            Five fields. We map age to programme, so you do not have to guess.
                        </p>
                    </div>

                    <!-- Alert message container (Success / Deduplication / Error) -->
                    <div id="enquiry-alert" class="hidden mb-4 p-3.5 rounded-xl text-xs font-semibold"></div>

                    <!-- Form -->
                    <form id="admission-enquiry-form" novalidate class="space-y-3.5">
                        
                        <!-- Row 1: Parent Name & Mobile -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label for="parent_name" class="block text-xs font-bold text-slate-700 mb-1">Parent Name</label>
                                <input type="text" id="parent_name" name="parent_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink">
                                <p class="field-error text-[11px] text-rose-600 font-semibold mt-1 hidden" id="error-parent_name"></p>
                            </div>

                            <div>
                                <label for="mobile" class="block text-xs font-bold text-slate-700 mb-1">Mobile Number</label>
                                <input type="tel" id="mobile" name="mobile" maxlength="10" placeholder="10-digit Indian number" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink">
                                <p class="field-error text-[11px] text-rose-600 font-semibold mt-1 hidden" id="error-mobile"></p>
                            </div>
                        </div>

                        <!-- Row 2: Email & Student Name -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink">
                                <p class="field-error text-[11px] text-rose-600 font-semibold mt-1 hidden" id="error-email"></p>
                            </div>

                            <div>
                                <label for="student_name" class="block text-xs font-bold text-slate-700 mb-1">Child's Name / Student Name</label>
                                <input type="text" id="student_name" name="student_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink">
                                <p class="field-error text-[11px] text-rose-600 font-semibold mt-1 hidden" id="error-student_name"></p>
                            </div>
                        </div>

                        <!-- Row 3: Programme of Interest -->
                        <div>
                            <label for="class_applying_for" class="block text-xs font-bold text-slate-700 mb-1">Programme of Interest</label>
                            <select id="class_applying_for" name="class_applying_for" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink text-slate-700">
                                <option value="" disabled selected>Select Programme / Class</option>
                                <option value="Toddlers">Toddlers (1.5 - 2.5 yrs)</option>
                                <option value="Pre-Nursery">Pre-Nursery (2.5 - 3.5 yrs)</option>
                                <option value="Nursery">Nursery (3.5 - 4.5 yrs)</option>
                                <option value="Kindergarten">Kindergarten (4.5 - 5.5 yrs)</option>
                                <option value="Grade 1">Grade 1</option>
                                <option value="Grade 2">Grade 2</option>
                            </select>
                            <p class="field-error text-[11px] text-rose-600 font-semibold mt-1 hidden" id="error-class_applying_for"></p>
                        </div>

                        <!-- Message (Optional) -->
                        <div>
                            <label for="message" class="block text-xs font-bold text-slate-700 mb-1">Message (optional)</label>
                            <textarea id="message" name="message" rows="2" placeholder="Any specific requirements or queries?" class="w-full px-3.5 py-2 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink"></textarea>
                            <p class="field-error text-[11px] text-rose-600 font-semibold mt-1 hidden" id="error-message"></p>
                        </div>

                        <!-- Checkbox from Screenshot 3 -->
                        <div class="flex items-start pt-1">
                            <input type="checkbox" id="consent" name="consent" checked class="mt-0.5 w-4 h-4 text-brand-pink border-slate-300 rounded focus:ring-brand-pink">
                            <label for="consent" class="ml-2 text-[11px] text-slate-600 leading-tight">
                                I agree to be contacted about admissions at the Noida campus.
                            </label>
                        </div>

                        <!-- Solid Magenta Button: "Book My Visit" -->
                        <div class="pt-2">
                            <button type="submit" 
                                    id="submit-enquiry-btn" 
                                    class="w-full py-3 rounded-xl bg-brand-pink hover:bg-brand-pink-hover text-white font-extrabold text-xs uppercase tracking-wider shadow-lg transition flex items-center justify-center">
                                <span id="btn-text">Book My Visit</span>
                                <svg id="btn-spinner" class="animate-spin ml-2 h-4 w-4 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- "Start Online Registration" link from Screenshot 3 -->
                        <div class="text-center pt-1">
                            <a href="#enquiry" class="text-xs font-bold text-cyan-600 hover:underline">Start Online Registration</a>
                        </div>

                        <!-- Footer Links from Screenshot 3 -->
                        <div class="pt-3 border-t border-slate-100 text-center">
                            <div class="flex flex-wrap justify-center items-center gap-2 text-[10px] font-bold text-slate-500 uppercase tracking-wider">
                                <a href="#faq" class="hover:text-brand-pink">AGE CRITERIA</a>
                                <span>|</span>
                                <a href="#faq" class="hover:text-brand-pink">FEE STRUCTURE</a>
                                <span>|</span>
                                <a href="#faq" class="hover:text-brand-pink">ADMISSION FAQS</a>
                                <span>|</span>
                                <a href="#faq" class="hover:text-brand-pink">DOWNLOAD BROCHURE</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- ============================================================== -->
<!-- SECTION 13: COME AND SEE THE CAMPUS (Matching Screenshot 1)    -->
<!-- ============================================================== -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8">
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-brand-navy tracking-tight">
                COME AND SEE THE CAMPUS
            </h2>
            <p class="text-xs text-slate-500 mt-2 sm:mt-0">
                Sector 78, Noida. Visits run during school hours on working days.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Entrance Photo from Screenshot 1 -->
            <div class="lg:col-span-6 space-y-6">
                <div class="rounded-3xl overflow-hidden shadow-md">
                    <img src="{{ asset('mockup_assets/campus_entrance.jpg') }}" alt="The Manthan School Entrance" class="w-full h-72 object-cover">
                </div>

                <!-- Contact details table matching Screenshot 1 -->
                <div class="grid grid-cols-2 gap-4 text-xs text-slate-700">
                    <div>
                        <span class="text-brand-pink font-bold block mb-1">Address</span>
                        <p class="leading-relaxed text-slate-600">
                            Sector 78, Noida, Uttar Pradesh 201301
                        </p>
                    </div>
                    <div>
                        <span class="text-brand-pink font-bold block mb-1">Phone</span>
                        <p class="text-slate-600">
                            Front office 0120-4984255<br>
                            Admissions +91 96433 04760
                        </p>
                    </div>
                    <div>
                        <span class="text-brand-pink font-bold block mb-1">Email</span>
                        <p class="text-slate-600">
                            info@manthan.edu.in<br>
                            admission@manthan.edu.in
                        </p>
                    </div>
                    <div>
                        <span class="text-brand-pink font-bold block mb-1">Office hours</span>
                        <p class="text-slate-600">
                            Monday - Saturday: 8 AM - 4 PM<br>
                            WhatsApp: +91 96433 04760
                        </p>
                    </div>
                </div>
            </div>

            <!-- Map from Screenshot 1 -->
            <div class="lg:col-span-6">
                <div class="rounded-3xl overflow-hidden shadow-md border border-slate-200">
                    <img src="{{ asset('mockup_assets/campus_map.jpg') }}" alt="Campus Map Sector 78 Noida" class="w-full h-auto object-cover">
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

            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => i.textContent = '+');

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

            clearErrors();
            hideAlert();

            const formData = {
                parent_name: document.getElementById('parent_name').value.trim(),
                student_name: document.getElementById('student_name').value.trim(),
                class_applying_for: document.getElementById('class_applying_for').value,
                mobile: document.getElementById('mobile').value.trim(),
                email: document.getElementById('email').value.trim(),
                message: document.getElementById('message').value.trim(),
            };

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
                    showAlert('success', data.message || 'Thank you! Your enquiry has been received successfully.');
                    form.reset();
                } else if (data.duplicate) {
                    showAlert('warning', data.message || 'We have already received your enquiry.');
                } else if (response.status === 422) {
                    if (data.errors) {
                        for (const [field, messages] of Object.entries(data.errors)) {
                            showFieldError(field, messages[0]);
                        }
                    }
                    showAlert('error', 'Please correct the highlighted errors below and submit again.');
                } else if (response.status === 429) {
                    showAlert('error', 'Too many enquiry requests. Please wait a moment before trying again.');
                } else {
                    showAlert('error', data.message || 'Something went wrong. Please try again or call our admissions desk.');
                }
            } catch (err) {
                console.error('Enquiry submission error:', err);
                showAlert('error', 'Unable to submit enquiry right now. Please check your connection.');
            } finally {
                setLoading(false);
            }
        });

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
        } else {
            btnText.textContent = 'Book My Visit';
            btnSpinner.classList.add('hidden');
        }
    }

    function showAlert(type, message) {
        if (!alertBox) return;
        alertBox.className = 'mb-4 p-3.5 rounded-xl text-xs font-semibold';
        
        if (type === 'success') {
            alertBox.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200');
            alertBox.innerHTML = `✓ ${message}`;
        } else if (type === 'warning') {
            alertBox.classList.add('bg-amber-50', 'text-amber-800', 'border', 'border-amber-300');
            alertBox.innerHTML = `⚠ ${message}`;
        } else {
            alertBox.classList.add('bg-rose-50', 'text-rose-800', 'border', 'border-rose-200');
            alertBox.innerHTML = `✗ ${message}`;
        }

        alertBox.classList.remove('hidden');
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
            inputEl.classList.add('border-rose-500', 'bg-rose-50/20');
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
            inputEl.classList.remove('border-rose-500', 'bg-rose-50/20');
        }
    }

    function clearErrors() {
        document.querySelectorAll('.field-error').forEach(el => {
            el.classList.add('hidden');
            el.textContent = '';
        });
        document.querySelectorAll('#admission-enquiry-form input, #admission-enquiry-form select, #admission-enquiry-form textarea').forEach(el => {
            el.classList.remove('border-rose-500', 'bg-rose-50/20');
        });
    }
});
</script>
@endpush
