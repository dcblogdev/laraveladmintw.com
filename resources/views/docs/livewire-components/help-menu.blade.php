<x-doc-layout>
@section('title', 'Docs - Help Menu')
    <h1>Help Menu</h1>

    <p>The help menu is a great place to provide links for resources for your project. By default the help menu contains a link to these docs.</p>

    <p><img src="{{ url('images/docs/help-menu.png') }}" alt="Help Menu"></p>

    <p>The Livewire class loads the view:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use Illuminate\Contracts\View\View;

use function view;

class HelpMenu extends Base
{
    public function render(): View
    {
        return view(\'livewire.admin.help-menu\');
    }
}
    ') @endphp
    </code></pre>

    <p>The view:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    <div x-data="{ isOpen: false }">
        <div>
            <button @click="isOpen = !isOpen" class="px-2 pt-3 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>

        <div
            x-show.transition="isOpen"
            @click.away="isOpen = false"
            class="absolute w-48 origin-top-right right-14">
            <div class="relative z-30 bg-white border border-gray-100 shadow-xs rounded-b-md dark:bg-gray-700">
                <x-dropdown-link href="http://laraveladmintw.com/docs">Theme Docs</x-dropdown-link>
            </div>

        </div>
    </div>
    ') @endphp
    </code></pre>

    <p>The key part of the view is the drop down section:</p>

    <p>This links to the theme docs:</p>
    <pre><code class="language-php">
    @php echo htmlentities('
        <x-dropdown-link href="http://laraveladmintw.com/docs">Theme Docs</x-dropdown-link>
    ') @endphp
    </code></pre>

    <p>You can add named route like this:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
        <x-dropdown-link :href="route(\'admin.developer.reference\')">Developer References</x-dropdown-link>
    ') @endphp
    </code></pre>







</x-doc-layout>
