<x-docs-v3-layout>
@section('title', 'Docs - Auth Card')
    <h1>Auth Card</h1>

    <p>Auth card blade component provides a styled box aka card that is centrally aligned and places the login logo / Application name above the card.</p>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at <b>resources/views/components/auth-card.blade.php</b></p>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            <x-auth-card>The auth card</x-auth-card>
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                   <x-auth-card>The auth card</x-auth-card>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

</x-docs-v3-layout>
