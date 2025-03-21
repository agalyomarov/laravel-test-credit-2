<?php

namespace Database\Seeders;

use App\Models\Building;
use Database\Factories\BuildingFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Building::count() > 0) {
            return;
        }
        Building::factory(20)->create();
    }
}
