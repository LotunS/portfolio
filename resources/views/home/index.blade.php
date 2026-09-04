@extends('layouts.portfolio')

@section('title', 'Home')

@section('content')

<x-hero />

<div class="mx-auto max-w-7xl px-6 pb-20">

    <x-section-title>
        About Me
    </x-section-title>

    <p class="max-w-3xl text-lg leading-8 text-gray-600">
        I have been passionate about programming since childhood, started my development journey while I was still in school.
        My university background is only part of what I've learned over the years,
        with experience across several areas of software development.
        - Web development with PHP and Laravel
        - Desktop application development with C++ and C#
        - Game development with Godot and Unity
        - Mobile application development with Dart and Flutter
        - Database development with MySQL
        - Version control with Git
    </p>

    <div class="mt-16">
        <x-section-title>
            Skills
        </x-section-title>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            <x-skill-card icon="file-code-2" title="PHP">
                Proficient in clean backend development.
            </x-skill-card>

            <x-skill-card icon="code" title="HTML/CSS">
                Structured and responsive frontend development.
            </x-skill-card>

            <x-skill-card icon="code-2" title="JavaScript">
                For General-purpose, also dynamic user interfaces.
            </x-skill-card>

            <x-skill-card icon="box" title="Laravel">
                MVC architecture, authentication, routing, and ORM.
            </x-skill-card>

            <x-skill-card icon="database" title="MySQL">
                Database design, queries, and management.
            </x-skill-card>

            <x-skill-card icon="terminal" title="Desktop Development">
                Desktop apps development with C++ and C#.
            </x-skill-card>

            <x-skill-card icon="smartphone" title="Mobile Development">
                Mobile application development with Fluter.
            </x-skill-card>

            <x-skill-card icon="gamepad-2" title="Game Development">
                Game development with Unity and Godot using C# and GDScript.
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