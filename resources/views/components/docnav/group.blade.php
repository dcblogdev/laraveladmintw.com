@props([
    'label' => '',
    'icon' => '',
    'route' => '',
    'open' => false
])

@php
if ($open == true) {
    $openState = '{ isOpen: true }';
} else {
    $openState = Route::is($route.'*') ? '{ isOpen: true }' : '{ isOpen: false }';
}
@endphp

<div class="block" x-data="{{ $openState }}">
    <div @click="isOpen = !isOpen" class="flex items-center justify-between px-2 py-2 text-gray-600 dark:text-gray-200 hover:bg-gray-100 hover:text-gray-900 cursor-pointer rounded-md">
        <div>
            @if ($icon)
                <i class="{{ $icon }} pr-1"></i>
            @endif
            <span class="font-bold">{{ $label }}</span>
        </div>
    </div>
    <div x-show="isOpen" class="text-sm">
        {{ $slot }}
    </div>
</div>