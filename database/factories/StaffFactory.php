<?php

namespace Database\Factories;

use App\Models\Position;
use App\Models\School;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "dui" => function (){
                $values = "";
                for ($i = 1; $i <= 9; $i++) {
                $values .= fake()->randomDigit();
                }
            return $values;
            },

            "nombre" => fake()->name(),
            "state_id" => State::inRandomOrder()->limit(1)->first()->id,
            "school_id" => School::inRandomOrder()->limit(1)->first()->id,
            "position_id" => Position::inRandomOrder()->limit(1)->first()->id,
        ];
    }
}
