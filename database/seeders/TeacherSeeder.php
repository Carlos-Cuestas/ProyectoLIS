<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =User::where('role_id', 2)->get();
        Teacher::factory(count($users))->sequence(fn ($sqn)=>[
            'user_id'=> $users[$sqn->index]->id,
        ])->create();
    }
}
