<x-docs-v5-layout>
@section('title', 'Docs - User Menu')
    <h1>User Menu</h1>

    <p>The user menu is a great place to provide quick links for user to access their account and logout.</p>

    <p><img src="{{ url('images/docs/user-menu.png') }}" alt="User Menu"></p>

    <p>The Livewire class loads the view, Also has a listener for a `refreshUserMenu` event. When this event is executed the component is reloaded. This allows making user changes and having the user menu updated automatically.</p>

<pre><code class="language-php">
@php echo htmlentities('
<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class UserMenu extends Component
{
    protected $listeners = [\'refreshUserMenu\' => \'$refresh\'];

    public function render(): View
    {
        return view(\'livewire.admin.users.user-menu\');
    }
}

') @endphp
    </code></pre>

    <p>The view:</p>

<pre><code class="language-php">
@php echo htmlentities('
@auth
    <div x-data="{ isOpen: false }">
        <div>
            <button @click="isOpen = !isOpen" class="pt-3 text-gray-900 focus:outline-none">
                @if (storage_exists(user()->image))
                    <img src="{{ storage_url(user()->image) }}" width="30" class="w-6 h-6 rounded-full">
                @else
                    {{ user()->name }}
                @endif
            </button>
        </div>

        <div
            x-show.transition="isOpen"
            @click.away="isOpen = false"
            class="absolute right-0 w-48 mt-1 mr-3 origin-top-right">
            <div class="relative z-30 bg-white border border-gray-100 shadow-xs rounded-b-md dark:bg-gray-700">

                @can(\'view_users_profiles\')
                    <x-dropdown-link :href="route(\'admin.users.show\', [\'user\' => user()->id])">View Profile</x-dropdown-link>
                @endcan

                @can(\'edit_own_account\')
                    <x-dropdown-link :href="route(\'admin.users.edit\', [\'user\' => user()->id])">Edit Account</x-dropdown-link>
                @endcan

                <hr>

                <a href="{{ route(\'logout\') }}"
                   onclick="event.preventDefault(); document.getElementById(\'logout-form\').submit();"
                   class="block px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-400">Log
                    out</a>
                <form id="logout-form" action="{{ route(\'logout\') }}" method="post">
                    {{ csrf_field() }}
                </form>

            </div>

        </div>
    </div>
@endauth
') @endphp
</code></pre>

</x-docs-v5-layout>
