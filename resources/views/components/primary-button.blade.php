<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-custom short']) }}>
    {{ $slot }}
</button>
