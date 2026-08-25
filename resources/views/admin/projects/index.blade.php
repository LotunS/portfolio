@extends('admin.layouts.app')

@section('title', 'Projects')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Projects</h1>
        <p class="text-gray-500 mt-1">
            Manage your portfolio projects.
        </p>
    </div>

    <a
        href="{{ route('admin.projects.create') }}"
        class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800">
        Add Project
    </a>
</div>

<div class="overflow-hidden rounded-xl bg-white shadow-sm">

    <table class="w-full text-left">

        <thead class="border-b bg-gray-50">
            <tr>
                <th class="px-6 py-4 text-sm font-semibold">Title</th>
                <th class="px-6 py-4 text-sm font-semibold">Thumbnail</th>
                <th class="px-6 py-4 text-sm font-semibold">Featured</th>
                <th class="px-6 py-4 text-sm font-semibold">Order</th>
                <th class="px-6 py-4 text-sm font-semibold">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y">

            @forelse ($projects as $project)

            <tr>
                <td class="px-6 py-4">
                    {{ $project->title }}
                </td>

                <td class="px-6 py-4">
                    @if ($project->thumbnail)
                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }}"
                        class="h-16 w-24 rounded-lg object-cover">
                    @else
                    <span class="text-sm text-gray-400">
                        No image
                    </span>
                    @endif
                </td>

                <td class="px-6 py-4">
                    {{ $project->featured ? 'Yes' : 'No' }}
                </td>

                <td class="px-6 py-4">
                    {{ $project->sort_order }}
                </td>

                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">

                        <a
                            href="{{ route('admin.projects.edit', $project) }}"
                            class="text-sm font-medium text-blue-600 hover:underline">
                            Edit
                        </a>

                        <form
                            method="POST"
                            action="{{ route('admin.projects.destroy', $project) }}"
                            class="delete-project-form"
                            >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="text-sm font-medium text-red-600 hover:underline">
                                Delete
                            </button>
                        </form>

                    </div>
                </td>
            </tr>

            @empty

            <tr>
                <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                    No projects found.
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection

@push('scripts')
<script>
    document.querySelectorAll('.delete-project-form').forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            Swal.fire({
                title: 'Delete project?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endpush