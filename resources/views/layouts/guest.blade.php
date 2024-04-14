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
        <script src="https://cdn.usefathom.com/script.js" data-site="RERGCDUF" defer></script>
        <script defer type="text/javascript" src="https://api.pirsch.io/pirsch-extended.js" id="pirschextendedjs" data-code="d7qZofJeTbq1ClJdCcqlcbp4cK6O3Agu"></script>
    </head>
    <body class="text-gray-900 dark:bg-gray-900">

    <div id="ab-full-width-with-dismiss-button-on-blue-bg" class="hs-removing:-translate-y-full bg-blue-600">
  <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
    <div class="flex">
      <p class="text-white text-sm m-0">
        If you find this website useful, your sponsorship would greatly support its ongoing development and maintenance.
          <a class="underline text-white font-medium" href="https://github.com/sponsors/dcblogdev" target="_blank">Learn more</a>
      </p>
    </div>
  </div>
</div>

            {{ $slot }}
    </body>
</html>
