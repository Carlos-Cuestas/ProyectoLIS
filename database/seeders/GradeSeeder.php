<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grados = [
            "7.º grado",
            "8.º grado",
            "9.º grado",
            "10.º grado",
            "11.º grado",
            "12.º grado",
        ];

        Grade::factory(count($grados))->sequence(fn ($sqn) =>[
            "name" => $grados[$sqn->index],
        ])->create();
    }
}
