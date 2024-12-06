<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class equipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipos')->insert([
            ['nombre' => 'Chelsea', 'liga_id' => 1, 'pais_id' => 8],
            ['nombre' => 'Manchester United', 'liga_id' => 1, 'pais_id' => 8],
            ['nombre' => 'Liverpool', 'liga_id' => 1, 'pais_id' => 8],
            ['nombre' => 'Manchester City', 'liga_id' => 1, 'pais_id' => 8],
            ['nombre' => 'Tottenham Hotspur', 'liga_id' => 1, 'pais_id' => 8],
            ['nombre' => 'Arsenal', 'liga_id' => 1, 'pais_id' => 8],
            ['nombre' => 'West Ham United', 'liga_id' => 1, 'pais_id' => 8],
            ['nombre' => 'Leeds United', 'liga_id' => 1, 'pais_id' => 8],
            //estados unidos
            ['nombre' => 'LA Galaxy', 'liga_id' => 6, 'pais_id' => 9],
            ['nombre' => 'New York City FC', 'liga_id' => 6, 'pais_id' => 9],
            ['nombre' => 'Seattle Sounders FC', 'liga_id' => 6, 'pais_id' => 9],
            ['nombre' => 'Atlanta United FC', 'liga_id' => 6, 'pais_id' => 9],
            //argentina
            ['nombre' => 'Boca Juniors', 'liga_id' => 2, 'pais_id' => 1],
            ['nombre' => 'River Plate', 'liga_id' => 2, 'pais_id' => 1],
            ['nombre' => 'Independiente', 'liga_id' => 2, 'pais_id' => 1],
            ['nombre' => 'Racing Club', 'liga_id' => 2, 'pais_id' => 1],
            ['nombre' => 'San Lorenzo', 'liga_id' => 2, 'pais_id' => 1],
            ['nombre' => 'Vélez Sarsfield', 'liga_id' => 2, 'pais_id' => 1],
            ['nombre' => 'Estudiantes de La Plata', 'liga_id' => 2, 'pais_id' => 1],
            ['nombre' => 'Talleres de Córdoba', 'liga_id' => 2, 'pais_id' => 1],
            // italia
            ['nombre' => 'Juventus', 'liga_id' => 3, 'pais_id' => 8],
            ['nombre' => 'Roma', 'liga_id' => 3, 'pais_id' => 8],
        ]);
    }
}
