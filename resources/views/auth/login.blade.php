@extends('web.layout.auth')

@section('title')
    <title>Вход в систему — {{ config('app.name') }}</title>
@endsection

@section('layout-content')
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="auth__login">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="'Email или Логин'" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="'Пароль'" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" checked type="checkbox" class="app__checkbox rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">Запомнить</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="custom-link dark-style small" href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    Войти
                </x-primary-button>
            </div>
        </form>
@endsection
