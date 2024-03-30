<x-docs-v4-layout>
@section('title', 'Docs - Tabs')
    <h1>Tabs</h1>

    <p>To create tabs first set a container using <code class="language-php">@php echo htmlentities('<x-tab name="item">')@endphp</code> provide the name. The name should match a tab.</p>
    <p>Next set the tabs headers using <code class="language-php">@php echo htmlentities('<x-tabs.header>')@endphp</code> </p>
    <p>Inside the header create a tab using <code class="language-php">@php echo htmlentities('<x-tabs.link name="details">Details</x-tabs.link>')@endphp</code></p>
    <p>create the tab content using <code class="language-php">@php echo htmlentities('<x-tabs.div name="details">The tab content</x-tabs.div>')@endphp</code></p>
    <p>Notice, this page uses the tabs blade components for all the examples in these docs.</p>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at:<br>
        <b>resources/views/components/tab.blade.php</b><br>
        <b>resources/views/components/tabs/div.blade.php</b><br>
        <b>resources/views/components/tabs/header.blade.php</b><br>
        <b>resources/views/components/tabs/link.blade.php</b></p>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">

            <x-tab name="company">

                <x-tabs.header>
                    <x-tabs.link name="details">Details</x-tabs.link>
                    <x-tabs.link name="company">Company</x-tabs.link>
                    <x-tabs.link name="team">Team</x-tabs.link>
                </x-tabs.header>

                <x-tabs.div name="details">
                    <p>Details</p>
                </x-tabs.div>

                <x-tabs.div name="company">
                    <p>Company</p>
                </x-tabs.div>

                <x-tabs.div name="team">
                    <p>Team</p>
                </x-tabs.div>

            </x-tab>

        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <x-tab name="company">

                        <x-tabs.header>
                            <x-tabs.link name="details">Details</x-tabs.link>
                            <x-tabs.link name="company">Company</x-tabs.link>
                            <x-tabs.link name="team">Team</x-tabs.link>
                        </x-tabs.header>

                        <x-tabs.div name="details">
                            <p>Details</p>
                        </x-tabs.div>

                        <x-tabs.div name="company">
                            <p>Company</p>
                        </x-tabs.div>

                        <x-tabs.div name="team">
                            <p>Team</p>
                        </x-tabs.div>

                    </x-tab>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

</x-docs-v4-layout>
