<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seccion = [
            "A",
            "B",
            "C",
        ];

        Section::factory(count($seccion))->sequence(fn ($sqn) =>[
            "name" => $seccion[$sqn->index],
        ])->create();
    }
}
