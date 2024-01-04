@extends('web.layout.profile')

@section('title')
    <title>Панель управления — {{ config('app.name') }}</title>
@endsection

@section('layout-content')

    <div class="d-flex justify-content-between">
        <div class="profile__title">
            <h2>Сброс пароля</h2>
            <span>Замените ваш пароль на новый здесь.</span>
        </div>
        <div>
            <button id="passwordSave" class="btn btn-custom btn-black no-border" type="submit">Обновить</button>
        </div>
    </div>

    @if (session('status') === 'password-updated')
        <div class="profile__status">
           Пароль успешно обновлен
        </div>
    @endif

    <form id="passwordForm" method="post" action="{{ route('password.update') }}" class="mt-6">
        @csrf
        @method('put')

        <div class="form-group mb-4">
            <div class="password-changer">
                <label for="current_password" class="mb-2">Старый пароль</label>
                <div class="password-changer-button" data-id="current_password">
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

            <div>
                <input type="password" class="form-control" name="current_password" id="current_password" value="{{ old('current_password')}}" required autofocus>

                @if($errors->updatePassword?->get('current_password')[0] ?? false)
                    <div id="currentPasswordHelp" class="form-text text-danger mt-2">{{ $errors->updatePassword?->get('current_password')[0] ?? '' }}</div>
                @endif
            </div>
        </div>

        <div class="form-group mb-4">
            <div class="password-changer">
                <label for="password" class="mb-2">Новый пароль</label>
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
            <div>
                <input type="password" class="form-control" name="password" id="password" value="{{ old('password')}}" required autofocus autocomplete="password">

                @if($errors->updatePassword?->get('password')[0] ?? false)
                    <div id="passwordHelp" class="form-text text-danger mt-2">{{ $errors->updatePassword?->get('password')[0] ?? '' }}</div>
                @endif
            </div>
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
            <div>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation')}}" required autofocus>

                @if($errors->updatePassword?->get('password_confirmation')[0] ?? false)
                    <div id="passwordConfirmationHelp" class="form-text text-danger mt-2">{{ $errors->updatePassword?->get('password_confirmation')[0] ?? '' }}</div>
                @endif
            </div>
        </div>
    </form>
@endsection
