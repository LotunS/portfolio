<footer class="mt-16 bg-gray-900 py-12 text-white">

    <div class="mx-auto max-w-7xl px-6 text-center">

        <h5 class="text-lg font-semibold">
            Portfolio
        </h5>

        <p class="mt-3 text-gray-400">
            Thanks for visiting my portfolio.
        </p>

        <div class="mt-6 flex justify-center gap-5">

            <a
                href="https://github.com/LotunS"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="GitHub"
                class="text-gray-400 transition hover:text-white">
                <svg
                    viewBox="0 0 24 24"
                    class="h-5 w-5 fill-current"
                    aria-hidden="true">
                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56v-2.17c-3.2.7-3.87-1.54-3.87-1.54-.53-1.33-1.28-1.68-1.28-1.68-1.04-.71.08-.7.08-.7 1.15.08 1.75 1.18 1.75 1.18 1.02 1.75 2.68 1.25 3.33.96.1-.74.4-1.25.73-1.54-2.55-.29-5.23-1.28-5.23-5.69 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.47.11-3.06 0 0 .96-.31 3.15 1.18a10.9 10.9 0 0 1 5.74 0c2.19-1.49 3.15-1.18 3.15-1.18.62 1.59.23 2.77.11 3.06.73.81 1.18 1.84 1.18 3.1 0 4.42-2.69 5.4-5.25 5.68.41.36.78 1.07.78 2.16v3.2c0 .31.21.67.8.56A11.51 11.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z" />
                </svg>
            </a>

            <a
                href="https://www.linkedin.com/in/miloud-saad-abd-ali-a624a833b"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="LinkedIn"
                class="text-gray-400 transition hover:text-white">
                <svg
                    viewBox="0 0 24 24"
                    class="h-5 w-5 fill-current"
                    aria-hidden="true">
                    <path d="M20.45 20.45h-3.56v-5.58c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.13 1.44-2.13 2.94v5.68H9.35V8.98h3.42v1.57h.05c.48-.9 1.64-1.85 3.37-1.85 3.61 0 4.28 2.38 4.28 5.48v6.27ZM5.34 7.41a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 0 1 0 4.14ZM3.56 20.45h3.56V8.98H3.56v11.47ZM22.23 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.21 0 22.23 0Z" />
                </svg>
            </a>

            <a
                href="https://www.instagram.com/m.saadcode/"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Instagram"
                class="text-gray-400 transition hover:text-white">
                <svg
                    viewBox="0 0 24 24"
                    class="h-5 w-5 fill-none stroke-current"
                    stroke-width="1.8"
                    aria-hidden="true">
                    <rect x="3" y="3" width="18" height="18" rx="5" />
                    <circle cx="12" cy="12" r="4" />
                    <circle cx="17.5" cy="6.5" r="1" />
                </svg>
            </a>

            <a
                href="{{ route('contact') }}"
                aria-label="Contact"
                class="text-gray-400 transition hover:text-white">
                <i data-lucide="mail" class="h-5 w-5"></i>
            </a>

        </div>

        <p class="mt-8 text-sm text-gray-500">
            &copy; {{ date('Y') }} Portfolio. All rights reserved.
        </p>

    </div>

</footer>