@php

$user = \Illuminate\Support\Facades\Auth::user()
@endphp

<header class="header">
    <nav class="navbar fixed-top navbar-expand-lg light">
        <div class="container-md">
            <a class="navbar-brand py-0" href="/">
                <img
                        class="header__logo"
                        src="{{ asset('/img/logo.png') }}"
                        alt="{{ config('app.name') }}"
                >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a
                                class="nav-link {{ 'home.index' === Route::currentRouteName() ? 'active' : '' }}"
                                aria-current="page"
                                href="{{ route('home.index') }}"
                        >Главная</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a
                                class="nav-link {{ 'home.categories' === Route::currentRouteName() ? 'active' : '' }}"
                                aria-current="page"
                                href="#"
                        >Категории</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a
                                class="nav-link {{ 'home.models' === Route::currentRouteName() ? 'active' : '' }}"
                                aria-current="page"
                                href="#"
                        >Модели</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a
                                class="nav-link {{ 'home.models' === Route::currentRouteName() ? 'active' : '' }}"
                                aria-current="page"
                                href="#"
                        >Фото</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a
                                class="nav-link {{ 'home.faq' === Route::currentRouteName() ? 'active' : '' }}"
                                aria-current="page"
                                href="#"
                        >FAQ</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @if (!$user)
                    <a class="btn btn-primary btn-custom btn-180" href="{{ route('register') }}">Регистрация</a>
                    <a class="btn btn-link btn-custom btn-130" href="{{ route('login') }}">Вход</a>
                    @else
                        <div class="custom-dropdown dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> Профиль
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="text-center bold">{{ $user->username }}</li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Панель управления</a></li>
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Профиль</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a
                                                class="dropdown-item"
                                                href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                        >Выход</a>
                                    </form>
{{--                                    <a class="dropdown-item" href="#">Выход</a>--}}

                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
