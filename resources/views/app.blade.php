<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="/public/images/logo-files/favicon_io/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="/public/images/logo-files/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/public/images/logo-files/favicon/favicon-16x16.png">
        <link rel="manifest" href="/public/images/logo-files/favicon/site.webmanifest">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
