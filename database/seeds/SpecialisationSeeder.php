<?php

use Illuminate\Database\Seeder;

class SpecialisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialisations')->insert([
            'nom' => 'Arme',
            'classe_id' => '1',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Fureur',
            'classe_id' => '1',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Protection',
            'classe_id' => '1',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Givre',
            'classe_id' => '2',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Feu',
            'classe_id' => '2',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Arcane',
            'classe_id' => '2',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Sacré',
            'classe_id' => '3',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Discipline',
            'classe_id' => '3',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Ombre',
            'classe_id' => '3',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Précision',
            'classe_id' => '4',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Maîtrise des Bêtes',
            'classe_id' => '4',
        ]);
        DB::table('specialisations')->insert([
            'nom' => 'Survie',
            'classe_id' => '4',
        ]);
    }
}
