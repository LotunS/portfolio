@extends('admin.layouts.app')

@section('title', 'Add Project')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Add Project</h1>
        <p class="mt-1 text-gray-500">
            Add a new project to your portfolio.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.projects.store') }}"
        enctype="multipart/form-data"
        class="space-y-6 rounded-xl bg-white p-6 shadow-sm">

        @csrf

        @include('admin.projects._form')

        <div class="flex gap-3">
            <button
                type="submit"
                class="rounded-lg bg-gray-900 px-5 py-2.5 text-sm font-medium text-white hover:bg-gray-800">
                Create Project
            </button>

            <a
                href="{{ route('admin.projects.index') }}"
                class="rounded-lg border px-5 py-2.5 text-sm font-medium hover:bg-gray-50">
                Cancel
            </a>
        </div>

    </form>

</div>

@endsection