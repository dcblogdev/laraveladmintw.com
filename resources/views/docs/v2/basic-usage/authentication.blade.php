<x-docs-v2-layout>
    @section('title', 'Docs - Authentication')
    <h1>Authentication</h1>

    <p>The authentication classes don't use Livewire, instead they are standard Auth controllers using <a href="https://github.com/laravel/ui">Laravel UI</a>.</p>
    <p>The following will cover any none standard functionality that Laravel UI does not provide.</p>

    <h2>Registration</h2>

    <p>When registering the following validation rules are applied. </p>
    <ul>
        <li>Name is required</li>
        <li>Email is required and cannot be reused once used.</li>
        <li>Password must be at least 8 characters, contain upper and lowe case letters and number. Additionally passwords are checked to ensure they have not been in a data breach.</li>
    </ul>

    <pre><code class="language-php">
    @php echo htmlentities('
    $request->validate([
        \'name\'            => \'required\',
        \'email\'           => \'required|email|unique:users,email\',
        \'password\'        => [
            \'required\',
            Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->uncompromised()
        ],
        \'confirmPassword\' => \'required|same:password\'
    ]
    ]);
    ') @endphp
    </code></pre>

    <p>Registering a user:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    $user = User::create([
            \'name\'                 => $request->input(\'name\'),
            \'slug\'                 => Str::slug($request->input(\'name\')),
            \'email\'                => $request->input(\'email\'),
            \'password\'             => bcrypt($request->input(\'password\')),
            \'is_active\'            => 1,
            \'is_office_login_only\' => 0
        ]);
    ') @endphp
    </code></pre>

    <p>When creating a user create a thumbnail image:</p>

    <pre><code class="language-php">
    @php echo htmlentities('
        $name      = get_initials($user->name);
        $id        = $user->id.\'.png\';
        $path      = \'users/\';
        $imagePath = create_avatar($name, $id, $path);

        //save image
        $user->image = $imagePath;
        $user->save();
    ') @endphp
    </code></pre>

    <p>Give the user a role of Admin, additional users should be invited from the users page.</p>

    <pre><code class="language-php">
    @php echo htmlentities('
        $role = Role::where(\'label\', \'admin\')->first();

        RoleUser::create([
            \'role_id\' => $role->id,
            \'user_id\' => $user->id
        ]);
    ') @endphp
    </code></pre>

    <p>Create an audit log of the register event by using the helper add_user_log</p>

    <pre><code class="language-php">
    @php echo htmlentities('
        add_user_log([
            \'title\'        => "registered ".$user->name,
            \'reference_id\' => $user->id,
            \'section\'      => \'Auth\',
            \'type\'         => \'Register\'
        ]);

        Auth::loginUsingId($user->id);

        return redirect(\'admin\');
    ') @endphp
    </code></pre>

    <h2>Forgot Password</h2>

    <p>To reset your enter password fill in your email address at the /password/reset url.<p>

    <p>Upon sending a reset link email, a log of the reset request is recorded.</p>

    <pre><code class="language-php">
    @php echo htmlentities('
        AuditTrail::create([
            \'user_id\'      => $id,
            \'reference_id\' => $id,
            \'title\'        => \'requested reset password email\',
            \'section\'      => \'Auth\',
            \'type\'         => \'Request Password Email\'
        ]);
    ') @endphp
    </code></pre>

    <h2>Login</h2>

    <p>Login will work only for active accounts, setting is_active in the attempt will check if the account is active in the database by checking it has a value of 1.</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            [
                \'email\'     => $request->input(\'email\'),
                \'password\'  => $request->input(\'password\'),
                \'is_active\' => 1
            ], $request->filled(\'remember\')
        );
    }
    ') @endphp
    </code></pre>

    <p>On sucessful login record a log</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    AuditTrail::create([
        \'user_id\'      => $user->id,
        \'reference_id\' => $user->id,
        \'title\'        => "Logged in",
        \'section\'      => \'Auth\',
        \'type\'         => \'Login\'
    ]);
    ') @endphp
    </code></pre>

    <p>Record the timestamp of the login

    <pre><code class="language-php">
    @php echo htmlentities('
    $user->last_logged_in_at = now();
    $user->save();
    ') @endphp
    </code></pre>

    <h2>2FA</h2>

    <p>After login, check if 2FA is enabled for all users by checking is_forced_2fa on the settings table.</p>

    <p>If forced 2fa is true then check if 2fa is active on the users record then set a session for 2fa to login otherwise set a session for 2fa to be setup.</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    $isForced2Fa = Setting::where(\'key\', \'is_forced_2fa\')->value(\'value\');

    if ($isForced2Fa) {
        if ($user->two_fa_active === \'Yes\' && $user->two_fa_secret_key !== \'\') {
            session([\'2fa-login\' => true]);
        } else {
            session([\'2fa-setup\' => true]);
        }
    } else {
        if ($user->two_fa_active === \'Yes\' && $user->two_fa_secret_key !== \'\') {
            session([\'2fa-login\' => true]);
        }
    }
    ') @endphp
    </code></pre>

</x-docs-v2-layout>
