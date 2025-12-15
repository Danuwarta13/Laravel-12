@props(['href', 'current' => false, 'ariaCurrent' => false])

@php
if ($current) {
$clases = 'bg-gray-900 text-white';
$ariaCurrent = 'Page';
} else {
$clases = 'text-gray-300 hover:bg-white/5 hover:text-white';
}
@endphp

<a href="{{ $href }}" {{ $attributes->merge([ 'class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $clases, 'arial-current' => $ariaCurrent]) }}>{{ $slot }}</a>
