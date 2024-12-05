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
            ['nombre' => 'Chelsea', 'liga_id' => 1, 'capacidad_id' => 1],
        ]);
    }
}
