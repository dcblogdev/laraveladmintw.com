<x-doc-layout>
@section('title', 'Docs - Settings')
<h1>Settings</h1>

<p>Set the application name here, instead of changing .env, also enforce 2FA system wide. When enabled anyone who logs in that does not yet have 2FA setup will be forced to setup 2FA and cannot login until its set up.</p>
<p><img src="{{ url('images/docs/settings-application.png') }}" alt="Application Settings"></p>

<p>The application logo can be uploaded for both light and dark mode, the logo will appear on the top left of the admin.</p>
<p><img src="{{ url('images/docs/settings-application-logo.png') }}" alt="Application Logo"></p>

<p>The login page can have its own logo, again for light and dark mode.</p>
<p><img src="{{ url('images/docs/settings-login-logo.png') }}" alt="Login Logo"></p>

<p>White list IP's that can login to the system, by default no user has office login only. When that is set on a users profile they can only access the system from these listed IP addresses. Make sure you have an IP address set before turning this on for all users.</p>
<p><img src="{{ url('images/docs/settings-ips.png') }}" alt="IP Lockdown"></p>

</x-doc-layout>
