<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesCensusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries_census', function (Blueprint $table) {
            //$table->id();
         //   $table->increments('id');
           // $table->timestamps();
           $table->bigIncrements('country_id');
           $table->text('country_name');
           $table->unsignedInteger('total_population');
           $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries_census');
    }
}
