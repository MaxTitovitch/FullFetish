@extends('web.layout.layout')

@section('title')
    <title>Главная — {{ config('app.name') }}</title>
@endsection

@section('content')
    <div class="home">
        <div class="home__head">
{{--            <img class="home__head-back" src="{{ asset('/img/back-foot.svg') }}" alt="{{ config('app.name') }}">--}}
            <div class="home__head-front" style="background-image: url('{{ asset('/img/back-foot-shadow.svg') }}')">
                <div class="container">
                    <div class="home__head-flex">
                        <div>
                            <h1>Продавай и покупай фото ног:<br> фото, видео <br>и многое другое!</h1>
                        </div>
                        <div class="description">
                            ПРИСОЕДИНЯЙТЕСЬ К 1000 УЧАСТНИКОВ, ПОКУПАЮЩИХ И ПРОДАЮЩИХ ФОТО И ВИДЕО НОГ
                        </div>
                        <div>
                            <a class="btn btn-primary btn-custom btn-inverse btn-250" href="#">Присоединиться</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home__video container">
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
                    <strong>
                        FeetFinder title
                    </strong>
                    <br>
                    <br>
                    FeetFinder is the safest, largest, and easiest website to view,
                    buy and sell feet content. With millions of users and over 5,000 five-star reviews,
                    FeetFinder is the best website for anyone interested in buying or selling feet content.
                    <br>
                    <br>
                    FeetFinder is the safest, largest, and easiest website to view,
                    buy and sell feet content. With millions of users and over 5,000 five-star reviews,
                    FeetFinder is the best website for anyone interested in buying or selling feet content.

                    <br>
                    <br>
                    <strong>
                        Остались вопросы? Посмотрите наш подробный <a href="#" class="custom-link purple">FAQ</a>
                    </strong>
                </div>
                <div class="home__video_buttons">
                    <a class="btn btn-primary btn-custom btn-300" href="#">Продавать контент</a>
                    <a class="btn btn-primary btn-custom btn-lighten btn-300" href="#">Смотреть контент</a>
                </div>
            </div>
        </div>

        <div class="home__categories">
            <div class="container">
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

        <div class="home__models container">
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
