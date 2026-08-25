@extends('layouts.portfolio')

@section('title', 'About')

@section('content')

<div class="mx-auto max-w-5xl px-6 py-16">

    <x-page-header
        title="About Me"
        subtitle="Learn more about my background." />

    <div class="mx-auto max-w-3xl space-y-8">

        <section>
            <h2 class="text-2xl font-bold text-gray-900">
                Who I Am
            </h2>

            <p class="mt-4 text-lg leading-8 text-gray-600">
                I'm a software developer, I specialize in web and systems development.
                I am most familiar with PHP and Laravel.
                I also enjoy building video games, my graduation project was a 2D
                survival rpg game on Godot. I've initially started learning game
                development on Unity with C#, then transitioned to Godot.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900">
                What I Do
            </h2>

            <p class="mt-4 text-lg leading-8 text-gray-600">
                I focus on backend development, database design,
                authentication, APIs, and responsive web interfaces.
            </p>
        </section>

    </div>

</div>

@endsection