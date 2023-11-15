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

    <div class="custom-tabs mt-6 mb-6 flex justify-start -space-x-px z-10">
        <a
                data-value="user"
                href="{{ route('register', ['type' => 'user']) }}"
                :class="{'cursor-default border-b-0 bg-white': tab === 1, 'text-gray-600 bg-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:outline-none }"
                class="custom-tab {{ $type === 'user' ? 'active' : '' }} block align-middle text-black text-base font-semibold leading-none uppercase rounded-tl-lg border border-gray-400 outline-none shadow-none">
            Пользователь
        </a>
        <a
                data-value="seller"
                href="{{ route('register', ['type' => 'seller'])  }}"
                :class="{'cursor-default border-b-0 bg-white': tab === 3, 'text-gray-600 bg-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:outline-none }"
                class="custom-tab {{ $type === 'seller' ? 'active' : '' }} block align-middle text-black text-base font-semibold leading-none uppercase border border-gray-400 rounded-tr-md outline-none shadow-none">
            Автор
        </a>
    </div>

    <form method="POST" action="{{ route('register') }}" class="auth__register" enctype="multipart/form-data">
    @csrf
        <input type="hidden" id="type" name="type" value="{{$type}}">

    <!-- Name -->
        <div>
            <x-input-label for="username" :value="'Логин'" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="'Email'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Пароль'" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="'Подтвердите пароль'" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Country -->
        <div class="mt-4">
            <x-input-label for="country" :value="'Страна'" />
            <x-text-input id="country" class="block mt-1 w-full" name="country" :value="old('country')" required />
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>

        <div id="app-files" class="{{ $type === 'seller' ? '' : 'd-none' }}">
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




        {{--        <!-- Referral -->--}}
        {{--        <div class="mt-4">--}}
        {{--            <x-input-label for="referral" :value="'Реферальный код'" />--}}
        {{--            <x-text-input id="referral" class="block mt-1 w-full" name="referral" :value="old('referral')" required />--}}
        {{--            <x-input-error :messages="$errors->get('referral')" class="mt-2" />--}}
        {{--        </div>--}}

        <div class="flex items-center justify-end mt-4">
            <a class="custom-link dark-style small" href="{{ route('login') }}">
                Уже есть аккаунт?
            </a>

            <x-primary-button class="ms-4">
                Регистрация
            </x-primary-button>
        </div>
    </form>
@endsection
