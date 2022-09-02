<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'team_name' => 'Brasil',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/brasil.svg'
            ],
            [
                'team_name' => 'Costa Rica',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/costa_rica.svg'
            ],
            [
                'team_name' => 'Portugal',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/portugal.svg'
            ],
            [
                'team_name' => 'Espanha',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/espanha.svg'
            ],
            [
                'team_name' => 'Argentina',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/argentina.svg'
            ],
            [
                'team_name' => 'França',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/franca.svg'
            ],
            [
                'team_name' => 'Alemanha',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/alemanha.svg'
            ],
            [
                'team_name' => 'México',
                'victories' => 0,
                'defeats' => 0,
                'flag' => 'images/flags/mexico.svg'
            ]
        ]);
    }
}
