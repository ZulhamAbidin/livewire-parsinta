@props(['active' => false, 'icon' => ''])

@php
$classes = ($active) ? 'pc-item active' : 'pc-item';
@endphp

<li wire:navigate {{ $attributes->merge(['class' => $classes ]) }}>
    <a href="{{ $attributes->get('href', '#') }}" class="pc-link" data-icon="custom-{{ $icon }}">
        <span class="pc-micon">
            <svg class="pc-icon">
                <use xlink:href="#custom-{{ $icon }}"></use>
            </svg>
        </span>
        <span class="pc-mtext">{{ $slot }}</span>
    </a>
</li>