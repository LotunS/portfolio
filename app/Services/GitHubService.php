<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GitHubService
{
    protected string $username;
    protected string $token;

    public function __construct()
    {
        $this->username = config('services.github.username');
        $this->token = config('services.github.token');
    }

    public function getRepositories(): array
    {
        return Http::withToken($this->token)
            ->acceptJson()
            ->get("https://api.github.com/users/{$this->username}/repos", [
                'per_page' => 100,
                'sort' => 'updated',
            ])
            ->throw()
            ->json();
    }

    public function getRepository(string $repository): array
    {
        return Http::withToken(config('services.github.token'))
            ->get("https://api.github.com/repos/{$this->username}/{$repository}")
            ->throw()
            ->json();
    }
}
