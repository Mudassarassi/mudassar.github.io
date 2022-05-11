<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BotigasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('botigas')->insert([
            'nom' => Str::random(10),
            'adress' => Str::random(10),
            'capacidad' => (10),
        ]);
    }
}
