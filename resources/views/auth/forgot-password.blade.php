@extends('web.layout.auth')

@section('title')
    <title>Сброс пароля — {{ config('app.name') }}</title>
@endsection

@section('layout-content')

    <div class="mb-4 text-sm text-gray-600">
        Забыли пароль? Без проблем. Просто сообщите нам свой Email или Логин, и мы вышлем вам ссылку для сброса пароля, которая позволит вам задать новый
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="'Email или Логин'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                Отправить
            </x-primary-button>
        </div>
    </form>

@endsection
