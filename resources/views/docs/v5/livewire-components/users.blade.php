<x-docs-v5-layout>
@section('title', 'Docs - Users')
<h1>Users</h1>

<p>The users section lists all users with filter options to find users by their name, email and joined date.</p>
<p><img src="{{ url('images/docs/users.png') }}" alt="Users"></p>

<p>The table is a datatable where the name and email columns are sortable by clicking on the column headings.</p>

<h2>User Profile</h2>

<p>Each user has a profile, in their profile shows all user activity. This is all activity that's been recorded via the add_user_log() helpers used across the system.</p>
<p><img src="{{ url('images/docs/user-profile.png') }}" alt="User Profile"></p>

<p>User can change their name, email and upload a profile photo.</p>
<p><img src="{{ url('images/docs/user-account-settings.png') }}" alt="User Account Settings"></p>

<p>Also passwords can be updated.</p>
<p><img src="{{ url('images/docs/user-change-password.png') }}" alt="User Change Password"></p>

<p>By default 2FA is turned off, users can opt in at any time, bear in mind if enforce 2FA is turned on in the settings all users will have to use 2FA.</p>
<p><img src="{{ url('images/docs/user-2fa.png') }}" alt="User 2FA"></p>

<p>These settings only appear if you have an Admin role. Change the user to be office login only, meaning they can only use the system from pre-approved IP's listed in the settings page. Also if you're editing a different users account you can turn their account to be inactive. This will stop them being able to login.</p>
<p><img src="{{ url('images/docs/user-admin-settings.png') }}" alt="User Admin Settings"></p>

<p>Apply which roles the user will have, these roles set what permissions the user will have.</p>
<p><img src="{{ url('images/docs/roles-user.png') }}" alt="User Roles"></p>


</x-docs-v5-layout>
