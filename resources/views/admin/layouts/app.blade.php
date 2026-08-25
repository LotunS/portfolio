<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Admin Panel' }} - Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body  data-success-message="{{ session('success') }}" class="bg-gray-100 text-gray-900">

    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <aside class="w-64 bg-gray-900 text-white min-h-screen">

            <div class="p-6">
                <h1 class="text-xl font-bold">
                    Portfolio Admin
                </h1>
            </div>

            <nav class="px-4 space-y-2">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="block rounded-lg px-4 py-2 hover:bg-gray-800">
                    Dashboard
                </a>

                <a
                    href="{{ route('admin.projects.index') }}"
                    class="block rounded-lg px-4 py-2 hover:bg-gray-800">
                    Projects
                </a>

            </nav>

            <div class="absolute bottom-0 w-64 p-4">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="w-full rounded-lg px-4 py-2 text-left hover:bg-gray-800">
                        Logout
                    </button>
                </form>

            </div>

        </aside>

        {{-- Main content --}}
        <main class="flex-1">

            <header class="bg-white border-b px-8 py-4">
                <h2 class="text-xl font-semibold">
                    {{ $title ?? 'Dashboard' }}
                </h2>
            </header>

            <div class="p-8">
                @yield('content')
            </div>

        </main>

    </div>

    @stack('scripts')

</body>

</html>