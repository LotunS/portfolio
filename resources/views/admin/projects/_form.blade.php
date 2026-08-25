{{-- Title --}}
<div>
    <label for="title" class="block text-sm font-medium">Title</label>

    <input
        type="text"
        id="title"
        name="title"
        value="{{ old('title', $project->title ?? '') }}"
        class="mt-2 w-full rounded-lg border-gray-300"
        required>

    @error('title')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Slug --}}
<div>
    <label for="slug" class="block text-sm font-medium">Slug</label>

    <input
        type="text"
        id="slug"
        name="slug"
        value="{{ old('slug', $project->slug ?? '') }}"
        class="mt-2 w-full rounded-lg border-gray-300"
        required>

    @error('slug')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Short Description --}}
<div>
    <label for="short_description" class="block text-sm font-medium">
        Short Description
    </label>

    <textarea
        id="short_description"
        name="short_description"
        rows="3"
        class="mt-2 w-full rounded-lg border-gray-300"
        required>{{ old('short_description', $project->short_description ?? '') }}</textarea>

    @error('short_description')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Description --}}
<div>
    <label for="description" class="block text-sm font-medium">Description</label>

    <textarea
        id="description"
        name="description"
        rows="6"
        class="mt-2 w-full rounded-lg border-gray-300"
        required>{{ old('description', $project->description ?? '') }}</textarea>

    @error('description')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- GitHub URL --}}
<div>
    <label for="github_url" class="block text-sm font-medium">GitHub URL</label>

    <input
        type="url"
        id="github_url"
        name="github_url"
        value="{{ old('github_url', $project->github_url ?? '') }}"
        class="mt-2 w-full rounded-lg border-gray-300">

    @error('github_url')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Live URL --}}
<div>
    <label for="live_url" class="block text-sm font-medium">Live URL</label>

    <input
        type="url"
        id="live_url"
        name="live_url"
        value="{{ old('live_url', $project->live_url ?? '') }}"
        class="mt-2 w-full rounded-lg border-gray-300">

    @error('live_url')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Thumbnail --}}
<div>
    <label for="thumbnail" class="block text-sm font-medium">
        Thumbnail
    </label>

    <input
        type="file"
        id="thumbnail"
        name="thumbnail"
        accept="image/*"
        class="mt-2 block w-full text-sm">

    @error('thumbnail')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror

    @if (!empty($project?->thumbnail))
    <img
        src="{{ asset('storage/' . $project->thumbnail) }}"
        alt="{{ $project->title }}"
        class="mt-4 h-32 w-auto rounded-lg object-cover">
    @endif
</div>

{{-- Featured --}}
<div class="flex items-center gap-2">
    <input
        type="checkbox"
        id="featured"
        name="featured"
        value="1"
        {{ old('featured', $project->featured ?? false) ? 'checked' : '' }}
        class="rounded border-gray-300">

    <label for="featured" class="text-sm font-medium">
        Featured project
    </label>
</div>

{{-- Sort Order --}}
<div>
    <label for="sort_order" class="block text-sm font-medium">
        Sort Order
    </label>

    <input
        type="number"
        id="sort_order"
        name="sort_order"
        value="{{ old('sort_order', $project->sort_order ?? 0) }}"
        min="0"
        class="mt-2 w-full rounded-lg border-gray-300"
        required>

    @error('sort_order')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>