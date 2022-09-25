@props(['active' => false])

@php
$classes = 'p-3 border-2 border-2 border-gray-800 text-center rounded-full';
if ($active) {
    $classes .= ' text-blue-700 font-bold bg-gray-300 ';
}
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
