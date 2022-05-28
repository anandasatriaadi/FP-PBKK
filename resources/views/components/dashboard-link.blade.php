@props(['active'])

@php
$classes = ($active ?? false)
            ? 'w-full font-thin uppercase text-sky-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-sky-100 border-r-4 border-sky-500 border-r-4 border-sky-500'
            : 'w-full font-thin uppercase text-gray-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-sky-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
