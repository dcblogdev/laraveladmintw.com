<x-docs-v4-layout>
@section('title', 'Docs - Modal')
    <h1>Modal</h1>

    <p>To create a modal use the modal container:<br>
        <code class="language-php">@php echo htmlentities('<x-modal> ... </x-modal>')@endphp</code>
    </p>

    <p>Inside the container:</p>

    <p>Set the trigger to open the modal:</p>
    <p><pre><code class="language-php">@php echo htmlentities('
    <x-slot name="trigger">
        <button @click="on = true" class="text-primary">
            Open Modal
        </button>
    </x-slot>
    ')@endphp</code></pre></p>

    <p>Set the modal title:</p>
    <p><code class="language-php">@php echo htmlentities('<x-slot name="title">The Modal Title</x-slot>')@endphp</code></p>

    <p>Set the modal body:</p>
    <p><code class="language-php">@php echo htmlentities('<x-slot name="content">The Body</x-slot>')@endphp</code></p>

    <p>Set the modal footer:</p>
    <p><code class="language-php">@php echo htmlentities('<x-slot name="footer">The Footer</x-slot>')@endphp</code></p>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at:<br>
        <b>resources/views/components/modal.blade.php</b></p>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">

            <x-modal>
                <x-slot name="trigger">
                    <button @click="on = true" class="text-primary">Open Modal using a text style</button>
                    <button @click="on = true" class="btn btn-primary">Open Modal using a button style</button>
                </x-slot>

                <x-slot name="title">The Modal Title</x-slot>

                <x-slot name="content">
                    <p>The Body</p>

                    <p>In Livewire components use the following code to fire a close event. This should be in the Livewire class.</p>
                    <pre><code class="language-php">$this->dispatchBrowserEvent('close-modal');</code></pre>

                </x-slot>

                <x-slot name="footer">
                    <button class="btn btn-primary" @click="on = false">Close</button>
                </x-slot>
            </x-modal>

        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <x-modal>
                        <x-slot name="trigger">
                            <x-slot name="trigger">
                                <button @click="on = true" class="text-primary">Open Modal using a text style</button>
                                <button @click="on = true" class="btn btn-primary">Open Modal using a button style</button>
                            </x-slot>
                        </x-slot>

                        <x-slot name="title">The Modal Title</x-slot>

                        <x-slot name="content">
                            <p>The Body</p>
                        </x-slot>

                        <x-slot name="footer">
                            <button class="btn btn-primary" @click="on = false">Close</button>
                        </x-slot>
                    </x-modal>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

</x-docs-v4-layout>
