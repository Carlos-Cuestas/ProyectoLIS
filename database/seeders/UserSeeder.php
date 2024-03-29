<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'dui' => '1401200200567',
            'role_id' => 2
        ]);
        
        User::factory()->create([
            'dui' => '14012002',
            'role_id' => 1
        ]);
    }
}
