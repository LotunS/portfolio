@props(['project'])

<article class="flex h-full flex-col overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-200/60 transition duration-200 hover:-translate-y-1 hover:shadow-md">

    @if ($project->thumbnail)

        <img
            src="{{ asset('storage/' . $project->thumbnail) }}"
            alt="{{ $project->title }}"
            class="h-48 w-full object-cover"
        >

    @else

        <div class="flex h-48 items-center justify-center bg-gray-100 text-gray-400">
            <i data-lucide="image" class="h-10 w-10"></i>
        </div>

    @endif

    <div class="flex flex-1 flex-col p-6">

        <h3 class="text-xl font-semibold text-gray-900">
            {{ $project->title }}
        </h3>

        <p class="mt-2 flex-1 text-gray-600">
            {{ $project->short_description }}
        </p>

        <a
            href="{{ route('projects.show', $project) }}"
            class="mt-6 inline-flex self-start rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700"
        >
            View Project
        </a>

    </div>

</article>