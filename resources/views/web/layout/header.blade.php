<header class="header">
    <nav class="navbar fixed-top navbar-expand-lg light">
        <div class="container">
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
                    <a class="btn btn-primary btn-custom btn-180" href="#">Регистрация</a>
                    <a class="btn btn-link btn-custom btn-130" href="#">Вход</a>
                </div>
            </div>
        </div>
    </nav>
</header>
