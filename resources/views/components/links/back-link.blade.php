@php
    $classes = 'transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500';
@endphp 

<a {{ $attributes->merge(['class' => $classes]) }}>
    <x-icons.back-arrow /> 
    {{ $slot }}
</a>