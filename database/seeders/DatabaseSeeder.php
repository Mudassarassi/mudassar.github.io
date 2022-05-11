<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\botigas;
use App\Models\quadres;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Employee::factory(10)->create();

        Botigas::factory(4)->create();
        Quadres::factory(20)->create();

        DB::table('botigas')->insert([
            'nom' => Str::random(10),
            'adress' => Str::random(10),
            'capacidad' => (10),
            ]);

    }
}
