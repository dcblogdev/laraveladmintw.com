<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-site-verification" content="uGqgWhXCrlQqLDyItEC-5OnbwrNGI48_tAwnB3JwKhg" />
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script defer data-domain="laraveladmintw.com" src="https://plausible.io/js/plausible.js"></script>
    </head>
    <body class="text-gray-900 dark:bg-gray-900">
            {{ $slot }}
    </body>
</html>
