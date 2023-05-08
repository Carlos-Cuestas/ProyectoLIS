<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciclos = [
            1,
            2
        ];

        Cycle::factory(count($ciclos))->sequence(fn ($sqn) => [
            'number' => $ciclos[$sqn->index]
        ])->create();
    }
}
