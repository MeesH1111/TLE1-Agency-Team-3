<x-guest-layout>
    <div class="container">
        <div class="circle-image">
            <img src="/images/roundworkerimage.png" alt="Profile Picture" />
        </div>

        <h1>Welkom terug</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <div class="input-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-group mt-4">
                <x-input-label for="password" :value="__('Wachtwoord')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="remember-me block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Herriner mij') }}</span>
                </label>
            </div>

            <button type="submit" class="login-button">
                {{ __('Log in') }}
            </button>

            <a href="{{ route('register') }}" class="register-link">Account aanmaken?</a>
            <p></p>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="register-link">
                    {{ __('Wachtwoord vergeten?') }}
                </a>
            @endif
        </form>
    </div>
</x-guest-layout>
