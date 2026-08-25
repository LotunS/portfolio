@extends('layouts.portfolio')

@section('title', 'Projects')

@section('content')

<div class="mx-auto max-w-7xl px-6 py-16">

    <x-page-header
        title="Projects"
        subtitle="Some of my work." />

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

        @forelse ($projects as $project)

        <x-project-card :project="$project" />

        @empty

        <div class="col-span-full rounded-lg bg-blue-50 px-6 py-8 text-center text-blue-800">
            No projects found.
        </div>

        @endforelse

    </div>

</div>

@endsection