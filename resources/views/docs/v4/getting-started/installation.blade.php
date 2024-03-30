<x-docs-v4-layout>
@section('title', 'Docs - Installation')
<h1>Installation</h1>

<p>Install a fresh copy of Laravel then use require this package with composer:</p>

<pre><code class="language-php">
composer require dcblogdev/laravel-admintw
</code></pre>

<p>Then install using the command:</p>

<pre><code class="language-php">
php artisan admintw:install
</code></pre>

<p>Update composer using the command:</p>

<pre><code class="language-php">
composer update
</code></pre>

<div class="alert alert-primary">
<p class="text-white">Ensure you've updated .env before migrating.</p>
</div>

<p>Migrate the database</p>

<pre><code class="language-php">
php artisan migrate
</code></pre>

<p>Seed the database</p>

<pre><code class="language-php">
php artisan db:seed
</code></pre>

<p>Link Storage to public</p>
<pre><code class="language-php">
php artisan storage:link
</code></pre>

<p>To compile your assets:</p>

<pre><code class="language-php">
npm install && npm run dev
</code></pre>

<p>Run the tests by running PestPHP</p>

<pre><code class="language-php">
vendor/bin/pest
</code></pre>

</x-docs-v4-layout>
