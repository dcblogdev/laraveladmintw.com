<x-guest-layout>
    @section('title', 'Laravel Starter Kit | Laravel TALL Theme')
    @include('layouts.v5.header')

    <main class="max-w-screen-xl px-4 mx-auto mb-10 sm:mt-12 sm:px-6 md:mt-15">
        <div class="text-center">

            <a href="{{ url('/') }}">
                <h2 class="mt-10 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                    <span class="dark:text-sky-100">Laravel</span>
                    <span class="text-primary">Starter Kit</span>
                </h2>
            </a>

            <p class="max-w-md mx-auto mt-3 text-base text-gray-700 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                <span class="mt-2 block text-xl">Built on Laravel TALL stack</span>
                <span class="block text-sm">(Tailwind, Alpine.js, Laravel, and Livewire)</span>
            </p>

            <p class="mt-5">
                <a href="{{ url('v5/docs') }}" class="px-4 py-4 text-xl text-gray-100 rounded-md bg-primary">Get Started</a>
                <a href="https://github.com/dcblogdev/laravel-admintw" class="px-4 py-4 text-xl text-gray-100 rounded-md bg-primary">GitHub</a>
            </p>

        </div>
    </main>

    <div class="px-4 mx-auto mb-10 max-w-7xl">
        <picture>
            <source srcset="{{ url('images/docsv5/settings-dark.png') }}" media="(prefers-color-scheme: dark)">
            <img class="rounded-lg" src="{{ url('images/docsv5/settings-light.png') }}" alt="Laravel Admin Theme - Laravel AdminTW">
        </picture>
    </div>


    <div class="px-8 py-4 mx-auto max-w-7xl">
        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Laravel AdminTW is minimal Livewire theme styled with TailwindCSS.</p>
        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Laravel AdminTW supports both light and dark mode based on the users OS.</p>
        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Provided are blade and Laravel Livewire components for common layout / UI elements and a complete test suite (Pest PHP).</p>

        <div id="features"></div>

        <div class="mt-10">

            <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">2FA</h3>

            <picture>
                <source srcset="{{ url('images/2fa-setup-dark.png') }}" media="(prefers-color-scheme: dark)">
                <img class="border border-white" src="{{ url('images/2fa-setup.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
            </picture>

            <p class="text-gray-900 dark:text-gray-200">Add additional security to your account using two-factor authentication.</p>
            <p class="text-gray-900 dark:text-gray-200"><b>Why do I need this?</b></p>
            <p class="text-gray-900 dark:text-gray-200">Passwords can get stolen – especially if you use the same password for multiple sites. Adding Two-Step Verification means that even if your password gets stolen, your account will remain secure.</p>

        </div>

        <div class="mt-10">

            <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Audit Trails</h3>

            <picture>
                <source srcset="{{ url('images/docsv5/audit-trails-dark.png') }}" media="(prefers-color-scheme: dark)">
                <img class="border border-white" src="{{ url('images/docsv5/audit-trails-light.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
            </picture>

            <p class="text-gray-900 dark:text-gray-200">Record ever action, then review all actions in the audit trail.</p>
            <p class="text-gray-900 dark:text-gray-200">Filter by user, action, type or a date range.</p>

        </div>

        <div class="mt-10">

            <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Settings</h3>

            <picture>
                <source srcset="{{ url('images/docsv5/settings-dark.png') }}" media="(prefers-color-scheme: dark)">
                <img class="border border-white" src="{{ url('images/docsv5/settings-light.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
            </picture>

            <p class="text-gray-900 dark:text-gray-200">From the settings change the following:</p>
            <p class="text-gray-900 dark:text-gray-200">Application Name</p>
            <p class="text-gray-900 dark:text-gray-200">Force 2FA for all users</p>
            <p class="text-gray-900 dark:text-gray-200">Lock application down to set IP addresses</p>

        </div>


        <div class="mt-10">

            <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Roles</h3>

            <picture>
                <source srcset="{{ url('images/docsv5/roles-dark.png') }}" media="(prefers-color-scheme: dark)">
                <img class="border border-white" src="{{ url('images/docsv5/roles-light.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
            </picture>

            <p class="text-gray-900 dark:text-gray-200">Laravel AdminTW comes with role based permissions.</p>
            <p class="text-gray-900 dark:text-gray-200">Set what users can and cannot do.</p>
            <p class="text-gray-900 dark:text-gray-200">Assign multiple roles to a user.</p>

        </div>

        <div class="mt-10">
            <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Permissions</h3>

            <picture>
                <source srcset="{{ url('images/docsv5/permissions-dark.png') }}" media="(prefers-color-scheme: dark)">
                <img class="border border-white" src="{{ url('images/docsv5/permissions-light.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
            </picture>

            <p class="text-gray-900 dark:text-gray-200">Restrict permissions per role</p>
            <p class="text-gray-900 dark:text-gray-200">Each permission is grouped by "module"</p>

        </div>


        <div class="mt-10">

            <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Users</h3>

            <picture>
                <source srcset="{{ url('images/docsv5/users-dark.png') }}" media="(prefers-color-scheme: dark)">
                <img class="border border-white" src="{{ url('images/docsv5/users-light.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
            </picture>

            <p class="text-gray-900 dark:text-gray-200">Laravel AdminTW comes with multiple users support, you can add as many users as needed.</p>
            <p class="text-gray-900 dark:text-gray-200">Users can be invited to via an email invitation.</p>
            <p class="text-gray-900 dark:text-gray-200">Users have their own profile which shows their activity.</p>
            <p class="text-gray-900 dark:text-gray-200">Users can be locked down to set IP addresses. Meaning they would only be able to login from those IP addresses listed in the settings.</p>

        </div>


        <div class="mt-10">

            <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">Tests</h3>

            <picture>
                <img class="border border-white" src="{{ url('images/docsv5/tests.png') }}" alt="Laravel Admin Two Factor Authentication Setup">
            </picture>

            <p class="text-gray-900 dark:text-gray-200">Laravel AdminTW comes with a suite of tests using PestPHP.</p>
            <p class="text-gray-900 dark:text-gray-200">There are 206 tests out the box that ensured the application works as expected.</p>

        </div>


    </div>



    <div class="mt-10 bg-white dark:bg-gray-900 dark:text-gray-200">

        <div class="flex justify-between p-4 mx-auto max-w-7xl">
            <p class="text-base text-gray-400">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>Built by <a href="https://dcblog.dev">David Carr</a> </p>
        </div>

    </div>

</x-guest-layout>
