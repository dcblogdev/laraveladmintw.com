<x-doc-layout>
@section('title', 'Docs - Button')
    <h1>Button</h1>

    <p>The button blade component provides a styled button by default the button is a submit button a type can be provided.</p>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at <b>resources/views/components/button.blade.php</b></p>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            <x-button>Submit</x-button>
            <x-button type="button">Click</x-button>
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <x-button>Submit</x-button>
                    <x-button type="button">Click</x-button>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

</x-doc-layout>
