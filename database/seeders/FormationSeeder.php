<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert(
            [
                [
                    "name"=>"Coding",
                    "description"=>"Meilleur moyen d'apprendre le code",
                ],

                [
                    "name"=>"MarketLab",
                    "description"=>"Meilleur moyen d'apprendre le marketing",
                ],

                [
                    "name"=>"Grafart",
                    "description"=>"Meilleur moyen d'apprendre l'art",
                ],

                [
                    "name"=>"Webdezing",
                    "description"=>"Meilleur moyen d'apprendre le Webdesign",
                ],
                [
                    "name"=>"Securit School",
                    "description"=>"Meilleur moyen d'apprendre la sécurité web",
                ],
                [
                    "name"=>"FrontSchool",
                    "description"=>"Meilleur moyen d'apprendre le Frontend",
                ],
            ]
        );
    }
}
