<nav class="sticky top-0 z-50 border-b border-gray-200 bg-white shadow-sm">

    <div
        x-data="{ open: false }"
        class="mx-auto max-w-7xl px-6">

        <div class="flex h-16 items-center justify-between">

            <a
                href="{{ route('home') }}"
                class="text-xl font-bold text-gray-900">
                Portfolio
            </a>

            {{-- Desktop --}}
            <div class="hidden items-center gap-6 md:flex">

                <a href="{{ route('home') }}"
                    class="text-sm {{ request()->routeIs('home') ? 'font-semibold text-blue-600' : 'text-gray-700 hover:text-gray-900' }}">
                    Home
                </a>

                <a href="{{ route('about') }}"
                    class="text-sm {{ request()->routeIs('about') ? 'font-semibold text-blue-600' : 'text-gray-700 hover:text-gray-900' }}">
                    About
                </a>

                <a href="{{ route('projects.index') }}"
                    class="text-sm {{ request()->routeIs('projects.*') ? 'font-semibold text-blue-600' : 'text-gray-700 hover:text-gray-900' }}">
                    Projects
                </a>

                <a href="{{ route('contact') }}"
                    class="text-sm {{ request()->routeIs('contact') ? 'font-semibold text-blue-600' : 'text-gray-700 hover:text-gray-900' }}">
                    Contact
                </a>

            </div>

            {{-- Mobile button --}}
            <button
                type="button"
                @click="open = !open"
                class="rounded-lg p-2 text-gray-700 hover:bg-gray-100 md:hidden"
                aria-label="Toggle navigation">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>

        {{-- Mobile --}}
        <div
            x-show="open"
            class="border-t border-gray-200 py-4 md:hidden">
            <div class="flex flex-col gap-2">

                <a
                    href="{{ route('home') }}"
                    class="rounded-lg px-3 py-2 text-sm hover:bg-gray-100">
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="rounded-lg px-3 py-2 text-sm hover:bg-gray-100">
                    About
                </a>

                <a
                    href="{{ route('projects.index') }}"
                    class="rounded-lg px-3 py-2 text-sm hover:bg-gray-100">
                    Projects
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="rounded-lg px-3 py-2 text-sm hover:bg-gray-100">
                    Contact
                </a>

            </div>
        </div>

    </div>

</nav>