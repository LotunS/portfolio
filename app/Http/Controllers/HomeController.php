<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $projects = Project::featured()
            ->ordered()
            ->get();

        return view('home.index', compact('projects'));
    }
}
