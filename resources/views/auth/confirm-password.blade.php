@extends('web.layout.auth')

@section('title')
    <title>Сброс пароля — {{ config('app.name') }}</title>
@endsection

@section('layout-content')
    <h1 class="mb-4 small">Подтверждение пароля</h1>

    <div class="mb-4 text-sm text-gray-600">
        Пожалуйста, подтвердите свой пароль, прежде чем продолжить
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

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


        <div class="flex items-center justify-end mb-4">
            <button class="btn btn-custom btn-black no-border" type="submit">Подтвердить</button>
        </div>
    </form>

@endsection
