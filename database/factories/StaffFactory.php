<?php

namespace Database\Factories;

use App\Models\Position;
use App\Models\Role;
use App\Models\School;
use App\Models\State;
use App\Models\User;
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
        $user = User::inRandomOrder()->limit(1)->first();

    return [
        "dui" => $user->dui,
        "name" => fake()->name(),
        "state_id" => State::inRandomOrder()->limit(1)->first()->id,
        "school_id" => School::inRandomOrder()->limit(1)->first()->id,
        "role_id" => Role::inRandomOrder()->limit(1)->first()->id,
    ];
    }
}
