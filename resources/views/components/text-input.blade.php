@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'app__input border-gray-300 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
