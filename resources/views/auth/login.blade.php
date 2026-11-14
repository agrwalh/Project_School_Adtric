<x-guest-layout>
    <!-- Brand Logo & Header -->
    <div class="text-center mb-6">
        <a href="{{ route('home') }}" class="inline-flex items-center space-x-2">
            <div class="w-10 h-10 rounded-xl bg-brand-navy flex items-center justify-center font-black text-white text-xl shadow-md">
                <span class="text-brand-pink">M</span>
            </div>
            <span class="font-heading font-black text-xl tracking-tight text-brand-navy">THE MANTHAN SCHOOL</span>
        </a>
        <h2 class="text-base font-bold text-slate-800 mt-2">Administrator Portal</h2>
        <p class="text-xs text-slate-500">Sign in to manage news, events, and admission enquiries</p>
    </div>

    <!-- Quick Credentials Helper Box for Reviewers/HR -->
    <div class="mb-5 p-3.5 bg-pink-50 border border-pink-200 rounded-2xl text-xs text-slate-700 space-y-1.5">
        <div class="flex items-center justify-between">
            <span class="font-bold text-brand-pink uppercase tracking-wider text-[10px]">Evaluation Credentials:</span>
            <button type="button" 
                    onclick="fillAdminCredentials()" 
                    class="text-[10px] font-bold text-white bg-brand-pink hover:bg-brand-pink-hover px-2.5 py-1 rounded-lg transition shadow-sm">
                ⚡ Auto-Fill Credentials
            </button>
        </div>
        <div class="font-mono text-[11px] text-slate-600">
            <div><span class="text-slate-400">Login ID:</span> <span class="font-bold text-slate-800">admin@manthan.edu.in</span></div>
            <div><span class="text-slate-400">Password:</span> <span class="font-bold text-slate-800">Admin@123456</span></div>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Admin Email Address')" />
            <x-text-input id="email" class="block mt-1 w-full rounded-xl" type="email" name="email" :value="old('email', 'admin@manthan.edu.in')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full rounded-xl"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between pt-1">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-brand-pink shadow-sm focus:ring-brand-pink" name="remember" checked>
                <span class="ms-2 text-xs text-slate-600">{{ __('Remember me') }}</span>
            </label>

            <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-brand-pink transition">
                ← Back to Website
            </a>
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full py-3 rounded-xl bg-brand-navy hover:bg-brand-navy-light text-white font-extrabold text-xs uppercase tracking-wider shadow-lg transition">
                Sign In to Admin Panel
            </button>
        </div>
    </form>

    <script>
        function fillAdminCredentials() {
            document.getElementById('email').value = 'admin@manthan.edu.in';
            document.getElementById('password').value = 'Admin@123456';
        }
    </script>
</x-guest-layout>
