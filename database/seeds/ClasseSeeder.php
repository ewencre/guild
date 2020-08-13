<?php

use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'nom' => 'Guerrier',
        ]);
        DB::table('classes')->insert([
            'nom' => 'Mage',
        ]);
        DB::table('classes')->insert([
            'nom' => 'Prêtre',
        ]);
        DB::table('classes')->insert([
            'nom' => 'Chasseur',
        ]);
    }
}
