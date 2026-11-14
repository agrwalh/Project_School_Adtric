<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel') | The Manthan School</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-heading { font-family: 'Outfit', sans-serif; }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen flex flex-col">

    <!-- Admin Top Navbar -->
    <header class="bg-brand-navy text-white shadow-md sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- Logo & Brand -->
                <div class="flex items-center space-x-3">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-lg bg-brand-pink flex items-center justify-center font-black text-white text-base">
                            M
                        </div>
                        <span class="font-heading font-black text-lg tracking-tight text-white">THE MANTHAN SCHOOL</span>
                    </a>
                    <span class="text-xs px-2 py-0.5 rounded bg-white/10 text-pink-300 font-bold uppercase tracking-wider hidden sm:inline">Admin Panel</span>
                </div>

                <!-- Navigation Tabs -->
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="px-3.5 py-2 rounded-lg text-xs font-bold uppercase tracking-wider transition {{ request()->routeIs('admin.dashboard') ? 'bg-white/20 text-white' : 'text-slate-300 hover:text-white hover:bg-white/10' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.news-events.index') }}" 
                       class="px-3.5 py-2 rounded-lg text-xs font-bold uppercase tracking-wider transition {{ request()->routeIs('admin.news-events.*') ? 'bg-white/20 text-white' : 'text-slate-300 hover:text-white hover:bg-white/10' }}">
                        News & Events
                    </a>
                    <a href="{{ route('admin.enquiries.index') }}" 
                       class="px-3.5 py-2 rounded-lg text-xs font-bold uppercase tracking-wider transition {{ request()->routeIs('admin.enquiries.*') ? 'bg-white/20 text-white' : 'text-slate-300 hover:text-white hover:bg-white/10' }}">
                        Enquiries
                        @php $newCount = \App\Models\AdmissionEnquiry::where('status', 'New')->count(); @endphp
                        @if($newCount > 0)
                            <span class="ml-1.5 px-1.5 py-0.2 rounded-full bg-brand-pink text-[10px] text-white font-extrabold">{{ $newCount }}</span>
                        @endif
                    </a>
                </nav>

                <!-- Right Actions: View Website & Logout -->
                <div class="flex items-center space-x-3">
                    <a href="{{ route('home') }}" target="_blank" class="text-xs text-slate-300 hover:text-white flex items-center font-semibold bg-white/10 px-3 py-1.5 rounded-lg transition">
                        <span>Live Site</span>
                        <svg class="w-3.5 h-3.5 ml-1 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>

                    <!-- User info & Logout -->
                    <div class="flex items-center space-x-2 pl-2 border-l border-white/20">
                        <span class="text-xs text-slate-300 font-medium hidden lg:inline">{{ Auth::user()->name ?? 'Admin' }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-xs font-bold text-rose-300 hover:text-white bg-rose-500/20 hover:bg-rose-600 px-3 py-1.5 rounded-lg transition">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile sub-bar -->
        <div class="md:hidden border-t border-white/10 px-4 py-2 flex items-center justify-around text-xs font-bold">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'text-brand-pink' : 'text-slate-300' }}">Dashboard</a>
            <a href="{{ route('admin.news-events.index') }}" class="{{ request()->routeIs('admin.news-events.*') ? 'text-brand-pink' : 'text-slate-300' }}">News & Events</a>
            <a href="{{ route('admin.enquiries.index') }}" class="{{ request()->routeIs('admin.enquiries.*') ? 'text-brand-pink' : 'text-slate-300' }}">Enquiries</a>
        </div>
    </header>

    <!-- Flash message alerts -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 w-full">
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-xl flex items-center justify-between text-sm font-semibold shadow-sm">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 w-full">
            <div class="bg-rose-50 border border-rose-200 text-rose-800 px-4 py-3 rounded-xl flex items-center justify-between text-sm font-semibold shadow-sm">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-rose-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span>{{ session('error') }}</span>
                </div>
            </div>
        </div>
    @endif

    <!-- Main Content Area -->
    <main class="flex-grow py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        @yield('content')
    </main>

    <!-- Admin Footer -->
    <footer class="bg-white border-t border-slate-200 py-4 text-center text-xs text-slate-500">
        The Manthan School Administration System • Laravel 11 Backend & MySQL Database
    </footer>

    @stack('scripts')
</body>
</html>
