<?php

namespace Database\Seeders;

use App\Models\Staff;
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
        Staff::factory(25)->create();
    }
}
