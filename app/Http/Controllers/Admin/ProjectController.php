<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $projects = Project::ordered()->get();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:projects,slug'],
            'short_description' => ['required', 'string'],
            'description' => ['required', 'string'],
            'github_url' => ['nullable', 'url'],
            'live_url' => ['nullable', 'url'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
            'featured' => ['nullable', 'boolean'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store(
                'projects',
                'public'
            );
        }

        $validated['featured'] = $request->boolean('featured');

        Project::create($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project): View
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'required',
                'string',
                'max:255',
                'unique:projects,slug,' . $project->id,
            ],
            'short_description' => ['required', 'string'],
            'description' => ['required', 'string'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
            'github_url' => ['nullable', 'url'],
            'live_url' => ['nullable', 'url'],
            'featured' => ['nullable', 'boolean'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('thumbnail')) {
            $oldThumbnail = $project->thumbnail;

            $validated['thumbnail'] = $request->file('thumbnail')->store(
                'projects',
                'public'
            );

            if ($oldThumbnail) {
                Storage::disk('public')->delete($oldThumbnail);
            }
        }

        $validated['featured'] = $request->boolean('featured');

        $project->update($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project): RedirectResponse
    {
        if ($project->thumbnail) {
            Storage::disk('public')->delete($project->thumbnail);
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
