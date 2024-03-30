<x-docs-v5-layout>
@section('title', 'Docs - Middleware')
    <h1>Middleware</h1>

    <br>
    <h3>ActiveUser</h3>
    <p>If a user is logged in and becomes in active ie an admin changes their account to in-active they will be logged out.</p>
    <p>Also these enforce the 2FA pages load when logged in and the 2FA code has not yet been entered, Stopping other pages from loading before approving 2FA.</p>
    <pre><code class="language-php">
    @php echo htmlentities("
    Route::middleware(['web', 'auth', 'activeUser'])->prefix('admin')->group(function () {
    ") @endphp
    </code></pre>

    <br>
    <h3>IpCheckMiddleware</h3>
    <p>When IP Lockdown (Office Login) has been enabled the application can only be used from pre-authorised IP addresses. Applying the middleware to routes forces this. </p>
    <p>The IP addresses can be set from the System Settings page in the admin.</p>
    <pre><code class="language-php">
    @php echo htmlentities("
    Route::middleware(['web', 'auth', 'IpCheckMiddleware'])->prefix('admin')->group(function () {
    ") @endphp
    </code></pre>

    <br>
    <h3>Role</h3>
    <p>Checks if the logged in user has the specified role.</p>
    <pre><code class="language-php">
    @php echo htmlentities("
    Route::middleware(['web', 'auth', 'role:admin'])->prefix('admin')->group(function () {
    ") @endphp
    </code></pre>

</x-docs-v5-layout>
