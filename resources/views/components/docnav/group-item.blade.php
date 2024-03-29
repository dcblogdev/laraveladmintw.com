@props([
    'route' => '',
    'icon' => ''
])
<a href="{{ route($route) }}" class="block py-2 px-4 {{ url()->current() == route($route) ? 'bg-gray-100 text-gray-900' : 'text-gray-700 dark:text-gray-200' }} hover:bg-gray-100 hover:text-gray-900 rounded-md">
    @if ($icon)
        <i class="{{ $icon }} pr-1"></i>
    @endif
    <span>{{ $slot }}</span>
</a>
