<x-docs-v5-layout>
@section('title', 'Docs - Installation')
<h1>Installation</h1>

<div class="alert alert-primary">
    From version 5 AdminTW is a complete project rather than a package. If you are looking for the package version, please use version 4.
</div>

<p>Clone the repository:</p>

<pre><code class="language-php">
git clone git@github.com:dcblogdev/laravel-admintw.git projectName
</code></pre>

<p>Remove GIT history:</p>

<pre><code class="language-php">
rm -rf .git
</code></pre>

<p>Optionally, Initalise GIT</p>
<pre><code class="language-php">
git init
</code></pre>

<p>Copy the `.env.example` file to `.env`:</p>

<pre><code class="language-php">
cp .env.example .env
</code></pre>

<p>Open .env in your editor.</p>

<p>Set database and emails settings inside .env</p>

<p>Install composer using the command:</p>

<pre><code class="language-php">
composer install
</code></pre>

<p>Build the assets:</p>

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
