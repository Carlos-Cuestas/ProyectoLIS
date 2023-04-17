<?php

namespace Database\Seeders;

use App\Models\Position;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $position = [
            "Limpieza",
            "Maestro",
            "Secretaria",
            "Administracion",
            "Direccion"
        ];
        
        Position::factory(count($position))->sequence(fn ($sqn) =>[
            "nombre" => $position[$sqn->index],
        ])->create();
    }
}
