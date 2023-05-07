<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\School;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),

            "dui" => function (){
                $values = "";
                for ($i = 1; $i <= 9; $i++) {
                $values .= fake()->randomDigit();
                }
            return $values;
            },

            'role_id' => Role::inRandomOrder()->limit(1)->first()->id,
            "state_id" => State::inRandomOrder()->limit(1)->first()->id,
            "school_id" => School::inRandomOrder()->limit(1)->first()->id,
            'password' => 'password', // password
            "carnet" => fake()->word(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
