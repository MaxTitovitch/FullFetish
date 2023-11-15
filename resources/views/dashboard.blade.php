@extends('web.layout.profile')

@section('title')
    <title>Панель управления — {{ config('app.name') }}</title>
@endsection

@section('layout-content')
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Панель управления') }}
        </h1>
    </x-slot>

    <div class="">
        <div class=" mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Вы вошли в систему!") }}
                </div>
            </div>
        </div>
    </div>
@endsection
