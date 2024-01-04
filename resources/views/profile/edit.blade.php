@extends('web.layout.profile')

@section('title')
    <title>Панель управления — {{ config('app.name') }}</title>
@endsection

@section('layout-content')

    <div class="d-flex justify-content-between">
        <div class="profile__title">
            <h2>Персональная информация</h2>
            <span>Обновите ваше фото и личные данные здесь.</span>
        </div>
        <div>
            <button id="profileSave" class="btn btn-custom btn-black no-border" type="submit">Сохранить</button>
        </div>
    </div>


    @if (session('status') === 'profile-updated')
        <div class="profile__status">
           Персональная информация успешно обновлена
        </div>
    @endif

    <form id="profileForm" method="post" action="{{ route('profile.update') }}" class="mt-6">
        @csrf
        @method('patch')

        <div class="form-group mb-4">
            <label for="username" class="mb-2">Имя пользователя</label>
            <div>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username', $user->username) }}" required autofocus autocomplete="username">

                @if($errors->get('username')[0] ?? false)
                    <div id="usernameHelp" class="form-text text-danger mt-2">{{ $errors->get('username')[0] ?? '' }}</div>
                @endif
            </div>
        </div>

        <div class="form-group mb-4">
            <label for="email" class="mb-2">Адрес электронной почты</label>
            <div>
                <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $user->email)}}" required autofocus autocomplete="username">

                @if($errors->get('email')[0] ?? false)
                    <div id="emailHelp" class="form-text text-danger mt-2">{{ $errors->get('email')[0] ?? '' }}</div>
                @endif
            </div>
        </div>

{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('email')" />--}}

{{--            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())--}}
{{--                <div>--}}
{{--                    <p class="text-sm mt-2 text-gray-800">--}}
{{--                        {{ __('Your email address is unverified.') }}--}}

{{--                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                            {{ __('Click here to re-send the verification email.') }}--}}
{{--                        </button>--}}
{{--                    </p>--}}

{{--                    @if (session('status') === 'verification-link-sent')--}}
{{--                        <p class="mt-2 font-medium text-sm text-green-600">--}}
{{--                            {{ __('A new verification link has been sent to your email address.') }}--}}
{{--                        </p>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}

        <div class="form-group mb-4">
            <label for="country" class="mb-2">Страна</label>
            <div>
                <input type="text" class="form-control" name="country" id="country" value="{{ old('country', $user->country)}}" required autofocus>

                @if($errors->get('country')[0] ?? false)
                    <div id="countryHelp" class="form-text text-danger mt-2">{{ $errors->get('country')[0] ?? '' }}</div>
                @endif
            </div>
        </div>
    </form>
@endsection
