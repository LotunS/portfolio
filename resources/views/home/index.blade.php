@extends('layouts.portfolio')

@section('title', 'Home')

@section('content')

<x-hero />

<div class="mx-auto max-w-7xl px-6 pb-20">

    <x-section-title>
        About Me
    </x-section-title>

    <p class="max-w-3xl text-lg leading-8 text-gray-600">
        I'm a web developer specializing in Laravel and PHP.
        I build scalable web applications with clean architecture,
        maintainable code, and modern technologies.
    </p>

    <div class="mt-16">
        <x-section-title>
            Skills
        </x-section-title>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            <x-skill-card icon="file-code-2" title="PHP">
                Backend development with clean, maintainable code.
            </x-skill-card>

            <x-skill-card icon="box" title="Laravel">
                MVC architecture, authentication, routing and Eloquent ORM.
            </x-skill-card>

            <x-skill-card icon="database" title="MySQL">
                Relational database design and optimization.
            </x-skill-card>

            <x-skill-card icon="code-2" title="JavaScript">
                Interactive and dynamic user interfaces.
            </x-skill-card>

            <x-skill-card icon="code" title="HTML & CSS">
                Responsive layouts and accessible interfaces.
            </x-skill-card>

            <x-skill-card icon="git-branch" title="Git">
                Version control and collaborative development.
            </x-skill-card>

        </div>
    </div>

    <div class="mt-20">

        <x-section-title>
            Featured Projects
        </x-section-title>

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

</div>

@endsection