@extends('web.layout.layout')

@section('content')
    <div class="home">
        <div class="home__head">
            <img class="home__head-back" src="{{ asset('/img/back-foot.svg') }}" alt="{{ config('app.name') }}">
            <div class="home__head-front">
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
                        Остались вопросы? Посмотрите наш подробный <a href="#" class="custom-link">FAQ</a>
                    </strong>
                </div>
                <div class="home__video_buttons">
                    <a class="btn btn-primary btn-custom btn-300" href="#">Продавать контент</a>
                    <a class="btn btn-primary btn-custom btn-lighten btn-300" href="#">Смотреть контент</a>
                </div>
            </div>
        </div>
    </div>
@endsection
