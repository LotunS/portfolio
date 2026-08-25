<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Portfolio') - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 text-gray-900">

    <div class="flex min-h-screen flex-col">

        @include('partials.navbar')

        <main class="flex-1">
            @yield('content')
        </main>

        @include('partials.footer')

    </div>

</body>

</html>