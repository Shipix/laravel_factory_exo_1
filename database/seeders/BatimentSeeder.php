<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batiments')->insert(
            [
                [
                    'name'=>'Coolding School',
                    'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, consequuntur? Maxime quisquam iusto, deserunt earum sed eum magni eligendi quam?',
                ]
            ]
                );
    }
}
