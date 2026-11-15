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
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #e11d48;
        }
    </style>
    @stack('styles')
</head>
<body class="antialiased min-h-screen flex flex-col bg-slate-50 overflow-x-hidden">

    <!-- Top Utility Bar from Screenshot 14 -->
    <div class="bg-brand-navy-dark text-slate-200 text-xs py-2 px-4 sm:px-8 border-b border-white/10 hidden md:block">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-1">
                <a href="#" class="px-3 py-0.5 rounded-full text-slate-400 hover:text-white transition text-[11px] font-bold">GREATER NOIDA WEST</a>
                <span class="text-slate-600">|</span>
                <span class="px-3 py-0.5 rounded-full bg-brand-pink text-white font-bold text-[11px]">NOIDA</span>
            </div>

            <div class="flex items-center space-x-5 text-[11px] font-semibold">
                <a href="tel:01207133925" class="hover:text-white transition">FRONT OFFICE- 0120-7133925</a>
                <a href="#enquiry" class="hover:text-pink-300 transition">PAY FEES</a>
                <a href="#contact" class="hover:text-pink-300 transition">CAREERS</a>
                
                <div class="flex items-center space-x-2 text-slate-300">
                    <a href="#" class="hover:text-white" title="Facebook">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.6 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"/></svg>
                    </a>
                    <a href="#" class="hover:text-white" title="Instagram">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="hover:text-white" title="YouTube">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                </div>

                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-[11px] font-bold text-emerald-400 bg-white/10 px-2 py-0.5 rounded">Admin</a>
                @else
                    <a href="{{ route('login') }}" class="text-[11px] font-bold text-slate-300 hover:text-white">Admin Login</a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Main Navigation Header from Screenshot 14 -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- School Logo -->
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-xl bg-brand-navy flex items-center justify-center text-white font-extrabold text-2xl shadow">
                            <span class="text-brand-pink">M</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-heading font-black text-lg tracking-tight text-brand-navy leading-none">THE MANTHAN SCHOOL</span>
                            <span class="text-[10px] font-bold text-brand-pink tracking-widest uppercase mt-0.5">get . set . know . fly</span>
                            <span class="text-[9px] text-slate-400 uppercase tracking-wider">A MAHAGUN INITIATIVE</span>
                        </div>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center space-x-6 text-xs font-bold text-slate-700">
                    <a href="{{ route('home') }}" class="hover:text-brand-pink transition">About Us</a>
                    <a href="{{ route('home') }}#academics" class="hover:text-brand-pink transition">Academics</a>
                    <a href="{{ route('home') }}#beyond-academics" class="hover:text-brand-pink transition">Beyond Academics</a>
                    <a href="{{ route('home') }}#campus" class="hover:text-brand-pink transition">Campus and Facilities</a>
                    <a href="{{ route('news-events.index') }}" class="hover:text-brand-pink transition {{ request()->routeIs('news-events.*') ? 'text-brand-pink' : '' }}">Results and Media</a>
                    <a href="{{ route('home') }}#enquiry" class="hover:text-brand-pink transition">Admissions</a>
                    <a href="{{ route('home') }}#contact" class="hover:text-brand-pink transition">Contact</a>
                </nav>

                <!-- CTA Button: Enquire Now + (matching Screenshot 14) -->
                <div class="hidden sm:flex items-center space-x-3">
                    <a href="{{ route('home') }}#enquiry" 
                       class="inline-flex items-center px-6 py-2.5 rounded-full text-xs font-bold text-white bg-brand-pink hover:bg-brand-pink-hover shadow-md transition">
                        <span>Enquire Now</span>
                        <span class="ml-1.5 font-black text-sm">+</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex lg:hidden items-center space-x-2">
                    <a href="{{ route('home') }}#enquiry" class="text-xs px-3 py-1.5 rounded-full bg-brand-pink text-white font-bold">Enquire</a>
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-600 hover:text-slate-900" aria-label="Toggle Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-100 bg-white px-4 pt-3 pb-6 space-y-2 text-xs font-bold text-slate-700">
            <a href="{{ route('home') }}" class="block py-2">About Us</a>
            <a href="{{ route('home') }}#academics" class="block py-2">Academics</a>
            <a href="{{ route('home') }}#beyond-academics" class="block py-2">Beyond Academics</a>
            <a href="{{ route('home') }}#campus" class="block py-2">Campus and Facilities</a>
            <a href="{{ route('news-events.index') }}" class="block py-2 text-brand-pink">Results and Media (News & Events)</a>
            <a href="{{ route('home') }}#enquiry" class="block py-2">Admissions</a>
            <a href="{{ route('home') }}#contact" class="block py-2">Contact</a>
            @auth
                <a href="{{ route('admin.dashboard') }}" class="block py-2 text-emerald-600">Admin Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="block py-2 text-slate-500">Admin Login</a>
            @endauth
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- ============================================================== -->
    <!-- SECTION 14: FOOTER (Exact Match to Screenshot 6)               -->
    <!-- ============================================================== -->
    <footer id="footer" class="bg-brand-navy text-white pt-16 pb-8 relative overflow-visible">
        
        <!-- Top Cloud Curves Divider with 3D Avatars (Matching Screenshot 6) -->
        <div class="absolute top-0 left-0 right-0 h-10 w-full overflow-hidden leading-none pointer-events-none rotate-180">
            <svg class="relative block w-full h-10 text-white fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
        </div>

        <!-- 3D Boy Writing (Left) & 3D Girl Reading (Right) on Footer Top Wave -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative pointer-events-none">
            <img src="{{ asset('images/footer_boy.png') }}" 
                 alt="Boy writing" 
                 class="absolute -top-24 sm:-top-28 left-4 sm:left-12 w-28 sm:w-36 h-auto z-20 drop-shadow-md">
            <img src="{{ asset('images/footer_girl.png') }}" 
                 alt="Girl reading" 
                 class="absolute -top-24 sm:-top-28 right-4 sm:right-12 w-28 sm:w-36 h-auto z-20 drop-shadow-md">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-4">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-10 border-b border-white/10">
                
                <!-- School Brand Column from Screenshot 6 -->
                <div class="lg:col-span-1 space-y-3">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 rounded-xl bg-white text-brand-navy flex items-center justify-center font-black text-xl shadow">
                            <span class="text-brand-pink">M</span>
                        </div>
                        <div>
                            <h3 class="font-heading font-black text-base text-white leading-tight">THE MANTHAN SCHOOL</h3>
                            <p class="text-[9px] font-bold text-pink-400 uppercase tracking-widest">get . set . know . fly</p>
                            <p class="text-[8px] text-slate-400 uppercase">A MAHAGUN INITIATIVE</p>
                        </div>
                    </div>
                </div>

                <!-- Column 1: Programmes from Screenshot 6 -->
                <div>
                    <ul class="space-y-2 text-[11px] text-slate-300">
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">Toddlers, Cuddle Bugs</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">Pre-Nursery, Hatchlings</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">Nursery, Nestlings</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">Kindergarten, Fledglings</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">Grades 1 and 2</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">Curriculum and Pedagogy</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">A Day at Manthan</a></li>
                        <li><a href="{{ route('home') }}#programmes" class="hover:text-white">Beyond Academics</a></li>
                    </ul>
                </div>

                <!-- Column 2: Admissions from Screenshot 6 -->
                <div>
                    <ul class="space-y-2 text-[11px] text-slate-300">
                        <li><a href="{{ route('home') }}#enquiry" class="hover:text-white">Admissions 2027-28</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-white">Admission Process and Age Criteria</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-white">Fee Structure</a></li>
                        <li><a href="{{ route('home') }}#enquiry" class="hover:text-white">Online Registration</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-white">Admission FAQs</a></li>
                        <li><a href="#faq" class="hover:text-white">Download Brochure</a></li>
                        <li><a href="{{ route('home') }}#enquiry" class="hover:text-white">Contact and Book a Visit</a></li>
                    </ul>
                </div>

                <!-- Column 3: Parent Corner from Screenshot 6 -->
                <div>
                    <ul class="space-y-2 text-[11px] text-slate-300">
                        <li><a href="{{ route('login') }}" class="hover:text-white">Parent Login</a></li>
                        <li><a href="{{ route('home') }}#enquiry" class="hover:text-white">Pay Fees</a></li>
                        <li><a href="#" class="hover:text-white">Parents ERP</a></li>
                        <li><a href="#safe" class="hover:text-white">Safety, Hygiene and Child Care</a></li>
                        <li><a href="#faq" class="hover:text-white">Transport and Timings</a></li>
                        <li><a href="#" class="hover:text-white">Student Corner</a></li>
                        <li><a href="#faq" class="hover:text-white">Parent FAQs and Answer Hub</a></li>
                        <li><a href="{{ route('news-events.index') }}" class="hover:text-white">Gallery</a></li>
                        <li><a href="{{ route('news-events.index') }}" class="hover:text-white">Events and Competitions</a></li>
                        <li><a href="{{ route('news-events.index') }}" class="hover:text-white">Blog</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact & Book Visit from Screenshot 6 -->
                <div class="space-y-3">
                    <div class="text-[11px] text-slate-300 space-y-1">
                        <p>Front office 0120-4984255</p>
                        <p>Admissions +91 96433 04760</p>
                        <p>info@manthan.edu.in</p>
                        <p>admission@manthan.edu.in</p>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('home') }}#enquiry" class="inline-flex px-5 py-2 rounded-full border border-white text-white hover:bg-white hover:text-brand-navy text-[11px] font-bold uppercase transition">
                            BOOK A CAMPUS VISIT
                        </a>
                    </div>
                </div>

            </div>

            <!-- Banner Line from Screenshot 6 -->
            <div class="py-6 text-center text-xs text-slate-300 border-b border-white/10">
                Looking for Grades 3 to 12 ? &nbsp;<a href="#" class="text-cyan-400 hover:underline font-semibold ml-1">Visit our Greater Noida West campus</a>
            </div>

            <!-- Bottom Line from Screenshot 6 -->
            <div class="pt-6 flex flex-col md:flex-row items-center justify-between text-[11px] text-slate-400 space-y-3 md:space-y-0">
                <div class="flex flex-wrap items-center gap-x-4 gap-y-1">
                    <a href="#" class="hover:text-white">Mandatory Public Disclosure</a>
                    <span>|</span>
                    <a href="#" class="hover:text-white">Careers</a>
                    <span>|</span>
                    <a href="#" class="hover:text-white">Privacy Policy</a>
                    <span>|</span>
                    <a href="#" class="hover:text-white">Terms of Use</a>
                    <span>|</span>
                    <a href="#" class="hover:text-white">Sitemap</a>
                </div>

                <div>
                    <p>© 2026 The Manthan School. Designed and developed by Adtric</p>
                </div>
            </div>

        </div>
    </footer>

    <!-- Floating Chat & WhatsApp Action Widgets (Matching Screenshot 6) -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-center space-y-3">
        <!-- Back to Top Button -->
        <button id="back-to-top-btn" 
                type="button" 
                onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                aria-label="Back to Top"
                title="Scroll to top"
                class="w-11 h-11 rounded-full bg-white/95 hover:bg-white text-brand-navy shadow-xl border border-slate-200 flex items-center justify-center transition-all duration-300 opacity-0 pointer-events-none translate-y-3 hover:scale-110">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/></svg>
        </button>

        <!-- Live Chat Bubble -->
        <a href="#enquiry" 
           aria-label="Chat with Admissions"
           title="Enquire with Admissions"
           class="w-12 h-12 rounded-full bg-brand-navy hover:bg-brand-navy-dark text-white flex items-center justify-center shadow-2xl transition transform hover:scale-110 border-2 border-white/80 group">
            <svg class="w-6 h-6 fill-current group-hover:scale-110 transition" viewBox="0 0 24 24">
                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z"/>
            </svg>
        </a>

        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/919643304760" 
           target="_blank" 
           rel="noopener noreferrer" 
           aria-label="Connect on WhatsApp"
           title="Chat on WhatsApp"
           class="w-12 h-12 rounded-full bg-[#25D366] hover:bg-[#20ba59] text-white flex items-center justify-center shadow-2xl transition transform hover:scale-110 border-2 border-white/80 group">
            <svg class="w-6 h-6 fill-current group-hover:scale-110 transition" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.983.541 1.839.818 2.796.818 3.179 0 5.766-2.586 5.767-5.766.001-3.18-2.585-5.766-5.767-5.766zm3.374 8.243c-.145.405-.729.743-1.047.788-.309.043-.699.066-2.261-.582-1.999-.828-3.262-2.887-3.361-3.02-.099-.133-.809-1.077-.809-2.053 0-.976.512-1.455.694-1.654.182-.199.397-.249.53-.249.133 0 .265.002.381.008.123.006.287-.047.45.344.166.398.564 1.378.614 1.478.05.1.083.216.017.348-.066.133-.1.216-.199.332-.099.116-.208.26-.297.349-.1.1-.204.208-.088.407.116.199.516.852 1.107 1.38.761.679 1.402.889 1.601.989.199.1.315.083.431-.05.116-.133.498-.581.63-.78.133-.199.265-.166.448-.099.182.066 1.157.546 1.356.645.199.1.332.149.381.232.05.083.05.481-.095.886zM12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.662 1.435 5.178L2 22l4.981-1.398A9.954 9.954 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/>
            </svg>
        </a>
    </div>

    <!-- Mobile Drawer & Back-to-Top Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', () => menu.classList.toggle('hidden'));
            }

            const btt = document.getElementById('back-to-top-btn');
            if (btt) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 400) {
                        btt.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-3');
                        btt.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
                    } else {
                        btt.classList.add('opacity-0', 'pointer-events-none', 'translate-y-3');
                        btt.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
                    }
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
