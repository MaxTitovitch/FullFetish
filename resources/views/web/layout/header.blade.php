@php

$user = \Illuminate\Support\Facades\Auth::user()
@endphp

<header class="header {{ 'home.index' !== Route::currentRouteName() ? 'gradient' : '' }}">
    <nav class="navbar navbar-expand-lg light">
        <div class="container">
            <a class="navbar-brand py-0 me-5" href="/">
                <img
                        class="header__logo"
                        src="{{ asset('/img/logo.svg') }}"
                        alt="{{ config('app.name') }}"
                >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse auth-place" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if ($user)
                        <li class="nav-item mx-3">
                            <a
                                    class="nav-link {{ 'home.subscriptions' === Route::currentRouteName() ? 'active' : '' }}"
                                    aria-current="page"
                                    href="{{ route('home.subscriptions') }}"
                            >Подписки</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a
                                    class="nav-link {{ 'home.content' === Route::currentRouteName() ? 'active' : '' }}"
                                    aria-current="page"
                                    href="{{ route('home.content') }}"
                            >Контент</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Категории</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Категория 1</a></li>
                            <li><a class="dropdown-item" href="#">Категория 2</a></li>
                            <li><a class="dropdown-item" href="#">Категория 3</a></li>
{{--                            <li><hr class="dropdown-divider"></li>--}}
                            <li><a class="dropdown-item" href="{{ route('home.categories') }}">Все категории</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Модели</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Модель 1</a></li>
                            <li><a class="dropdown-item" href="#">Модель 2</a></li>
                            <li><a class="dropdown-item" href="#">Модель 3</a></li>
{{--                            <li><hr class="dropdown-divider"></li>--}}
                            <li><a class="dropdown-item" href="{{ route('home.models') }}">Все модели</a></li>
                        </ul>
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
                        <a class="btn btn-custom me-3" href="{{ route('register') }}">Регистрация</a>
                        <a class="btn btn-link btn-custom" href="{{ route('login') }}">Вход</a>
                    @else
                        <a class="btn btn-custom btn-empty me-3" href="{{ route('register') }}">
                            <img src="{{ asset('/img/icon/chat.svg') }}" alt="{{ config('app.name') }}">
                        </a>

                        <div class="custom-dropdown dropdown">
                            <a class="btn btn-round btn-custom nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ substr($user->username, 0, 2) }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
{{--                                <li class="text-center bold text-white">{{ $user->username }}</li>--}}
{{--                                <li><hr class="dropdown-divider"></li>--}}
{{--                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Панель управления</a></li>--}}
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Профиль</a></li>
{{--                                <li><hr class="dropdown-divider"></li>--}}
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
