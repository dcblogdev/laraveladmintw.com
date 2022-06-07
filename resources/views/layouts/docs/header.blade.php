<div class="relative" x-data="{ open: false }">

    <div class="relative pt-6">

        <div class="max-w-screen-xl px-4 py-4 mx-auto border-b-2 sm:px-6 border-gray-50 dark:border-gray-800">

            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">

                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="{{ url('/') }}" class="text-4xl font-bold text-gray-800 dark:text-gray-200">
                          Admin<span class="text-primary dark:text-gray-200">TW</span>
                        </a>
                    </div>

                    <div class="flex items-center -mr-2 md:hidden">
                        <button type="button" @click="open = true" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500" id="main-menu" aria-label="Main menu" aria-haspopup="true">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="hidden md:block">
                    <a href="{{ url('/#features') }}" class="ml-10 font-medium text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-400">Features</a>
                    <a href="{{ url('docs') }}" class="ml-10 font-medium text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-400">Docs</a>
                </div>

            </nav>
        </div>

        <div class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden"
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        x-show="open">
            <div class="rounded-lg shadow-md">
                <div class="overflow-hidden bg-white rounded-lg shadow-xs dark:bg-gray-700" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">

                    <div class="flex items-center justify-between px-5 pt-4">

                        <div>
                            <a href="{{ url('/') }}" class="text-4xl font-bold text-gray-800 dark:text-gray-200">
                              Admin<span class="text-primary dark:text-gray-200">TW</span>
                            </a>
                        </div>

                        <div class="-mr-2">
                            <button type="button" @click="open = false" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500" aria-label="Close menu">
                                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                    </div>

                    <div class="px-2 pt-2 pb-3">
                        <a href="{{ url('/#features') }}" class="block px-3 py-2 mt-1 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-gray-200" role="menuitem">Features</a>
                        <a href="{{ url('docs') }}" class="block px-3 py-2 mt-1 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-gray-200" role="menuitem">Docs</a>
                        <a href="https://demo.laraveladmintw.com" target="_blank" class="block px-3 py-2 mt-1 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-gray-200" role="menuitem">Demo</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>