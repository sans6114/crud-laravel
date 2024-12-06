<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class paisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pais')->insert([
         ['pais' => 'Argentina'],
         ['pais' => 'Brasil'],
         ['pais' => 'Chile'],
         ['pais' => 'Colombia'],
         ['pais' => 'México'],
         ['pais' => 'Perú'],
         ['pais' => 'Uruguay'],
         ['pais' => 'Inglaterra'],
         ['pais' => 'Estados Unidos'],
         ['pais' => 'Italia'],
        ]);
    }
}
