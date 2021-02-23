<?php

namespace Database\Seeders;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use App\Models\TypeFormation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eleve::factory()->count(50)->create();
        $this->call(
            [
                BatimentSeeder::class,
                FormationSeeder::class,
                TypeFormationSeeder::class,

            ]
        );
    }
}
