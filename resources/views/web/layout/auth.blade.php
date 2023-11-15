@extends('web.layout.layout')

@section('content')
    <div class="auth font-sans text-gray-900 antialiased">
        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">


            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="w-full flex justify-center mb-6">
                    <img
                            class="auth__logo"
                            src="{{ asset('/img/logo.png') }}"
                            alt="{{ config('app.name') }}"
                    >
                </div>

                @yield('layout-content')
            </div>
        </div>
    </div>
@endsection
