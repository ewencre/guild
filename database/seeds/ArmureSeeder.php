<?php

use Illuminate\Database\Seeder;

class ArmureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armures')->insert([
            'nom' => 'Tissu',
        ]);
        DB::table('armures')->insert([
            'nom' => 'Cuir',
        ]);
        DB::table('armures')->insert([
            'nom' => 'Métal',
        ]);
    }
}
