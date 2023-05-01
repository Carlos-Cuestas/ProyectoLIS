<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Section;
use App\Models\Staff;
use App\Models\Subject;
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
            "subject_id" => Subject::inRandomOrder()->limit(1)->first()->id,
            "grade_id" => Grade::inRandomOrder()->limit(1)->first()->id,
            "section_id" => Section::inRandomOrder()->limit(1)->first()->id,
        ];
    }
}
