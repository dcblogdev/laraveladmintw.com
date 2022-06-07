<x-doc-layout>
@section('title', 'Docs - 2col')
    <h1>2 Col</h1>

    <p>The 2 col blade component provides a 2 column layout, using a grid internally. The left column uses 1 column where the right takes up 2 columns.</p>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at <b>resources/views/components/2col.blade.php</b></p>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            <x-2col>
                <x-slot name="left">
                    <p class="bg-primary text-white p-1">Left</p>
                </x-slot>
                <x-slot name="right">
                    <p class="bg-primary text-white p-1">Right</p>
                </x-slot>
            </x-2col>
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <x-2col>
                        <x-slot name="left">
                            <p class="bg-primary text-white p-1">Left</p>
                        </x-slot>
                        <x-slot name="right">
                            <p class="bg-primary text-white p-1">Right</p>
                        </x-slot>
                    </x-2col>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>




</x-doc-layout>
