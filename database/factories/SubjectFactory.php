<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'lecturer_id' => fake()->numberBetween(1, 30),
            'semester' => fake()->numberBetween(1, 8),
            'academic_year' => "2022/2023",
            'sks' => fake()->numberBetween(2, 3),
            'code' => fake()->bothify('??-#####'),
            'description' => fake()->text(),
        ];
    }
}
