<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "student_id" =>Student::inRandomOrder()->limit(1)->first()->id,
            "note"=>fake()->numberBetween(0,10),
            "subject_id" =>Subject::inRandomOrder()->limit(1)->first()->id,
            "cycle_id" => fake()->numberBetween(1,2),
        ];
    }
}
