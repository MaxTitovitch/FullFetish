@extends('web.layout.layout')

@section('content')
    <div class="container-md">
        <div class="row">
            <div class="col-3 py-3">
                <div class="profile__side bg-white shadow sm:rounded-lg">
                    <ul class="profile__list list-group">
                        <li class="list-group-item head">
                            <a href="{{ route('dashboard') }}" class="{{ 'dashboard' === Route::currentRouteName() ? 'active' : ''}}">
                                <img
                                        class="profile__img"
                                        src="{{ asset('/img/logo.png') }}"
                                        alt="{{ config('app.name') }}"
                                >
                                <span>
                                Панель управления
                            </span>
                            </a>
                        </li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-image"></i> <span>Контент</span></a></li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-currency-dollar"></i> <span>Подписки</span></a></li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-bag-fill"></i> <span>Покупки</span></a></li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-chat-dots-fill"></i> <span>Чаты</span></a></li>
                        <li class="list-group-item">
                            <a
                                    href="{{ route('profile.edit') }}"
                                    class="{{ 'profile.edit' === Route::currentRouteName() ? 'active' : ''}}"
                            ><i class="bi bi-person-circle"></i> <span>Профиль</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="profile font-sans text-gray-900 antialiased">
                    @yield('layout-content')
                </div>
            </div>
        </div>
    </div>
@endsection
