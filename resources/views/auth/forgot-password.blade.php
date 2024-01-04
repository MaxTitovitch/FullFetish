@extends('web.layout.auth')

@section('title')
    <title>Сброс пароля — {{ config('app.name') }}</title>
@endsection

@section('layout-content')

    <h1 class="mb-4 small">Забыли пароль?</h1>

    <div class="mb-4 text-sm text-gray-600">
        Просто сообщите нам свой Email или Логин, и мы вышлем вам ссылку для сброса пароля, которая позволит вам задать новый
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group mb-4">
            <label for="email" class="mb-2">Имя пользователя или Адрес электронной почты</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email')}}" required autofocus autocomplete="username">

            @if($errors->get('email')[0] ?? false)
                <div id="emailHelp" class="form-text text-danger mt-2">{{ $errors->get('email')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="flex items-center justify-end mb-4">
            <button class="btn btn-custom btn-black no-border" type="submit">Отправить</button>
        </div>
    </form>

@endsection
