<x-docs-v4-layout>
@section('title', 'Docs - Roles and Permissions')
<h1>Roles and Permissions</h1>

<p>AdminTW implements a Roles and Permissions system. Users do not have roles directly, instead they have roles, they can have multiple roles, each with their own permissions.</p>

<p>The system comes with 2 roles out the box Admin and User.</p>
<p>Admin roles have full permissions to the system, permissions do not apply to Admin roles.</p>
<p>Users come with no permissons by default and will have to be configured.</p>

<h2>Creating roles on install</h2>

<p>When seeding a fresh install you can set a default list of roles by editing `database/seeders/RolesDatabaseSeeder.php`</p>

<pre><code class="language-php">
@php echo htmlentities('
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class RolesDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Role::firstOrCreate([\'name\' => \'admin\', \'label\' => \'Admin\']);
        Role::firstOrCreate([\'name\' => \'user\', \'label\' => \'User\']);
    }
}

') @endphp
</code></pre>

<p>A role has a name and a label, the label is used only for a user friendly name within the Roles section. Using the roles directly you should use the role name.</p>

<h2>Usage of a role</h2>

Check in an if statement weather the current user has a permission, the permission will be checked against all roles the user has.</p>
<pre><code class="language-php">
@php echo htmlentities('
@can(\'view_dashboard\')
    <x-nav.link route="admin" icon="fas fa-home">Dashboard</x-nav.link>
@endcan
') @endphp
</code></pre>

<h2>Roles Helpers</h2>

<br>

<h3>abort_if_cannot</h3>

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

<h3>abort_permission</h3>

<p>This performs the same as above but when a permission returns false instead of aborting globally an error view is returned, this is helpful if you want to show a message but don't stop the page execution.</p>

<pre><code class="language-php">
@php echo htmlentities('
abort_permission(string $action, int $code = 401)
') @endphp
</code></pre>

<h3>can</h3>

<p>This checks if a user has a given permission, returns a boolean.</p>

<pre><code class="language-php">
@php echo htmlentities('
can(string $action)
') @endphp
</code></pre>

<h3>cannot</h3>

<p>This checks if a user does not have a given permission, returns a boolean.</p>

<pre><code class="language-php">
@php echo htmlentities('
cannot(string $action)
') @endphp
</code></pre>

<h2>Managing Roles</h2>

<p>From the admin as long as you have an Admin role you can access the Roles and Permissions section. From here you can add edit and remove roles. except for the Admin role that cannot be changed.</p>
<p><img src="{{ url('images/docs/roles.png') }}" alt="Managing Roles"></p>

<p>When editing a role, all its permissions will be displayed. From here the permissions can be turned on and off by checking the boxes.</p>
<p><img src="{{ url('images/docs/roles-edit.png') }}" alt="Editing Roles"></p>

<h2>Applying Roles to Users</h2>

<p>To give a user roles edit their account and scroll to the bottom of the page to find the roles section, check each box to give the user that role.</p>

<div class="alert alert-primary">
Make sure there is always a user with Admin access. There is validation to help prevent you locking yourself out!
</div>

<p><img src="{{ url('images/docs/roles-user.png') }}" alt="User Roles"></p>

</x-docs-v4-layout>
