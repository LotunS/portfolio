@extends('layouts.portfolio')

@section('title', $project->title)

@section('content')

<div class="mx-auto max-w-5xl px-6 py-16">

    <div class="mb-8">
        <a
            href="{{ route('projects.index') }}"
            class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 transition hover:text-gray-900"
        >
            <i data-lucide="arrow-left" class="h-4 w-4"></i>
            Back to Projects
        </a>
    </div>

    <x-page-header
        :title="$project->title"
        :subtitle="$project->short_description"
    />

    <article class="overflow-hidden rounded-xl bg-white shadow-sm">

        @if ($project->thumbnail)
            <img
                src="{{ asset('storage/' . $project->thumbnail) }}"
                alt="{{ $project->title }}"
                class="h-56 w-full object-cover sm:h-72 md:h-96"
            >
        @endif

        <div class="p-6 md:p-8">

            <div class="max-w-none text-lg leading-8 text-gray-700">
                {!! nl2br(e($project->description)) !!}
            </div>

            @if ($project->github_url || $project->live_url)

                <hr class="my-8 border-gray-200">

                <div class="flex flex-wrap gap-3">

                    @if ($project->github_url)
                        <a
                            href="{{ $project->github_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-gray-800"
                        >
                            <i data-lucide="github" class="h-5 w-5"></i>
                            GitHub
                        </a>
                    @endif

                    @if ($project->live_url)
                        <a
                            href="{{ $project->live_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700"
                        >
                            <i data-lucide="external-link" class="h-5 w-5"></i>
                            Live Demo
                        </a>
                    @endif

                </div>

            @endif

        </div>

    </article>

</div>

@endsection