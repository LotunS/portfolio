<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->words(3, true);

        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
            'short_description' => fake()->sentence(),
            'description' => fake()->paragraphs(5, true),
            'featured' => fake()->boolean(),
            'sort_order' => fake()->numberBetween(1, 20),
        ];
    }
}