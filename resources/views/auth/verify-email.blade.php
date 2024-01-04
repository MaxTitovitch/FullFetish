@extends('web.layout.auth')

@section('title')
    <title>Подтверждение электронной почты — {{ config('app.name') }}</title>
@endsection

@section('layout-content')
    <h1 class="mb-4 small">Подтвердите Email</h1>

    @if (session('status') === 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-success">
            Новая ссылка для подтверждения была отправлена на адрес электронной почты, который вы указали при регистрации
        </div>
    @endif

    <div class="mb-4 text-sm text-gray-600">
        Спасибо за регистрацию!
        <br>
        <br>
        Прежде чем начать, не могли бы вы подтвердить свой адрес электронной почты, нажав на ссылку,
        которую мы только что отправили вам по электронной почте?
        <br>
        <br>
        Если вы не получили письмо, мы отправим вам его снова
    </div>


    <div class="mt-4 d-flex justify-content-start gap-3">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="flex items-center justify-end mb-4">
                <button class="btn btn-custom btn-black no-border" type="submit">Выслать повторно</button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <div class="flex items-center justify-end mb-4">
                <button class="btn btn-custom btn-black no-border" type="submit">Выйти</button>
            </div>
        </form>
    </div>
@endsection
