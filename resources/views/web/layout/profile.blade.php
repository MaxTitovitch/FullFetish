@extends('web.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="profile">
                    <div class="profile__head">
                        <h1>Личный кабинет</h1>
                        <ul class="profile__head-list">
                            <li>
                                <a
                                    class="{{ 'profile.edit' === Route::currentRouteName() ? 'active' : '' }}"
                                    href="{{ route('profile.edit') }}"
                                >
                                    Редактировать профиль
                                </a>
                            </li>
                            <li>
                                <a
                                    class="{{ 'profile.reset' === Route::currentRouteName() ? 'active' : '' }}"
                                    href="{{ route('profile.reset') }}"
                                >
                                    Сброс пароля
                                </a>
                            </li>
                            <li>
                                <a
                                    class="{{ 'profile.settings' === Route::currentRouteName() ? 'active' : '' }}"
                                    href="{{ route('profile.settings') }}"
                                >
                                    Предпочтения
                                </a>
                            </li>
                            <li>
                                <a
                                    class="{{ 'profile.payment' === Route::currentRouteName() ? 'active' : '' }}"
                                    href="{{ route('profile.payment') }}"
                                >
                                    Оплата
                                </a>
                            </li>
                            <li>
                                <a
                                    class="{{ 'profile.verification' === Route::currentRouteName() ? 'active' : '' }}"
                                    href="{{ route('profile.verification') }}"
                                >
                                    Верификация
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile__body">
                        @yield('layout-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
