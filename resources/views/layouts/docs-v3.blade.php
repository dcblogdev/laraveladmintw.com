<x-guest-layout>

@include('layouts.v3.header')

<div class="max-w-screen-xl px-4 py-4 mx-auto border-b-2 sm:px-6 border-gray-50 dark:border-gray-800">
    <div x-data="{ sidebarOpen: false }">
        <div class="flex min-h-screen">

            <!-- regular sidebar -->
            <div class="flex-none hidden w-full px-4 sidebar md:block md:w-60">
                @include('layouts.v3.navigation')
            </div>

            <!--sidebar on mobile-->
            <div x-show.transition.origin.top.left="sidebarOpen" class="min-w-full px-4 sidebar dark:bg-gray-700 md:hidden">
                @include('layouts.v3.navigation')
            </div>

            <div id="main" class="w-full">

                <div class="flex justify-between mb-5 bg-white dark:bg-gray-700">
                    <div class="flex">
                        <button @click.stop="sidebarOpen = !sidebarOpen" class="pl-1 pr-2 md:hidden focus:outline-none">
                            <svg class="w-6 text-gray-900 transition duration-150 ease-in-out dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div id="documentation" class="overflow-scroll sm:w-4/5 px-7 dark:text-gray-100">
                    {{ $slot ?? '' }}
                </div>
            </div>

        </div>

        <div class="flex justify-between p-4 mx-auto max-w-7xl">
            <p class="text-base text-gray-400">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>Built by <a href="https://dcblog.dev">David Carr</a> </p>
        </div>

    </div>
</div>

</x-guest-layout>