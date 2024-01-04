@extends('web.layout.auth')

@section('title')
    <title>Вход в систему — {{ config('app.name') }}</title>
@endsection

@section('layout-content')

        <h1 class="mb-4">Вход</h1>

        @if(session('status'))
            <span class="text-success fw-bold mb-4 mb-4">{{ session('status') }}</span>
        @endif

        <form method="POST" action="{{ route('login') }}" class="auth__form">
            @csrf

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

            <!-- Remember Me -->
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" checked type="checkbox" class="app__checkbox rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                    <span class="ms-2 text-sm text-gray-600">Запомнить</span>--}}
{{--                </label>--}}
{{--            </div>--}}

            <div class="flex items-center justify-end mb-4">
                <button class="btn btn-custom btn-black no-border" type="submit">Войти</button>
            </div>


            @if (Route::has('password.request'))
                <div class=" mb-4">
                    <a class="small" href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                </div>
                <div class=" mb-4">
                    <span>
                        У вас Еще нет аккаунта?
                    </span>
                    <a class="small" href="{{ route('register') }}">
                        Зарегистрироваться
                    </a>
                </div>
            @endif
        </form>
@endsection

