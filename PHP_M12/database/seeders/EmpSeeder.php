<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class EmpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('emp')->insert([
            'name' => 'Mudassar',
            'email' => 'mudasar@yahoo.com',
            'job' => 'programmer',
            'adress' => 'asdf'
        ]);
        DB::table('emp')->insert([
            'name' => str::random(10),
            'email' => str::random(10).'@yahoo.com',
            'job' => str::random(10),
            'adress' => str::random(10)
        ]);

    }
}
