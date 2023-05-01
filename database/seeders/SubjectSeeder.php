<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materias = [
            "Matematicas",
            "Quimica",
            "Fisica",
            "Español",
            "Ciencias Sociales",
            "Geografia",
            "Literatura",
            "Ingles",
        ];

        Subject::factory(count($materias))->sequence(fn ($sqn) =>[
            "name" => $materias[$sqn->index],
        ])->create();
    }
}
