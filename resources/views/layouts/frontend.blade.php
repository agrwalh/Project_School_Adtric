<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'The Manthan School | Best Pre-Primary & Primary School in Noida')</title>
    <meta name="description" content="@yield('meta_description', 'The Manthan School Noida - Experiential, holistic early childhood and primary learning in a safe, nurturing campus. Admitting Toddlers to Grade 2.')">
    <meta property="og:title" content="@yield('title', 'The Manthan School | Noida')">
    <meta property="og:description" content="@yield('meta_description', 'Experiential learning for holistic growth at The Manthan School, Sector 78, Noida.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    @yield('og_image')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #faf9f6;
            color: #1e293b;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Outfit', sans-serif;
        }
        .cloud-divider-pink {
            background-image: radial-gradient(circle at 50% 100%, #e60067 20px, transparent 21px);
        }
        .bg-pattern {
            background-image: radial-gradient(#e2e8f0 1.2px, transparent 1.2px);
            background-size: 24px 24px;
        }
    </style>
    @stack('styles')
</head>
<body class="antialiased min-h-screen flex flex-col bg-slate-50">

    <!-- Top Utility Bar -->
    <div class="bg-brand-navy-dark text-slate-200 text-xs py-2 px-4 sm:px-8 border-b border-white/10 hidden md:block">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Campus Tabs -->
            <div class="flex items-center space-x-1">
                <a href="https://design-mockup.addev.in/manthan/manthan-noida-option-1" class="px-3 py-1 rounded-full text-slate-400 hover:text-white transition">GREATER NOIDA WEST</a>
                <span class="text-slate-600">|</span>
                <span class="px-3 py-1 rounded-full bg-brand-pink text-white font-semibold shadow-sm">NOIDA (SEC 78)</span>
            </div>

            <!-- Contact & Utility Links -->
            <div class="flex items-center space-x-6">
                <a href="tel:01207133925" class="flex items-center hover:text-white transition">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-brand-pink" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/>
                    </svg>
                    FRONT OFFICE: <span class="font-semibold ml-1 text-white">0120-7133925</span>
                </a>
                <span class="text-slate-700">•</span>
                <a href="#enquiry" class="hover:text-brand-pink transition">PAY FEES</a>
                <span class="text-slate-700">•</span>
                <a href="#contact" class="hover:text-brand-pink transition">CAREERS</a>
                <span class="text-slate-700">•</span>
                
                <!-- Social Icons -->
                <div class="flex items-center space-x-3 text-slate-400">
                    <a href="#" class="hover:text-white transition" title="Facebook">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.6 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"/></svg>
                    </a>
                    <a href="#" class="hover:text-white transition" title="Instagram">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="hover:text-white transition" title="YouTube">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                </div>

                @auth
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-xs font-semibold px-2.5 py-1 bg-white/10 hover:bg-white/20 rounded text-emerald-400 transition">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-1.5 animate-pulse"></span> Admin Panel
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-xs text-slate-300 hover:text-white transition flex items-center">
                        <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                        Admin Login
                    </a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-100 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- School Logo -->
                <a href="{{ route('home') }}" class="flex items-center group">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-xl bg-brand-navy flex items-center justify-center text-white font-extrabold text-2xl shadow-md border-2 border-brand-pink/30 group-hover:scale-105 transition">
                            <span class="text-brand-pink">M</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-heading font-black text-xl tracking-tight text-brand-navy leading-none">THE MANTHAN SCHOOL</span>
                            <span class="text-[11px] font-semibold text-brand-pink tracking-widest uppercase mt-0.5">get . set . know . fly</span>
                            <span class="text-[9px] text-slate-500 uppercase tracking-wider">A Mahagun Initiative • Noida</span>
                        </div>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center space-x-7 text-sm font-semibold text-slate-700">
                    <a href="{{ route('home') }}" class="hover:text-brand-pink transition {{ request()->routeIs('home') ? 'text-brand-pink font-bold' : '' }}">About Us</a>
                    <a href="{{ route('home') }}#programmes" class="hover:text-brand-pink transition">Academics</a>
                    <a href="{{ route('news-events.index') }}" class="hover:text-brand-pink transition {{ request()->routeIs('news-events.*') ? 'text-brand-pink font-bold' : '' }}">
                        News & Events
                        <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-bold bg-pink-100 text-brand-pink ml-0.5">Live</span>
                    </a>
                    <a href="{{ route('home') }}#campus" class="hover:text-brand-pink transition">Campus & Facilities</a>
                    <a href="{{ route('home') }}#faq" class="hover:text-brand-pink transition">Admissions FAQ</a>
                    <a href="{{ route('home') }}#contact" class="hover:text-brand-pink transition">Contact</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden sm:flex items-center space-x-3">
                    <a href="{{ route('home') }}#enquiry" class="inline-flex items-center justify-center px-6 py-2.5 rounded-full text-sm font-bold text-white bg-brand-pink hover:bg-brand-pink-hover shadow-lg shadow-pink-500/25 transition transform hover:-translate-y-0.5 active:translate-y-0">
                        <span>Enquire Now</span>
                        <svg class="w-4 h-4 ml-1.5 font-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex lg:hidden items-center space-x-2">
                    <a href="{{ route('home') }}#enquiry" class="text-xs px-3.5 py-1.5 rounded-full bg-brand-pink text-white font-bold">Enquire</a>
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100" aria-label="Toggle Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-100 bg-white px-4 pt-3 pb-6 space-y-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg font-semibold text-slate-700 hover:bg-pink-50 hover:text-brand-pink">About Us</a>
            <a href="{{ route('home') }}#programmes" class="block px-3 py-2 rounded-lg font-semibold text-slate-700 hover:bg-pink-50 hover:text-brand-pink">Academics</a>
            <a href="{{ route('news-events.index') }}" class="block px-3 py-2 rounded-lg font-semibold text-slate-700 hover:bg-pink-50 hover:text-brand-pink">News & Events</a>
            <a href="{{ route('home') }}#campus" class="block px-3 py-2 rounded-lg font-semibold text-slate-700 hover:bg-pink-50 hover:text-brand-pink">Campus & Facilities</a>
            <a href="{{ route('home') }}#faq" class="block px-3 py-2 rounded-lg font-semibold text-slate-700 hover:bg-pink-50 hover:text-brand-pink">Admissions FAQ</a>
            <a href="{{ route('home') }}#contact" class="block px-3 py-2 rounded-lg font-semibold text-slate-700 hover:bg-pink-50 hover:text-brand-pink">Contact</a>
            @auth
                <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-lg font-semibold text-emerald-600 hover:bg-emerald-50">Admin Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="block px-3 py-2 rounded-lg font-semibold text-slate-600 hover:bg-slate-50">Admin Login</a>
            @endauth
        </div>
    </header>

    <!-- Content Slot -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- School Footer -->
    <footer id="contact" class="bg-brand-navy text-white pt-16 pb-8 border-t-8 border-brand-pink relative overflow-hidden">
        
        <!-- Decorative subtle pattern overlay -->
        <div class="absolute inset-0 opacity-5 pointer-events-none">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs><pattern id="footer-pattern" width="40" height="40" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="2" fill="white"/></pattern></defs>
                <rect width="100%" height="100%" fill="url(#footer-pattern)"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-white/10">
                
                <!-- School Brand Column -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-xl bg-white text-brand-navy flex items-center justify-center font-black text-2xl shadow">
                            <span class="text-brand-pink">M</span>
                        </div>
                        <div>
                            <h3 class="font-heading font-black text-2xl text-white tracking-tight">THE MANTHAN SCHOOL</h3>
                            <p class="text-xs font-semibold text-pink-400 uppercase tracking-widest">get . set . know . fly</p>
                            <p class="text-[10px] text-slate-400 uppercase tracking-wider">A Mahagun Initiative</p>
                        </div>
                    </div>

                    <p class="text-slate-300 text-sm leading-relaxed max-w-sm pt-2">
                        Experiential, competency-based early years and primary education fostering curiosity, agility, resilience, and joyful learning in Sector 78, Noida.
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('home') }}#enquiry" class="inline-flex items-center px-5 py-2.5 rounded-full bg-brand-pink hover:bg-brand-pink-hover text-white text-xs font-bold shadow-md transition">
                            Book a Campus Tour
                            <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Academic Programmes -->
                <div>
                    <h4 class="font-heading font-bold text-sm tracking-wider uppercase text-pink-400 mb-4">Programmes</h4>
                    <ul class="space-y-2.5 text-xs text-slate-300">
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white transition">Toddlers, Cuddle Bugs (1.5-2.5 yrs)</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white transition">Pre-Nursery, Hatchlings (2.5-3.5 yrs)</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white transition">Nursery, Nestlings (3.5-4.5 yrs)</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white transition">Kindergarten, Fledglings (4.5-5.5 yrs)</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white transition">Grades 1 & 2 Primary Wings</a></li>
                        <li><a href="{{ route('news-events.index') }}" class="hover:text-white transition">Events & Competitions</a></li>
                    </ul>
                </div>

                <!-- Admissions & Parent Links -->
                <div>
                    <h4 class="font-heading font-bold text-sm tracking-wider uppercase text-pink-400 mb-4">Admissions</h4>
                    <ul class="space-y-2.5 text-xs text-slate-300">
                        <li><a href="{{ route('home') }}#enquiry" class="hover:text-white transition">Admissions 2026-27</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-white transition">Admission Process & Age Criteria</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-white transition">Fee Structure & FAQs</a></li>
                        <li><a href="{{ route('home') }}#enquiry" class="hover:text-white transition">Online Registration Form</a></li>
                        <li><a href="{{ route('news-events.index') }}" class="hover:text-white transition">School News & Happenings</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="font-heading font-bold text-sm tracking-wider uppercase text-pink-400 mb-4">Noida Campus</h4>
                    <address class="not-italic text-xs text-slate-300 space-y-2.5">
                        <p class="leading-relaxed">
                            Sector 78, Noida,<br>
                            Uttar Pradesh 201301
                        </p>
                        <p class="pt-1">
                            <span class="text-slate-400">Front Office:</span><br>
                            <a href="tel:01204984255" class="hover:text-white font-semibold">0120-4984255</a> / <a href="tel:01207133925" class="hover:text-white font-semibold">0120-7133925</a>
                        </p>
                        <p>
                            <span class="text-slate-400">Admissions Desk:</span><br>
                            <a href="tel:+919643304760" class="hover:text-white font-semibold text-pink-300">+91 96433 04760</a>
                        </p>
                        <p>
                            <span class="text-slate-400">Email:</span><br>
                            <a href="mailto:admission@manthan.edu.in" class="hover:text-white">admission@manthan.edu.in</a>
                        </p>
                    </address>
                </div>

            </div>

            <!-- Footer Bottom Line -->
            <div class="pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-400 space-y-4 md:space-y-0">
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                    <a href="#" class="hover:text-white transition">Mandatory Public Disclosure</a>
                    <span>•</span>
                    <a href="#" class="hover:text-white transition">Careers</a>
                    <span>•</span>
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <span>•</span>
                    <a href="#" class="hover:text-white transition">Terms of Use</a>
                    <span>•</span>
                    <a href="{{ route('login') }}" class="hover:text-white transition">Admin Portal</a>
                </div>

                <div>
                    <p>© 2026 The Manthan School. All rights reserved. A Mahagun Initiative.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Drawer Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', () => menu.classList.toggle('hidden'));
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
