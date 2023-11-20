@extends('web.layout.layout')

@section('title')
    <title>Главная — {{ config('app.name') }}</title>
@endsection

@section('content')
    <div class="home">
        <div class="home__head">
{{--            <img class="home__head-back" src="{{ asset('/img/back-foot.svg') }}" alt="{{ config('app.name') }}">--}}
            <div class="home__head-front" style="background-image: url('{{ asset('/img/back-foot-shadow.svg') }}')">
                <div class="container-md">
                    <div class="home__head-flex">
                        <div>
                            <h1>Смотри, выкладывай и монетизируй контент</h1>
                        </div>
                        <ul class="description">
                            <li>FullFetish – это крупнейшая платформа по поиску фото и видео на любые фетиш-тематики</li>
                            <li>Множество моделей и категорий на любой вкус</li>
                            <li>Смотри контент полностью анонимно и безопасно</li>
                        </ul>
                        <div>
                            <a class="btn btn-primary btn-custom btn-inverse btn-250" href="{{ route('register') }}">Присоединиться</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home__video container-md">
            <h2>КАК ЭТО РАБОТАЕТ?</h2>
            <div class="home__video-content">
                <div class="home__video-preview">
                    <img id="videoPreview" class="show" src="{{ asset('/img/preview.png') }}" alt="{{ config('app.name') }}">
                    <video id="videoContent" src="{{ asset('/video/video.mp4') }}" loop></video>
                    <div class="home__video-preview-gradient"></div>
                    <div class="button show" id="videoButton">
                        <img src="{{ asset('/img/play.svg') }}" alt="Play">
                        <img src="{{ asset('/img/pause.svg') }}" alt="Play">
                    </div>
                </div>
            </div>
            <div class="home__video_desc">
                <div class="home__video_text">
                    <div>
                        <strong>
                            FULLFETISH БЕЗОПАСЕН?
                        </strong>
                    </div>
                    <div class="mt-3">
                        FULLFETISH – это полностью безопасная и защищенная платформа для размещения контента на тему
                        фетишей и различных сексуальных предпочтений. Мы придерживаемся философии отказа от порно,
                        а весь контент, размещенный на сайте носит эстетический характер с элементами эротики.
                    </div>
                    <div class="mt-5">
                        <strong>
                            Остались вопросы? <a href="#" class="custom-link purple">ОТВЕТЫ НАЙДЕТЕ ТУТ</a>
                        </strong>
                    </div>
                </div>
                <div class="home__video_buttons container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 home__video_buttons-item">
                            <div class="home__video_buttons-item-img" style="background-image: url('{{ asset('/img/auth-back3-1.png') }}')">
                                <div>
                                    <div class="home-head">
                                        <h3>ПРОДАТЬ КОНТЕНТ</h3>
                                    </div>
                                    <ul class="home-list">
                                        <li>
                                            Полностью анонимно и безопасно
                                        </li>
                                        <li>
                                            Зарабатывайте, продавая свои фото и видео
                                        </li>
                                        <li>
                                            Станьте звездой своего жанра
                                        </li>
                                    </ul>
                                    <a class="btn btn-primary btn-custom btn-300" href="{{ route('register', ['type' => 'seller']) }}">
                                        Продавать
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 home__video_buttons-item">
                            <div class="home__video_buttons-item-img" style="background-image: url('{{ asset('/img/auth-back3-2.png') }}')">
                                <div>
                                    <div class="home-head">
                                        <h3>СМОТРЕТЬ КОНТЕНТ</h3>
                                    </div>
                                    <ul class="home-list">
                                        <li>
                                            Множество фильтров для поиска контента
                                        </li>
                                        <li>
                                            Тысячи моделей, фото и видео на любой вкус
                                        </li>
                                        <li>
                                            Эксклюзивный контент только для Вас
                                        </li>
                                    </ul>
                                    <a class="btn btn-primary btn-custom btn-lighten btn-300" href="{{ route('register') }}">
                                        Смотреть
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home__categories">
            <div class="container-md">
                <h2>Популярные категории</h2>
                <div class="home__categories-wrap"  data-masonry='{"percentPosition": true, "gutter": 2 }'>
                    @foreach ($categories as $category)
                        <a href="#" class="home__categories-item">
                            <div class="home__categories-item-img">
                                <img src="{{ asset($category->photo) }}" alt="{{ $category->title }}">
                            </div>
                            <div class="home__categories-item-container">
                                <div>
                                    <h3>{{ $category->title }}</h3>
                                    <div>
                                        {{ $category->contents_count }}
                                        {{ trans_choice('публикация|публикации|публикаций', $category->contents_count) }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="home__categories-more">
                    <a class="btn btn-primary btn-custom btn-inverse btn-250" href="#">Все категории</a>
                </div>
            </div>
        </div>

        <div class="home__models container-md">
            <h2>Наши Модели</h2>
            <div class="home__models-link">
                <div class="home__models-link-img">
                    <img src="{{ asset('/img/collage.png') }}" alt="Collage">
                </div>
                <div class="home__models-link-body">
                    <h2>Модели</h2>
                    <h3>Просматривайте контент тысяч верифицированных моделей</h3>
                    <a class="btn btn-primary btn-custom btn-inverse btn-250" href="#">Все модели</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
@endsection
