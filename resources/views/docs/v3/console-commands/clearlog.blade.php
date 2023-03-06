<x-docs-v3-layout>
@section('title', 'Docs - Clear Log')
    <h1>Clear Log</h1>

    <p>Laravel log files can build up overtime, during heavy development often you'll want to empty <b>laravel.log</b></p>
    <p>AdminTW provides a console command to empty <b>laravel.log</b></p>

    <pre>
        <code class="language-php">
            @php echo htmlentities('php artisan log:clear')@endphp
        </code>
    </pre>


</x-docs-v3-layout>