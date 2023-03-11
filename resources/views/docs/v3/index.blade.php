<x-guest-layout>
    @section('title', 'Free Laravel TALL Theme | Laravel Starter Kit')
    @include('layouts.v3.header')

    <main class="max-w-screen-xl px-4 mx-auto mb-10 sm:mt-12 sm:px-6 md:mt-15">
        <div class="text-center">

            <a href="{{ url('/') }}">
                <h2 class="mt-10 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                    <span class="dark:text-gray-100">FREE Laravel</span>
                    <span class="text-primary">Admin Theme</span>
                </h2>
            </a>

            <p class="max-w-md mx-auto mt-3 text-base text-gray-700 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                <span class="block text-xl">AdminTW is a Laravel Starter Kit</span>
                <span class="mt-2 block text-xl">Built on Laravel TALL stack</span>
                <span class="block text-sm">(Tailwind, Alpine.js, Laravel, and Livewire)</span>
            </p>

            <p class="mt-5">
                <a href="{{ url('v3/docs') }}" class="px-4 py-4 text-xl text-gray-100 rounded-md bg-primary">Get Started</a>
                <a href="https://github.com/dcblogdev/laravel-admintw" class="px-4 py-4 text-xl text-gray-100 rounded-md bg-primary">GitHub</a>
            </p>

        </div>
    </main>

    <div class="px-4 mx-auto mb-10 max-w-7xl">
        <picture>
            <source srcset="{{ url('images/admin-tw-settings.png') }}" media="(prefers-color-scheme: dark)">
            <img class="rounded-lg" src="{{ url('images/v3/admintw.png') }}" alt="Laravel Admin Theme - Laravel AdminTW">
        </picture>
    </div>


    <div class="px-8 py-4 mx-auto max-w-7xl">
        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Laravel AdminTW is minimal Livewire theme styled with TailwindCSS.</p>
        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Laravel AdminTW supports both light and dark mode based on the users OS.</p>
        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Provided are blade and Laravel Livewire components for common layout / UI elements and a complete test suite (Pest PHP).</p>

        <div id="features"></div>

        <div class="mt-10 flex flex-wrap">
            <div class="w-5/6 p-6 sm:w-1/2">
                <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">2FA</h3>
                <p class="text-gray-900 dark:text-gray-200">Add additional security to your account using two-factor authentication.</p>
                <p class="text-gray-900 dark:text-gray-200"><b>Why do I need this?</b></p>
                <p class="text-gray-900 dark:text-gray-200">Passwords can get stolen – especially if you use the same password for multiple sites. Adding Two-Step Verification means that even if your password gets stolen, your account will remain secure.</p>
            </div>
            <div class="w-full p-6 sm:w-1/2">
                <picture>
                    <source srcset="{{ url('images/2fa-setup-dark.png') }}" media="(prefers-color-scheme: dark)">
                    <img class="border border-white" src="{{ url('images/2fa-setup.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
                </picture>
            </div>
        </div>

        <div class="mt-10 flex flex-wrap">
            <div class="w-full p-6 sm:w-1/2">
                <picture>
                    <source srcset="{{ url('images/dashboard-dark.png') }}" media="(prefers-color-scheme: dark)">
                    <img class="border border-white" src="{{ url('images/dashboard.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
                </picture>
            </div>
            <div class="w-5/6 p-6 sm:w-1/2">
                <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Dashboard</h3>
                <p class="text-gray-900 dark:text-gray-200">The dashboard contains a single card ready to be customised as needed.</p>
            </div>
        </div>


        <div class="mt-10 flex flex-wrap">
            <div class="w-5/6 p-6 sm:w-1/2">
                <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Audit Trails</h3>
                <p class="text-gray-900 dark:text-gray-200">Record ever action, then review all actions in the audit trail.</p>
                <p class="text-gray-900 dark:text-gray-200">Filter by user, action, type or a date range.</p>
            </div>
            <div class="w-full p-6 sm:w-1/2">
                <picture>
                    <source srcset="{{ url('images/audit-trails-dark.png') }}" media="(prefers-color-scheme: dark)">
                    <img class="border border-white" src="{{ url('images/audit-trails.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
                </picture>
            </div>
        </div>

        <div class="mt-10 flex flex-wrap">
            <div class="w-full p-6 sm:w-1/2">
                <picture>
                    <source srcset="{{ url('images/settings-dark.png') }}" media="(prefers-color-scheme: dark)">
                    <img class="border border-white" src="{{ url('images/settings.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
                </picture>
            </div>
            <div class="w-5/6 p-6 sm:w-1/2">
                <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Settings</h3>
                <p class="text-gray-900 dark:text-gray-200">From the settings change the following:</p>
                <ul class="pl-5">
                    <li class="pt-5 list-disc">Application Name</li>
                    <li class="pt-5 list-disc">Force 2FA for all users</li>
                    <li class="pt-5 list-disc">Change application logo for light and dark mode</li>
                    <li class="pt-5 list-disc">Change login logo for light and dark mode</li>
                    <li class="pt-5 list-disc">Lock application down to set IP addresses</li>
                </ul>
            </div>
        </div>


        <div class="mt-10 flex flex-wrap">
            <div class="w-5/6 p-6 sm:w-1/2">
                <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Roles</h3>
                <p class="text-gray-900 dark:text-gray-200">Laravel AdminTW comes with role based permissions.</p>
                <p class="text-gray-900 dark:text-gray-200">Set what users can and cannot do.</p>
                <p class="text-gray-900 dark:text-gray-200">Assign multiple roles to a user.</p>
            </div>
            <div class="w-full p-6 sm:w-1/2">
                <picture>
                    <source srcset="{{ url('images/roles-dark.png') }}" media="(prefers-color-scheme: dark)">
                    <img class="border border-white" src="{{ url('images/roles.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
                </picture>
            </div>
        </div>


        <div class="mt-10 flex flex-wrap">
            <div class="w-full p-6 sm:w-1/2">
                <picture>
                    <source srcset="{{ url('images/users-dark.png') }}" media="(prefers-color-scheme: dark)">
                    <img class="border border-white" src="{{ url('images/users.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
                </picture>
            </div>
            <div class="w-5/6 p-6 sm:w-1/2">
                <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Users</h3>
                <p class="text-gray-900 dark:text-gray-200">Laravel AdminTW comes with multiple users support, you can add as many users as needed.</p>
                <p class="text-gray-900 dark:text-gray-200">Users can be invited to via an email invitation.</p>
                <p class="text-gray-900 dark:text-gray-200">Users have their own profile which shows their activity.</p>
                <p class="text-gray-900 dark:text-gray-200">Users can be locked down to set IP addresses. Meaning they would only be able to login from those IP addresses listed in the settings.</p>
            </div>
        </div>


        <div class="mt-10 flex flex-wrap">
            <div class="w-5/6 p-6 sm:w-1/2">
                <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Tests</h3>
                <p class="text-gray-900 dark:text-gray-200">Laravel AdminTW comes with a suite of tests using PestPHP.</p>
                <p class="text-gray-900 dark:text-gray-200">There are 74 tests out the box that ensured the application works as expected.</p>
            </div>
            <div class="w-full p-6 sm:w-1/2">
                <picture>
                    <img class="border border-white" src="{{ url('images/v3/tests.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
                </picture>
            </div>
        </div>


    </div>



    <div class="mt-10 bg-white dark:bg-gray-900 dark:text-gray-200">

        <div class="flex justify-between p-4 mx-auto max-w-7xl">
            <p class="text-base text-gray-400">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>Built by <a href="https://dcblog.dev">David Carr</a> </p>
        </div>

    </div>

</x-guest-layout>
