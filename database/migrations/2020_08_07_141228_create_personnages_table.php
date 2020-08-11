<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pseudo');
            $table->integer('race_id')->unsigned();
            $table->integer('classe_id')->unsigned();
            $table->integer('armure_id')->unsigned();
            $table->string('proprietaire');
            $table->integer('pdv');
            $table->timestamps();
        });
        
        Schema::table('personnages', function($table) {
            $table->foreign('race_id')->references('id')->on('races');
            $table->foreign('classe_id')->references('id')->on('classes');
            $table->foreign('armure_id')->references('id')->on('armures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
}
