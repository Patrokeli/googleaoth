<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email address')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="mt-4 space-y-6">
    <!-- Forgot Password + Sign In Button -->
    <div class="flex items-center justify-between">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-primary-button>
            {{ __('Sign in') }}
        </x-primary-button>
    </div>

    <!-- OR Divider -->
    <div class="flex items-center justify-center">
        <hr class="flex-grow border-t border-gray-300">
        <span class="mx-3 text-sm text-gray-500">OR</span>
        <hr class="flex-grow border-t border-gray-300">
    </div>

    <!-- Google Sign-in -->
    <div class="flex justify-center">
        <a href="{{ route('auth.google') }}"
           class="flex items-center gap-2 bg-white text-gray-700 border border-gray-300 rounded px-4 py-2 shadow hover:bg-gray-100">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google">
            <span>Sign in with Google</span>
        </a>
    </div>
</div>


    </form>
</x-guest-layout>
