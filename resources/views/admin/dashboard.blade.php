@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="grid grid-cols-1 gap-6 md:grid-cols-3">

    <div class="rounded-xl bg-white p-6 shadow-sm">
        <p class="text-sm text-gray-500">Projects</p>
        <p class="mt-2 text-3xl font-bold">0</p>
    </div>

    <div class="rounded-xl bg-white p-6 shadow-sm">
        <p class="text-sm text-gray-500">Featured Projects</p>
        <p class="mt-2 text-3xl font-bold">0</p>
    </div>

    <div class="rounded-xl bg-white p-6 shadow-sm">
        <p class="text-sm text-gray-500">Messages</p>
        <p class="mt-2 text-3xl font-bold">0</p>
    </div>

</div>

@endsection