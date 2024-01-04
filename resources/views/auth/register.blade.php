@extends('web.layout.auth')

@php
    $type = Request::get("type");
    $type = $type === 'seller' ? $type : 'user';
@endphp

@section('title')
    <title>Регистрация — {{ config('app.name') }}</title>
@endsection

@section('layout-content')

    <script>
      function showImage() {
        return {
          showPreview(event) {
            if (event.target.files.length > 0) {
              let src = URL.createObjectURL(event.target.files[0]);
              let preview = event.target.closest('label')?.querySelector(".preview");
              preview.src = src;
              preview.style.display = "block";
            }
          }
        }
      }
    </script>

    <h1 class="mb-4">Регистрация</h1>

    <div class="d-flex">
        <div class="custom-tabs mb-4">
            <a
                    data-value="seller"
                    href="{{ route('register', ['type' => 'seller'])  }}"
                    class="custom-tab {{ $type === 'seller' ? 'active' : '' }}">
                Модель
            </a>
            <a
                    data-value="user"
                    href="{{ route('register', ['type' => 'user']) }}"
                    class="custom-tab {{ $type === 'user' ? 'active' : '' }}">
                Покупатель
            </a>
        </div>
    </div>

    <form method="POST" action="{{ route('register') }}" class="auth__register" enctype="multipart/form-data">
    @csrf
        <input type="hidden" id="type" name="type" value="{{$type}}">

        <div class="form-group mb-4">
            <label for="username" class="mb-2">Имя пользователя</label>
            <input type="text" class="form-control" name="username" id="username" value="{{ old('username')}}" required autofocus autocomplete="username">

            @if($errors->get('username')[0] ?? false)
                <div id="usernameHelp" class="form-text text-danger mt-2">{{ $errors->get('username')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="form-group mb-4">
            <label for="email" class="mb-2">Адрес электронной почты</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email')}}" required autofocus autocomplete="username">

            @if($errors->get('email')[0] ?? false)
                <div id="emailHelp" class="form-text text-danger mt-2">{{ $errors->get('email')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="form-group mb-4">
            <div class="password-changer">
                <label for="password" class="mb-2">Пароль</label>
                <div class="password-changer-button" data-id="password">
                    <div class="to-hide">
                        <i class="bi bi-eye-slash-fill"></i>
                        <span>Скрыть</span>
                    </div>
                    <div class="to-show">
                        <i class="bi bi-eye-fill"></i>
                        <span>Показать</span>
                    </div>
                </div>
            </div>
            <input type="password" class="form-control" name="password" id="password" value="{{ old('password')}}" required autofocus autocomplete="password">

            @if($errors->get('password')[0] ?? false)
                <div id="passwordHelp" class="form-text text-danger mt-2">{{ $errors->get('password')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="form-group mb-4">
            <div class="password-changer">
                <label for="password_confirmation" class="mb-2">Подтвердите пароль</label>
                <div class="password-changer-button" data-id="password_confirmation">
                    <div class="to-hide">
                        <i class="bi bi-eye-slash-fill"></i>
                        <span>Скрыть</span>
                    </div>
                    <div class="to-show">
                        <i class="bi bi-eye-fill"></i>
                        <span>Показать</span>
                    </div>
                </div>
            </div>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation')}}" required autofocus>

            @if($errors->get('password_confirmation')[0] ?? false)
                <div id="passwordConfirmationHelp" class="form-text text-danger mt-2">{{ $errors->get('password_confirmation')[0] ?? '' }}</div>
            @endif
        </div>

        <div class="form-group mb-4">
            <label for="country" class="mb-2">Страна</label>
            <div>
                <input type="text" class="form-control" name="country" id="country" value="{{ old('country')}}" required autofocus>

                @if($errors->get('country')[0] ?? false)
                    <div id="countryHelp" class="form-text text-danger mt-2">{{ $errors->get('country')[0] ?? '' }}</div>
                @endif
            </div>
        </div>



        <div id="app-files" style="visibility: hidden; position: fixed" class="{{ $type === 'seller' ? '' : 'd-none' }}">
            <!-- Country -->
            <div class="mt-4">
                <x-input-label for="photo_passport" :value="'Фото паспорта'" />
                <div class="mb-4 mt-2">
                    <label class="block" x-data="showImage()">
                        <span class="sr-only">Выбрать файл</span>
                        <input type="file" id="photo_passport" name="photo_passport" @change="showPreview(event)"
                               class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        <img class="preview object-cover h-32 mt-2 w-60">
                    </label>
                    @error('image')
                    <div class="flex items-center text-sm text-red-600">
                        {{ $message }}

                    </div>
                    @enderror
                </div>
            </div>

            <!-- Country -->
            <div class="mt-4">
                <x-input-label for="photo_passport_selfie" :value="'Селфи с паспортом'" />
                <div class="mb-4 mt-2">
                    <label class="block" x-data="showImage()">
                        <span class="sr-only">Выбрать файл</span>
                        <input type="file" id="photo_passport_selfie" name="photo_passport_selfie" @change="showPreview(event)"
                               class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        <img class="preview object-cover h-32 mt-2 w-60">
                    </label>
                    @error('image')
                    <div class="flex items-center text-sm text-red-600">
                        {{ $message }}

                    </div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="form-check policy">
            <input class="form-check-input" type="checkbox" checked required id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Согласиться с <a href="#" target="_blank">нашими условиями использования</a> и <a href="#" target="_blank">политикой конфиденциальности</a>
            </label>
        </div>


        <div class="flex items-center justify-end mt-5 mb-4">
            <button class="btn btn-custom btn-black no-border" type="submit">Зарегистрироваться</button>
        </div>

        <div class=" mb-4">
            <span>
                Уже есть аккаунт?
            </span>
            <a class="small" href="{{ route('login') }}">
                Войти
            </a>
        </div>
    </form>
@endsection
