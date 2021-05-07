@php
    $classes = 'text-gray-900 hover:text-blue-500';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>