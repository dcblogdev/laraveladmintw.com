<x-docs-v2-layout>
@section('title', 'Docs - Tests')
    <h1>Tests</h1>

    <p>Laravel AdminTW comes with a suite of tests using <a href='https://pestphp.com/' target="_blank">PestPHP</a>.</p>

    <p>There are 74 tests out the box that ensured the application works as expected.</p>

    <p><b>/tests/Pest.php</b> contains:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    uses(
        TestCase::class,
        RefreshDatabase::class,
        WithFaker::class
    )->in(__DIR__);
    ') @endphp
    </code></pre>

    <p>This uses the test case from <b>/tests/TestCase.php</b> This file is where custom methods have been added. More on this below.</p>

    <p>Before each tests the database in memory is cleared, all migrations and seeds are re-run this ensures each test is in a fresh state and does not depend on other tests.</p>

    <p>Inside <b>TestCase.php</b> there is a custom method called authenticate this is used to create a user, give the user the role speciied and logged in.</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    authenticate(string $role = \'admin\', string $permissionName = \'\')
    ') @endphp
    </code></pre>

    <p>Permissions when passed will be created and assigned to the user, Admin roles have all permissions by default so permissions work best with none admin roles.</p>

    <p>For example to run a test that requires a user to be authenticated:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    test(\'can see users page\')
    ->authenticate()
    ->get(fn() => route(\'admin.users.index\'))
    ->assertOk();
    ') @endphp
    </code></pre>

    <h2>Writing Tests</h2>

    <p>Writing test is a simple as creating a file ending with Test.php inside the Tests/Unit or Tests/Feature folders. Ie PaymentTest.php</p>

    <p>Since AdminTW uses PestPHP there are no namespaces to import, the Pest.php takes care of loading the required classes. To create new tests simple write the tests inside php:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    test(\'can see profile\')
    ->authenticate()
    ->get(fn() => route(\'admin.users.show\', User::factory()->create()))
    ->assertOk();
    ') @endphp
    </code></pre>

</x-docs-v2-layout>
