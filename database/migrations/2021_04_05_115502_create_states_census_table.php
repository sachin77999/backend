<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesCensusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states_census', function (Blueprint $table) {
            //$table->id();
           // $table->increments('id');
           // $table->timestamps();
           $table->bigIncrements('state_id');
           $table->text('state_name');
           $table->unsignedInteger('country_id');
           $table->unsignedInteger('state_population');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states_census');
    }
}
