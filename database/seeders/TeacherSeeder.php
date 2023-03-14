<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profes = Staff::where("position_id", 2)->get();
        Teacher::factory(count($profes))->sequence(fn ($sqn)=>[
            "staff_id" => $profes[$sqn->index]->id
        ])->create();
    }
}
