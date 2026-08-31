@extends('admin.layouts.app')

@section('title', 'Import from GitHub')

@section('content')

<div class="max-w-5xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Import from GitHub</h1>
        <p class="mt-1 text-gray-500">
            Select a repository to use as the basis for a new project.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-2">

        @forelse ($repositories as $repository)

        <div class="rounded-xl bg-white p-6 shadow-sm">

            <h2 class="text-lg font-semibold">
                {{ $repository['name'] }}
            </h2>

            <p class="mt-2 text-sm text-gray-600">
                {{ $repository['description'] ?? 'No description provided.' }}
            </p>

            <div class="mt-4 flex gap-3">

                <a
                    href="{{ route('admin.github.select', $repository['name']) }}"
                    class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800">
                    Use Repository
                </a>

                <a
                    href="{{ $repository['html_url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="rounded-lg border px-4 py-2 text-sm font-medium hover:bg-gray-50">
                    GitHub
                </a>

            </div>

        </div>

        @empty

        <p class="text-gray-500">
            No repositories found.
        </p>

        @endforelse

    </div>

</div>

@endsection