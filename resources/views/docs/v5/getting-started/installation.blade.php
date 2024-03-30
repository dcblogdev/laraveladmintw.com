<x-docs-v5-layout>
@section('title', 'Docs - Installation')
<h1>Installation</h1>

<div class="alert alert-primary">
    From version 5 AdminTW is a complete project rather than a package. If you are looking for the package version, please use version 4.
</div>

<p>Set database and emails settings inside `.env`</p>

<p>Install composer using the command:</p>

<pre><code class="language-php">
php artisan admintw:install
</code></pre>

<p>Business the assets:</p>

<pre><code class="language-php">
npm install && npm run build
</code></pre>

<p>Link images to storage:</p>

<pre><code class="language-php">
php artisan storage:link
</code></pre>

<p>Create the database tables and populate them:</p>

<pre><code class="language-php">
php artisan migrate --seed
</code></pre>

<p>Run the tests by running PestPHP</p>

<pre><code class="language-php">
vendor/bin/pest
</code></pre>

</x-docs-v5-layout>
