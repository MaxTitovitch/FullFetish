@extends('web.layout.layout')

@section('title')
    <title>Главная — {{ config('app.name') }}</title>
@endsection

@section('content')
    <div class="home">
        <div class="home__head">
            <div class="container d-flex pb-3">
                <div class="home__head-front">
                    <div class="home__head-flex">
                        <div>
                            <h1>Покупка и продажа эротических фото</h1>
                        </div>
                        <div class="description">
                            FullFetish - самый безопасный, крупный и удобный веб-сайт для просмотра, покупки и продажи
                            эротического контента.
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-custom btn-opacity me-3" href="{{ route('register') }}">Купить</a>
                            <a class="btn btn-custom btn-white"
                               href="{{ route('register', ['type' => 'seller']) }}">Продать</a>
                        </div>
                    </div>
                </div>
                <div class="home__head-photos">
                    <div class="home__head-photos-left">
                        <img src="{{ asset('/img/main-photo-left.png') }}" alt="{{ config('app.name') }}">
                    </div>
                    <div class="home__head-photos-center">
                        <img src="{{ asset('/img/main-photo-center.png') }}" alt="{{ config('app.name') }}">
                    </div>
                    <div class="home__head-photos-right">
                        <img src="{{ asset('/img/main-photo-right.png') }}" alt="{{ config('app.name') }}">
                    </div>
                </div>
                <div class="home__head-back"></div>
            </div>
            <div class="filter filter-left"></div>
        </div>


        <div class="home__models">
            <div class="container home__models-body">
                <div class="row">
                    <div class="col-12">
                        <h2>Модели</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-between w-100">
                    @foreach ($models as $model)
                        <a href="#" class="home__models-item">
                            <div class="home__models-item-img">
                                <img src="{{ asset($model->photo) }}" alt="{{ $model->username }}">
                            </div>
                            <div class="home__models-item-container">
                                {{ $model->username }}
                            </div>
                        </a>
                    @endforeach

                    <a href="#" class="home__models-link">
                        <img src="{{ asset('/img/icon/plus.svg') }}" alt="Plus">
                        <span>Все модели</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="home__models">
            <div class="container home__models-body opacity">
                <div class="row">
                    <div class="col-12">
                        <h2>Категории</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-between w-100">
                    @foreach ($categories as $category)
                        <a href="#" class="home__models-item">
                            <div class="home__models-item-img">
                                <img src="{{ asset($category->photo) }}" alt="{{ $category->title }}">
                            </div>
                            <div class="home__models-item-container">
                                {{ $category->title }}
                            </div>
                        </a>
                    @endforeach

                    <a href="#" class="home__models-link">
                        <img src="{{ asset('/img/icon/plus.svg') }}" alt="Plus">
                        <span>Все категории</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="home__models">
            <div class="container home__models-body opacity pt-5">
                <div class="row mt-4">
                    <div class="col-12 col-md-6">
                        <div class="home__models-place">
                            <div class="home__models-place-border">
                                <div>
                                    <img src="{{ asset('/img/main-sell.png') }}" alt="{{ config('app.name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 home__models-li">
                        <h2>Продать контент</h2>
                        <ul>
                            <li><img src="{{ asset('/img/icon/ok.svg') }}" alt="Plus"> Зарабатывайте, продавая свои фото и видео</li>
                            <li><img src="{{ asset('/img/icon/ok.svg') }}" alt="Plus"> Полностью анонимно и безопасно</li>
                            <li><img src="{{ asset('/img/icon/ok.svg') }}" alt="Plus"> Станьте звездой своего жанра</li>
                        </ul>
                        <a class="btn btn-custom btn-black"
                           href="{{ route('register', ['type' => 'seller']) }}">Продать</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="home__models">
            <div class="container home__models-body opacity reverse pt-5">
                <div class="row mt-4">
                    <div class="col-12 col-md-6">
                        <div class="home__models-place many">
                            <div class="home__models-place-borders">
                                <div>
                                    <img src="{{ asset('/img/main-buy-1.png') }}" alt="{{ config('app.name') }}">
                                </div>
                                <div>
                                    <img src="{{ asset('/img/main-buy-2.png') }}" alt="{{ config('app.name') }}">
                                </div>
                                <div class="no-bottom">
                                    <img src="{{ asset('/img/main-buy-3.png') }}" alt="{{ config('app.name') }}">
                                </div>
                                <div class="no-bottom">
                                    <img src="{{ asset('/img/main-buy-4.png') }}" alt="{{ config('app.name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 home__models-li">
                        <h2>Смотреть контент</h2>
                        <ul>
                            <li><img src="{{ asset('/img/icon/ok.svg') }}" alt="Plus"> Тысячи моделей, фото и видео на любой вкус</li>
                            <li><img src="{{ asset('/img/icon/ok.svg') }}" alt="Plus"> Множество фильтров для поиска контента</li>
                            <li><img src="{{ asset('/img/icon/ok.svg') }}" alt="Plus"> Эксклюзивный контент только для Вас</li>
                        </ul>
                        <a class="btn btn-custom btn-black"
                           href="{{ route('register') }}">Смотреть</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="home__security container">
            <h2>Безопасное и надежное место для торговли контентом </h2>
            <div class="text">
                Full Fetish - это надежный и безопасный онлайн-ресурс для тех, кто хочет приобрести или предложить контент,
                связанный с ногами. Зашифрованные серверы, соблюдение стандартов безопасности PCI и защита от внешних угроз.
            </div>
            <div class="d-flex justify-center gap-3">
                <a class="btn btn-custom me-2" href="{{ route('register', ['type' => 'seller']) }}">Продать</a>
                <a class="btn btn-custom btn-opacity" href="{{ route('register') }}">Купить</a>
            </div>
            <div class="filter"></div>
        </div>

        <div class="home__faq container">
            <div class="accordion" id="accordionFaq">
                @foreach ($faqs as $key => $faq)
                    <div class="accordion-item {{ $key === 0 ? 'active' : '' }}">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$key}}" aria-expanded="true" aria-controls="collapseOne">
                                <span>{{ $faq->question }}</span>
                            </button>
                        </h3>
                        <div id="collapse-{{$key}}" class="accordion-collapse collapse {{ $key === 0 ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
            integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
            async></script>
@endsection
