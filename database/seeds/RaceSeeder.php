<?php

use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'nom' => 'Humain',
        ]);
        DB::table('races')->insert([
            'nom' => 'Elfe',
        ]);
        DB::table('races')->insert([
            'nom' => 'Nain',
        ]);
        DB::table('races')->insert([
            'nom' => 'Orc',
        ]);
    }
}
