<section class="py-16 text-center">

    <h1 class="text-4xl font-bold tracking-tight text-gray-900 md:text-5xl">
        {{ $title }}
    </h1>

    @isset($subtitle)
        <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-600">
            {{ $subtitle }}
        </p>
    @endisset

</section>