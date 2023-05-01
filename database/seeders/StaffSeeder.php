<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\User;
use Database\Factories\StaffFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =  User::all();
        Staff::factory($users->count())->sequence(fn ($sqn) => [
            'name' => $users[$sqn->index]->name,
            'dui' => $users[$sqn->index]->dui,
            'role_id' => $users[$sqn->index]->role_id,
        ])->create();
    }
}
