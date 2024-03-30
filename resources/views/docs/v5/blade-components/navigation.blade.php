<x-docs-v5-layout>
@section('title', 'Docs - Navigation')
    <h1>Navigation</h1>

    <p>Create a nav link using:<br>
        <code class="language-php">@php echo htmlentities('<x-nav.link route="admin.users" icon="fas fa-users">Users</x-nav.link>')@endphp</code>
    </p>
    <p>nav.link takes these options:</p>
    <ul>
        <li><b>route</b> - The named route. # can be used instead of a named route. Required</li>
        <li><b>icon</b> - A Font Awesome icon. Optional</li>
    </ul>

    <p>Create a nav select menu using:<br>
        <code class="language-php">@php echo htmlentities('<x-nav.group label="Settings" route="#" icon="fas fa-cogs">')@endphp</code>
    </p>
    <p>nav.group takes these options:</p>
    <ul>
        <li><b>label</b> - The name of the menu item. Optional</li>
        <li><b>route</b> - The named route. # can be used instead of a named route. Required</li>
        <li><b>icon</b> - A Font Awesome icon. Optional</li>
        <li><b>open</b> - A boolean (true or false) to set the menu to be open or closed. The default is false when not set. Optional</li>
    </ul>

    <p>Create a nav select menu link using:<br>
        <code class="language-php">@php echo htmlentities('<x-nav.group-item route="admin.settings" icon="far fa-circle">Settings</x-nav.group-item>')@endphp</code>
    </p>
    <p>nav.group takes these options:</p>
    <ul>
        <li><b>route</b> - The named route. # can be used instead of a named route. Required</li>
        <li><b>icon</b> - A Font Awesome icon. Optional</li>
    </ul>

    <p class="mt-10">Notice, this page uses the nav blade components for all the sidebar items in these docs.</p>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at:<br>
        <b>resources/views/components/nav/link.blade.php</b><br>
        <b>resources/views/components/tabs/group.blade.php</b><br>
        <b>resources/views/components/tabs/group-link.blade.php</b></p>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">

            <div class="bg-primary p-1">
                <x-nav.link route="#" icon="fas fa-home">Dashboard</x-nav.link>
                <x-nav.group label="Settings" route="#" icon="fas fa-cogs">
                    <x-nav.group-item route="#" icon="far fa-circle">Audit Trails</x-nav.group-item>
                    <x-nav.group-item route="#" icon="far fa-circle">Sent Emails</x-nav.group-item>
                </x-nav.group>
                <x-nav.link route="#" icon="fas fa-users">Users</x-nav.link>
            </div>

        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <div class="bg-primary p-1">
                        <x-nav.link route="admin" icon="fas fa-home">Dashboard</x-nav.link>
                        <x-nav.group label="Settings" route="admin.settings" icon="fas fa-cogs">
                            <x-nav.group-item route="admin.settings.audit-trails.index" icon="far fa-circle">Audit Trails</x-nav.group-item>
                            <x-nav.group-item route="admin.settings.sent-emails" icon="far fa-circle">Sent Emails</x-nav.group-item>
                        </x-nav.group>
                        <x-nav.link route="admin.users.index" icon="fas fa-users">Users</x-nav.link>
                    </div>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

</x-docs-v5-layout>
