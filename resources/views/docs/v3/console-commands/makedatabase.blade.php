<x-docs-v2-layout>
@section('title', 'Docs - Make Database')
    <h1>Make Database</h1>

    <p>From time to time you will want to clear all the data from the database and run the following:</p>
    <ul>
        <li>Migrate the database</li>
        <li>Seed the database (populate the tables with data)</li>
    </ul>
    <p>AdminTW provides a command called db:build that will run migrations and seed all tables from fresh.</p>

    <div class="alert alert-primary">
        <p class="text-white">This command will only run on local and staging environments. When the ENV environment is set to production the command will not run.</p>
        <p class="text-white">Be advised this will delete all existing database data! a confirmation will prompt the user to continue when executed. </p>
    </div>

    <pre>
        <code class="language-php">
            @php echo htmlentities('php artisan db:build')@endphp
        </code>
    </pre>

</x-docs-v2-layout>