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
                <i data-lucide="github" class="h-5 w-5"></i>
            </a>F

            <a
                href="www.linkedin.com/in/miloud-saad-abd-ali-a624a833b"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="LinkedIn"
                class="text-gray-400 transition hover:text-white">
                <i data-lucide="linkedin" class="h-5 w-5"></i>
            </a>

            <a
                href="https://www.instagram.com/m.saadcode/"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Instagram"
                class="text-gray-400 transition hover:text-white">
                <i data-lucide="instagram" class="h-5 w-5"></i>
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