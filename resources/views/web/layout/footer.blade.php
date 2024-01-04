<footer class="footer">
    <div class="footer__body container">
        <div class="row">
            <div class="col-12 col-md-6 footer__main">
                <a class="py-0" href="/">
                    <img
                            class="footer__logo"
                            src="{{ asset('/img/logo.svg') }}"
                            alt="{{ config('app.name') }}"
                    >
                </a>
                <div class="text-start">
                    {{ date('Y') }} FullFetish. Все права защищены
                </div>
            </div>
            <div class="col-12 col-md-6 footer__wrap pt-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="footer__menu">
                                <span class="footer__menu-head">Меню</span>
                                <a href="{{ route('home.categories') }}" class="footer__menu-link">Категории</a>
                                <a href="{{ route('home.models') }}" class="footer__menu-link">Модели</a>
                                <a href="{{ route('home.faq') }}" class="footer__menu-link">FAQ</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="footer__menu">
                                <span class="footer__menu-head">Информация</span>
                                <a href="#" class="footer__menu-link">Конфиденциальность</a>
                                <a href="#" class="footer__menu-link">Условия использования</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="footer__menu">
                                <span class="footer__menu-head">Контакты</span>
                                <a href="tel:+79991234567" class="footer__menu-link">+7 999 123 45 67</a>
                                <a href="mailto:fullfetish@gmail.com" class="footer__menu-link">fullfetish@gmail.com</a>
                                <div class="footer__menu-soc">
                                    <a href="#" target="_blank" class="footer__menu-link">
                                        <img src="{{ asset('/img/icon/fb.svg') }}" alt="Facebook">
                                        <img class="pink" src="{{ asset('/img/icon/fb-pink.svg') }}" alt="Facebook">
                                    </a>
                                    <a href="#" target="_blank" class="footer__menu-link">
                                        <img src="{{ asset('/img/icon/x.svg') }}" alt="X">
                                        <img class="pink" src="{{ asset('/img/icon/x-pink.svg') }}" alt="X">
                                    </a>
                                    <a href="#" target="_blank" class="footer__menu-link">
                                        <img src="{{ asset('/img/icon/inst.svg') }}" alt="Instagram">
                                        <img class="pink" src="{{ asset('/img/icon/inst-pink.svg') }}" alt="Instagram">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filter filter-left"></div>
    <div class="filter filter-right"></div>
</footer>
