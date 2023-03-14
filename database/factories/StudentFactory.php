<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "nombre" => fake()->name(),
            "grado" => fake()->numberBetween(),
            "carnet" => fake()->word(),
            "genero" => fake()->randomElement(["H","M"]),
            "school_id" => School::inRandomOrder()->limit(1)->first()->id,
        ];
    }
}
