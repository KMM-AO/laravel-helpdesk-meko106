@props(['active'])

@php
$classes= 'text-blue-900 hover:text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
