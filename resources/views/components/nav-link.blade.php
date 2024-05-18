@props(['active' => 'false'])

@php
$classes = ($active ?? false)
            ? 'side-menu__item has-link active'
            : 'side-menu__item has-link';
@endphp

<li class="slide">

        <a wire:navigate {{ $attributes->merge(['class' => $classes ]) }} data-bs-toggle="slide"><i
                class="side-menu__icon fe fe-home"></i><span
                class="side-menu__label"> {{ $slot }}</span></a>
    </li>

</li>