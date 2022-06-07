<x-doc-layout>
    @section('title', 'Docs - Helpers')
    <h1>Helpers</h1>

    <p>AdminTW comes in a collection of helpers, located in <b>app/Http/helpers.php</b></p>

    <ul>
        <li><a href="#abort_if_cannot" class="text-primary">abort_if_cannot</a></li>
        <li><a href="#abort_permission" class="text-primary">abort_permission</a></li>
        <li><a href="#add_user_log" class="text-primary">add_user_log</a></li>
        <li><a href="#can" class="text-primary">can</a></li>
        <li><a href="#cannot" class="text-primary">cannot</a></li>
        <li><a href="#create_avatar" class="text-primary">create_avatar</a></li>
        <li><a href="#get_initials" class="text-primary">get_initials</a></li>
        <li><a href="#in_array_r" class="text-primary">in_array_r</a></li>
        <li><a href="#is_admin" class="text-primary">is_admin</a></li>
        <li><a href="#has_role" class="text-primary">has_role</a></li>
        <li><a href="#size_readable" class="text-primary">size_readable</a></li>
        <li><a href="#storage_exists" class="text-primary">storage_exists</a></li>
        <li><a href="#storage_url" class="text-primary">storage_url</a></li>
        <li><a href="#user" class="text-primary">user</a></li>
        <li><a href="#vat" class="text-primary">vat</a></li>
    </ul>

    <a name="abort_if_cannot"><h2>abort_if_cannot</h2></a>

    <p>Abort when user does not have permission to perform the requestion action.</p>

    <p>For instance abort users from seeing user activity when they don't have permissions from their given roles. The action is looked up as a boolean, it can be used inside if statements.</p>

    <p>When the user does not have permission the message will be printed: You do not have permissions to (permission name)</p>
    <pre><code class="language-php">
        @php echo htmlentities('
            abort_if_cannot(\'view_users_activity\')
       ') @endphp
    </code></pre>

    <p>The helper takes 2 arguments, the name to check and the status code. The default status code is 401.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        abort_if_cannot(string $action, int $code = 401)
       ') @endphp
    </code></pre>

    <a name="abort_permission"><h2>abort_permission</h2></a>

    <p>This performs the same as above but when a permission returns false instead of aborting globally an error view is returned, this is helpful if you want to show a message but don't stop the page execution.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        abort_permission(string $action, int $code = 401)
       ') @endphp
    </code></pre>

    <a name="add_user_log"><h2>add_user_log</h2></a>

    <p>Pass an array of data to populate the user log. This adds to the user activity table.</p>
    <p>The following keys are supported:</p>

    <ul>
        <li><b>Title</b> $data['title'] sets the activity title</li>
        <li><b>Link</b> $data['link'] a URL link</li>
        <li><b>Reference identifier</b> $data['id'] set a reference normally a model's primary key</li>
        <li><b>Section</b> $data['section'] identifty the section ie Users, Posts</li>
        <li><b>Type</b> $data['type'] sets the type of activity ie Create, Update, Delete</li>
    </ul>

    <pre><code class="language-php">
        @php echo htmlentities('
        add_user_log(array $data)
       ') @endphp
    </code></pre>

    <p>Example:</p>
    <pre><code class="language-php">
    @php echo htmlentities('
    add_user_log([
        \'title\'        => "updated ".$this->user->name."\'s password",
        \'reference_id\' => $this->user->id,
        \'link\'         => route(\'admin.users.edit\', [\'user\' => $this->user->id]),
        \'section\'      => \'Users\',
        \'type\'         => \'Update\'
    ]);
    ') @endphp
    </code></pre>

    <a name="can"><h2>can</h2></a>

    <p>This checks if a user has a given permission, returns a boolean.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        can(string $action)
       ') @endphp
    </code></pre>

    <a name="create_avatar"><h2>create_avatar</h2></a>

    <p>Create an avator by providing a name, normally initials followed by the desired filename and location to be stored.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        //generate image
        $name      = get_initials($user->name);
        $id        = $user->id.\'.png\';
        $path      = \'users/\';
        $imagePath = create_avatar($name, $id, $path);

        //save image
        $user->image = $imagePath;
        $user->save();
       ') @endphp
    </code></pre>

    <a name="cannot"><h2>cannot</h2></a>

    <p>This checks if a user does not have a given permission, returns a boolean.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        cannot(string $action)
       ') @endphp
    </code></pre>

    <a name="get_initials"><h2>get_initials</h2></a>

    <p>Return the first letter of each word.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        get_initials(string $name)
       ') @endphp
    </code></pre>

    <a name="in_array_r"><h2>in_array_r</h2></a>

    <p>Determine if a given item ($needle) is in an array of any of its childrens array. The lookup is recursive.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        in_array_r($needle, $haystack, $strict = false)
       ') @endphp
    </code></pre>

    <a name="is_admin"><h2>is_admin</h2></a>

    <p>This checks if a user has a role of admin, returns a boolean.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        is_admin()
       ') @endphp
    </code></pre>

    <a name="has_role"><h2>has_role</h2></a>

    <p>This checks if a user has a role, returns a boolean.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        has_role(string $roleName)
       ') @endphp
    </code></pre>

    <a name="size_readable"><h2>size_readable</h2></a>

    <p>Return a user friendly size from a given bytes. In the format of B, kB, MB, GB, TB</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        size_readable(int $bytes)
       ') @endphp
    </code></pre>

    <a name="storage_exists"><h2>storage_exists</h2></a>

    <p>Check if a $file exists inside Laravel's storage, by default the public disk will be used.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        storage_exists($file, $disk = \'public\')
       ') @endphp
    </code></pre>

    <a name="storage_url"><h2>storage_url</h2></a>

    <p>Return a url from storage its the equivalent of Storage::url($file).</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        storage_url($file, $disk = \'public\'):
       ') @endphp
    </code></pre>

    <a name="user"><h2>user</h2></a>

    <p>Reuturns an instance of the users auth: auth()->user().</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        user()
       ') @endphp
    </code></pre>

    <a name="vat"><h2>vat</h2></a>

    <p>Return VAT by providing a price and VAT amount.</p>

    <pre><code class="language-php">
        @php echo htmlentities('
        vat(float $price, int $vat)
       ') @endphp
    </code></pre>




</x-doc-layout>
