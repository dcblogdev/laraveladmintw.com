<x-docs-v2-layout>
@section('title', 'Docs - Layouts')
    <h1>Layouts</h1>

    <p>AdminTW comes with the following layouts:</p>

    <ul>
        <li><a href='#app' class="text-primary">App</a></li>
        <li><a href='#guest' class="text-primary">Guest</a></li>
        <li><a href='#plain' class="text-primary">Plain</a></li>
        <li><a href='#raw' class="text-primary">Raw</a></li>
    </ul>

    <a name='app'><h2>App</h2></a>

    <p>The App layout is the main layout, Unless set all Livewire classes by default use this layout.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        <!DOCTYPE html>
        <html lang="{{ str_replace(\'_\', \'-\', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield(\'title\') - {{ config(\'app.name\', \'Laravel\') }}</title>
            <link rel="stylesheet" href="{{ asset("css/app.css") }}">
            @stack(\'styles\')
            <script src="{{ asset("js/app.js") }}" defer></script>
            @stack(\'scripts\')
            <livewire:styles/>
        </head>
        <body>
        ') @endphp
    </code></pre>

    <p>The sidebar is toggled using AlpineJs, by default sidebarOpen is set to false which hides the sidebar.</p>

    <p>All Sidebar links are located in a navigation file. The same contents are used for both a desktop sidebar and a mobile sidebar.</p>

    <pre><code class="language-php"> @php echo htmlentities('
    <div x-data="{ sidebarOpen: false }">
        <div class="flex min-h-screen">

            @auth
                <!-- regular sidebar -->
                <div class="flex-none hidden w-full px-4 sidebar md:block md:w-60 bg-primary dark:bg-gray-700">
                    @include(\'layouts.app.navigation\')
                </div>

                <!--sidebar on mobile-->
                <div x-show.transition.origin.top.left="sidebarOpen" class="min-w-full px-4 sidebar bg-primary dark:bg-gray-700 md:hidden">
                    @include(\'layouts.app.navigation\')
                </div>
            @endauth
    ') @endphp </code></pre>

    <p>Clicking the sidebar button will change the sidebarOpen to the oposite so its default state. In other words the first click will set to true which will show the sidebar and likewise would close the sidebar.</p>

    <p>Part of the header bar is where Livewire components are located.</p>

    <pre><code class="language-php"> @php echo htmlentities('
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
    ') @endphp </code></pre>

    <p>The full layout:</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        <!DOCTYPE html>
        <html lang="{{ str_replace(\'_\', \'-\', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield(\'title\') - {{ config(\'app.name\', \'Laravel\') }}</title>
            <link rel="stylesheet" href="{{ asset("css/app.css") }}">
            @stack(\'styles\')
            <script src="{{ asset("js/app.js") }}" defer></script>
            @stack(\'scripts\')
            <livewire:styles/>
        </head>
        <body>

        <div x-data="{ sidebarOpen: false }">
            <div class="flex min-h-screen">

                @auth
                    <!-- regular sidebar -->
                    <div class="flex-none hidden w-full px-4 sidebar md:block md:w-60 bg-primary dark:bg-gray-700">
                        @include(\'layouts.app.navigation\')
                    </div>

                    <!--sidebar on mobile-->
                    <div x-show.transition.origin.top.left="sidebarOpen" class="min-w-full px-4 sidebar bg-primary dark:bg-gray-700 md:hidden">
                        @include(\'layouts.app.navigation\')
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
                        {{ $slot ?? \'\' }}
                    </div>
                </div>

            </div>

            <div class="flex justify-between p-5 text-xs bg-white dark:bg-gray-900 dark:text-gray-300">
                <div>Copyright &copy; {{ date(\'Y\') }} {{ config(\'admin.name\') }}</div>
            </div>

        </div>

        <livewire:scripts />
        </body>
        </html>
        ') @endphp
    </code></pre>

    <a name='guest'><h2>Guest</h2></a>

    <p>The Guest layout contains a starter HTML structure and loads the compiled app.css and app.js file.</p>

    <p>Set a title by calling section in a view. </p>
    <pre><code class="language-php"> @php echo htmlentities('@section(\'title\', \'Log In\')') @endphp </code></pre>

    <p>Set the page to have a gray text, when in dark mode set the background to gray.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        <!DOCTYPE html>
        <html lang="{{ str_replace(\'_\', \'-\', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <title>@yield(\'title\') - {{ config(\'app.name\', \'Laravel\') }}</title>
                <link rel="stylesheet" href="{{ mix("css/app.css") }}">
                <script src="{{ mix("js/app.js") }}" defer></script>
            </head>
            <body class="text-gray-900 dark:bg-gray-900">
                    {{ $slot }}
            </body>
        </html>
        ') @endphp
    </code></pre>

    <a name='plain'><h2>Plain</h2></a>

    <p>The Plain layout contains a starter HTML structure and loads the compiled app.css and app.js file as well as styles and scripts stacks to inject additional code into.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        <!DOCTYPE html>
        <html lang="{{ str_replace(\'_\', \'-\', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <link rel="stylesheet" href="{{ mix("css/app.css") }}">
                @stack("styles")
                <script src="{{ mix("js/app.js") }}" defer></script>
                @stack("scripts")
            </head>
            <body>
                {{ $slot }}
            </body>
        </html>') @endphp
    </code></pre>

    <a name='raw'><h2>Raw</h2></a>

    <p>Raw is a completly empty file apart from
    <pre><code class="language-php">
        @php echo htmlentities('{{ $slot }}') @endphp
    </code></pre>
    this allows it to be used in a completly unstylled manor. It containts no markup at all. Perfect if you want to output say XML or JSON.</p>

</x-docs-v2-layout>
