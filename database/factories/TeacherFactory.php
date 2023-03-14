<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "staff_id" => Staff::inRandomOrder()->limit(1)->first()->id,
            "campo" => fake()->word(),
            "grado" => fake()->word() . " " . fake()->numberBetween(1,12),
        ];
    }
}
