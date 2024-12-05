<x-guest-layout>
    <div class="container">
        <h1>Registreren</h1>

        <form method="POST" action="{{ route('register') }}" class="login-form">
            @csrf

            <!-- Name -->
            <div class="input-group">
                <label for="name">{{ __('Naam') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="input-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="input-group">
                <label for="password">{{ __('Wachtwoord') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <label for="password_confirmation">{{ __('Wachtwoord herhalen') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Already Registered Link -->
            <div class="remember-me">
                <a href="{{ route('login') }}" class="register-link">{{ __('Heb je al een account? Log dan hier in.') }}</a>
            </div>

            <!-- Register Button -->
            <button type="submit" class="login-button">{{ __('Registreren') }}</button>
        </form>
    </div>
</x-guest-layout>
