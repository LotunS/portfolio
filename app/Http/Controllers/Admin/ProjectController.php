<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

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
        $githubRepository = session('github_repository');

        $project = new Project();

        if ($githubRepository) {
            $project->title = $githubRepository['name'];
            $project->slug = Str::slug($githubRepository['name']);
            $project->short_description = $githubRepository['description'] ?? '';
            $project->github_url = $githubRepository['html_url'];
        }

        return view('admin.projects.create', compact('project'));
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
            $response = Http::withToken(config('services.pixelvault.api_key'))
                ->attach(
                    'file',
                    file_get_contents($request->file('thumbnail')->getRealPath()),
                    $request->file('thumbnail')->getClientOriginalName()
                )
                ->post('https://api.pixelvault.dev/v1/images');

            $response->throw();

            $upload = $response->json('data');

            $validated['thumbnail'] = $upload['url'];
            $validated['pixelvault_id'] = $upload['id'];
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
            $oldPixelvaultId = $project->pixelvault_id;

            $response = Http::withToken(config('services.pixelvault.api_key'))
                ->attach(
                    'file',
                    file_get_contents($request->file('thumbnail')->getRealPath()),
                    $request->file('thumbnail')->getClientOriginalName()
                )
                ->post('https://api.pixelvault.dev/v1/images');

            $response->throw();

            $upload = $response->json('data');

            $validated['thumbnail'] = $upload['url'];
            $validated['pixelvault_id'] = $upload['id'];

            if ($oldPixelvaultId) {
                Http::withToken(config('services.pixelvault.api_key'))
                    ->delete(
                        "https://api.pixelvault.dev/v1/images/{$oldPixelvaultId}"
                    )
                    ->throw();
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
        if ($project->pixelvault_id) {
            Http::withToken(config('services.pixelvault.api_key'))
                ->delete(
                    "https://api.pixelvault.dev/v1/images/{$project->pixelvault_id}"
                )
                ->throw();
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
