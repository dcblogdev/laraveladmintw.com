<x-docs-v3-layout>
    @section('title', 'Docs - Configuration')
    <h1>Configuration</h1>

    <h2><a name="primaryColors">Primary Colors</a></h2>
    <p>AdminTW comes with a primary background and text colour of <span class="text-primary">#5A67D8</span> </p>

    <pre><code class="language-php">
    @php echo htmlentities("
    theme: {
        extend: {
            colors: {
              primary: '#5A67D8',
            },
            textColors: {
              primary: '#5A67D8'
            },
        },
    },
    ") @endphp
    </code></pre>

    <div class="alert alert-primary">
        <p class="text-white">To change this edit <code class="language-php">tailwind.config.js</code></p>
        <p class="text-white">Make sure you run <code class="language-php">@php echo htmlentities('npm run build')@endphp</code> to rebuild the CSS file after making any changes.</p>
    </div>

</x-docs-v3-layout>
