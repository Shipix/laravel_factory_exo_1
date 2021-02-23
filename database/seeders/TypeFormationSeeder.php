<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formations')->insert(
            [
                [
                    'name'=>"Long"
                ],

                [
                    'name'=>"Court"
                ],

                [
                    'name'=>"moyen"
                ],

                [
                    'name'=>"Etudiante"
                ],

                [
                    'name'=>"Demandeur"
                ],
                [
                    'name'=>"Article 60"
                ],
                [
                    'name'=>"Payante"
                ],
                [
                    'name'=>"Gratuite"
                ],
                [
                    'name'=>"Stage"
                ],
                [
                    'name'=>"Workshop"
                ]
            ]
        );
    }
}
