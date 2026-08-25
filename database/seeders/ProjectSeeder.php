<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'E-Commerce Platform',
            'slug' => 'e-commerce-platform',
            'short_description' => 'Modern online store built with Laravel.',
            'description' => 'Detailed description coming later.',
            'featured' => true,
            'sort_order' => 1,
        ]);

        Project::create([
            'title' => 'Booking System',
            'slug' => 'booking-system',
            'short_description' => 'Reservation management application.',
            'description' => 'Detailed description coming later.',
            'featured' => true,
            'sort_order' => 2,
        ]);

        Project::create([
            'title' => 'Business Dashboard',
            'slug' => 'business-dashboard',
            'short_description' => 'Analytics dashboard for businesses.',
            'description' => 'Detailed description coming later.',
            'featured' => true,
            'sort_order' => 3,
        ]);
    }
}