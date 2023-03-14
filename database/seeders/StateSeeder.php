<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depa = [
            "Ahuachapan",
            "Cabañas",
            "Chalatenango",
            "Cuscatlan",
            "La Libertad",
            "La Paz",
            "Morazan",
            "Santa Ana",
            "San Miguel",
            "San Salvador",
            "San Vicente",
            "Sonsonate",
            "La Union",
            "Usulutan",
        ];

        State::factory(count($depa))->sequence(fn ($sqn) =>[
            "name" => $depa[$sqn->index],

        ])->create();
    }
}
