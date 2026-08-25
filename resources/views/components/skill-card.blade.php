<div>

    <div class="flex h-full flex-col items-center rounded-xl bg-white p-6 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md">

        <i
            data-lucide="{{ $icon }}"
            class="h-10 w-10 text-blue-600"
        ></i>

        <h4 class="mt-4 text-xl font-semibold text-gray-900">
            {{ $title }}
        </h4>

        <p class="mt-2 text-gray-600">
            {{ $slot }}
        </p>

    </div>

</div>