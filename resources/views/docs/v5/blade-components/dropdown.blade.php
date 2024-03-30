<x-docs-v5-layout>
@section('title', 'Docs - Dropdown')
    <h1>Dropdown</h1>

    <p>The dropdown blade component provides a styled dropdown menu. Its only option is label which sets the dropdown label.</p>
    <p>Inside the dropdown set its items using the dropdown-link component.</p>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at:<br>
            <b>resources/views/components/dropdown.blade.php</b><br>
            <b>resources/views/components/dropdown-link.blade.php</b></p>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">

            <div class="w-1/3">
                <x-dropdown label="Action">
                    <x-dropdown-link href="#">Edit</x-dropdown-link>
                    <x-dropdown-link href="#">Delete</x-dropdown-link>
                </x-dropdown>
            </div>

        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <x-dropdown label="Action">
                        <x-dropdown-link href="#">Edit</x-dropdown-link>
                        <x-dropdown-link href="#">Delete</x-dropdown-link>
                    </x-dropdown>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

</x-docs-v5-layout>
