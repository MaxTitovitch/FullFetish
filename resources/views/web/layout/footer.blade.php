<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 footer__main">
                <a class="py-0" href="/">
                    <img
                            class="footer__logo"
                            src="{{ asset('/img/logo.png') }}"
                            alt="{{ config('app.name') }}"
                    >
                </a>
{{--                <div>--}}
{{--                    FullFetish — это удобный веб-сайт для проверенных пользователей,--}}
{{--                    позволяющий покупать или продавать индивидуальный контент--}}
{{--                </div>--}}
            </div>
            <div class="col-12 col-md-5 footer__wrap">
                <div class="footer__menu">
                    <span class="footer__menu-head">Контент</span>
                    <a href="/" class="footer__menu-link">Главная</a>
                    <a href="#" class="footer__menu-link">Категории</a>
                    <a href="#" class="footer__menu-link">Модели</a>
                    <a href="#" class="footer__menu-link">Фото</a>
                </div>
                <div class="footer__menu">
                    <span class="footer__menu-head">Полезные страницы</span>
                    <a href="#" class="footer__menu-link">Ответы на вопросы (FAQ)</a>
                    <a href="#" class="footer__menu-link">Политика конфиденциальности</a>
                    <a href="#" class="footer__menu-link">Пользовательское соглашение</a>
                </div>
            </div>
            <div class="col-12 col-md-4 footer__contact">
                <div class="d-flex flex-column">
                    <a class="footer__contact-email" href="mailto:advanced-user@mail.ru">
                        <i class="bi-envelope"></i> advanced-user@mail.ru
                    </a>
                    <span class="footer__contact-address">
                        <i class="bi bi-geo-alt-fill"></i> Россия, Москва
                    </span>
                    <div class="footer__contact-social">
                        <a href="#" target="_blank" class="social"><i class="bi bi-youtube"></i></a>
                        <a href="#" target="_blank" class="social"><i class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank" class="social"><i class="bi bi-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer__copyright">
            <div class="col-12">
                ©{{ config('app.name') }} Все права защищены {{ date('Y') }}
            </div>
        </div>
    </div>
</footer>
