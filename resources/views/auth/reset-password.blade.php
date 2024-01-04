@extends('web.layout.auth')

@section('title')
    <title>Сброс пароля — {{ config('app.name') }}</title>
@endsection

@section('layout-content')
    <h1 class="mb-4 small">Сброс пароля</h1>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">


        <div class="form-group mb-4">
            <label for="email" class="mb-2">Имя пользователя или Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email')}}" required autofocus autocomplete="username">

            @if($errors->get('email')[0] ?? false)
                <div id="emailHelp" class="form-text text-danger mt-2">{{ $errors->get('email')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="form-group mb-4">
            <div class="password-changer">
                <label for="password" class="mb-2">Пароль</label>
                <div class="password-changer-button" data-id="password">
                    <div class="to-hide">
                        <i class="bi bi-eye-slash-fill"></i>
                        <span>Скрыть</span>
                    </div>
                    <div class="to-show">
                        <i class="bi bi-eye-fill"></i>
                        <span>Показать</span>
                    </div>
                </div>
            </div>
            <input type="password" class="form-control" name="password" id="password" value="{{ old('password')}}" required autofocus autocomplete="password">

            @if($errors->get('password')[0] ?? false)
                <div id="passwordHelp" class="form-text text-danger mt-2">{{ $errors->get('password')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="form-group mb-4">
            <div class="password-changer">
                <label for="password_confirmation" class="mb-2">Подтвердите пароль</label>
                <div class="password-changer-button" data-id="password_confirmation">
                    <div class="to-hide">
                        <i class="bi bi-eye-slash-fill"></i>
                        <span>Скрыть</span>
                    </div>
                    <div class="to-show">
                        <i class="bi bi-eye-fill"></i>
                        <span>Показать</span>
                    </div>
                </div>
            </div>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation')}}" required autofocus>

            @if($errors->get('password_confirmation')[0] ?? false)
                <div id="passwordConfirmationHelp" class="form-text text-danger mt-2">{{ $errors->get('password_confirmation')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="flex items-center justify-end mb-4">
            <button class="btn btn-custom btn-black no-border" type="submit">Сбросить пароль</button>
        </div>
    </form>

@endsection
