<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airpots', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // varchar(255)
            $table->string('country'); // varchar(255)
            $table->string('city'); // varchar(255)
            $table->date('d/m/Y'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airpots');
    }
}
