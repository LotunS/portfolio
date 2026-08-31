<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\GitHubService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GitHubImportController extends Controller
{
    public function __construct(
        private readonly GitHubService $github,
    ) {}

    public function index(): View
    {
        $repositories = $this->github->getRepositories();

        return view('admin.projects.github', compact('repositories'));
    }

    public function select(string $repository): RedirectResponse
    {
        $repositories = $this->github->getRepositories();

        $repositoryData = collect($repositories)
            ->firstWhere('name', $repository);

        if (!$repositoryData) {
            abort(404);
        }

        return redirect()
            ->route('admin.projects.create')
            ->with('github_repository', $repositoryData);
    }

    public function test(): JsonResponse
    {
        return response()->json(
            $this->github->getRepositories()
        );
    }
}
