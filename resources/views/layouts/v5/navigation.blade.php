<button @click.stop="sidebarOpen = !sidebarOpen" class="pt-4 pl-1 pr-2 md:hidden focus:outline-none">
    <svg class="w-6 text-gray-900 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
</button>

<div class="my-5">

<x-docnav.group label="Getting Started" route="docs.v5.introduction" open="true">
    <x-docnav.group-item route="docs.v5.introduction">Introduction</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.requirements">Requirements</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.installation">Installation</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.questions">Questions and Issues</x-docnav.group-item>
</x-docnav.group>

<x-docnav.group label="Basic Usage" route="docs.v5.introduction" open="true">
    <x-docnav.group-item route="docs.v5.basic-usage.authentication">Authentication</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.basic-usage.configuration">Configuration</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.basic-usage.layouts">Layouts</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.basic-usage.middleware">Middleware</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.basic-usage.service-providers">Service Providers</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.basic-usage.helpers">Helpers</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.basic-usage.tests">Tests</x-docnav.group-item>
</x-docnav.group>

<x-docnav.group label="Console Commands" route="docs.v5.styles" open="true">
    <x-docnav.group-item route="docs.v5.console-commands.clearlog">Clear Log</x-docnav.group-item>
</x-docnav.group>

<x-docnav.group label="Blade Components" route="docs.v5.introduction" open="true">
    <x-docnav.group-item route="docs.v5.blade-components.2col">2 Col</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.blade-components.auth-card">Auth Card</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.blade-components.button">Button</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.blade-components.dropdown">Dropdown</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.blade-components.forms">Forms</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.blade-components.modal">Modal</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.blade-components.navigation">Navigation</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.blade-components.tabs">Tabs</x-docnav.group-item>
</x-docnav.group>

<x-docnav.group label="Livewire Components" route="docs.v5.styles" open="true">
    <x-docnav.group-item route="docs.v5.livewire-components.audit-trails">Audit Trails</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.livewire-components.dashboard">Dashboard</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.livewire-components.help-menu">Help Menu</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.livewire-components.notifications">Notifications</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.livewire-components.roles">Roles & Permissions</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.livewire-components.settings">Settings</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.livewire-components.user-menu">User Menu</x-docnav.group-item>
    <x-docnav.group-item route="docs.v5.livewire-components.users">Users</x-docnav.group-item>
</x-docnav.group>

<x-docnav.group label="Styles" route="docs.v5.styles" open="true">
    <x-docnav.group-item route="docs.v5.styles">SASS Styles</x-docnav.group-item>
</x-docnav.group>

</div>
