<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class seederExamen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            'dni' => Str::random(10),
        ]);
        DB::table('alumnos')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            'dni' => Str::random(10),
        ]);
        DB::table('alumnos')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            'dni' => Str::random(10),
        ]);
    }
}
