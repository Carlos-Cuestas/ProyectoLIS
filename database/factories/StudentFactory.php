<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\School;
use App\Models\Section;
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
        $currentYear = date('Y');
        $carnet = "EE{$currentYear}".fake()->unique()->word();

        return [
            "name" => fake()->name(),
            "carnet" => $carnet,
            "gender" => fake()->randomElement(["H","M"]),
            "section_id" => Section::inRandomOrder()->limit(1)->first()->id,
            "grade_id" => Grade::inRandomOrder()->limit(1)->first()->id,
            "school_id" => School::inRandomOrder()->limit(1)->first()->id,
        ];
    }
}
