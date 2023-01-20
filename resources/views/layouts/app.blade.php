<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.usefathom.com/script.js" data-site="PLJPRXLJ" defer></script>
    @stack('scripts')
    <livewire:styles/>
</head>
<body>

<div x-data="{ sidebarOpen: false }">
    <div class="flex min-h-screen">

        @auth
            <!-- regular sidebar -->
            <div class="flex-none hidden w-full px-4 sidebar md:block md:w-60 bg-primary dark:bg-gray-700">
                @include('layouts.app.navigation')
            </div>

            <!--sidebar on mobile-->
            <div x-show.transition.origin.top.left="sidebarOpen" class="min-w-full px-4 sidebar bg-primary dark:bg-gray-700 md:hidden">
                @include('layouts.app.navigation')
            </div>
        @endauth

        <div id="main" class="w-full bg-gray-100 dark:bg-gray-600">

            @auth
            <div class="flex justify-between px-2 py-1 mb-5 bg-white dark:bg-gray-700">

                <div class="flex">
                    <button @click.stop="sidebarOpen = !sidebarOpen" class="pl-1 pr-2 md:hidden focus:outline-none">
                        <svg class="w-6 text-gray-900 transition duration-150 ease-in-out dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                        </svg>
                    </button>

                    <livewire:admin.search />
                </div>

                <div class="flex">
                    <livewire:admin.notifications-menu />
                    <livewire:admin.help-menu />
                    <livewire:admin.users.user-menu />
                </div>
            </div>
            @endauth

            <div class="py-5 px-7">
                {{ $slot ?? '' }}
            </div>
        </div>

    </div>

    <div class="flex justify-between p-5 text-xs bg-white dark:bg-gray-900 dark:text-gray-300">
        <div>{{ __('Copyright') }} &copy; {{ date('Y') }} {{ config('admin.name') }}</div>
    </div>

</div>

<livewire:scripts />
</body>
</html>