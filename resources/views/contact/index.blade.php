@extends('layouts.portfolio')

@section('title', 'Contact')

@section('content')

<div class="mx-auto max-w-5xl px-6 py-16">

    <x-page-header
        title="Contact"
        subtitle="For inquiries or work proposals."
    />

    @if (session('success'))
        <div class="mx-auto mb-8 max-w-3xl rounded-lg bg-green-50 px-5 py-4 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <form
        method="POST"
        action="{{ route('contact.store') }}"
        class="mx-auto max-w-3xl rounded-xl bg-white p-8 shadow-sm"
    >
        @csrf

        <div class="grid gap-6 md:grid-cols-2">

            <div>
                <label
                    for="name"
                    class="block text-sm font-medium text-gray-700"
                >
                    Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                >

                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label
                    for="email"
                    class="block text-sm font-medium text-gray-700"
                >
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                >

                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mt-6">
            <label
                for="subject"
                class="block text-sm font-medium text-gray-700"
            >
                Subject
            </label>

            <input
                type="text"
                id="subject"
                name="subject"
                value="{{ old('subject') }}"
                required
                class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
            >

            @error('subject')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6">
            <label
                for="message"
                class="block text-sm font-medium text-gray-700"
            >
                Message
            </label>

            <textarea
                id="message"
                name="message"
                rows="6"
                required
                class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
            >{{ old('message') }}</textarea>

            @error('message')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="mt-6 rounded-lg bg-blue-600 px-6 py-3 font-medium text-white transition hover:bg-blue-700"
        >
            Send Message
        </button>

    </form>

</div>

@endsection