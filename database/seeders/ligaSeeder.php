<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class ligaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
                    // Premier League (Inglaterra)
            DB::table('liga')->insert([
                ['liga' => 'Premier League', 'pais_id' => 8], // Inglaterra
                ['liga' => 'Superliga', 'pais_id' => 1], // Argentina
                ['liga' => 'Serie A', 'pais_id' => 10], // italia
                ['liga' => 'La Liga', 'pais_id' => 3], // Chile
                ['liga' => 'Liga MX', 'pais_id' => 5], // México
                ['liga' => 'MLS', 'pais_id' => 9], // Estados Unidos
                ['liga' => 'Primera División Colombia', 'pais_id' => 4], // Colombia
        ]);

    }
}
