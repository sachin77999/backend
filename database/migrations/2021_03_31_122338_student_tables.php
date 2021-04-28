<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('students', function (Blueprint $table) {
           $table->increments('id')->unsigned();
           $table->string('name',99);
           $table->string('first_name',99);
           $table->string('last_name',99);
           $table->string('email',99);
            $table->timestamps();
            $table->engine='InnoDB';
        });



        Schema::create('students_card', function (Blueprint $table) {
            $table->increments('id')->unsigned();
           // $table->string('card_no',16);
           // $table->string('first_name',99);
           // $table->string('last_name',99);
           // $table->string('email',99);
            $table->integer('student_id')->unsigned()->unique();
            $table->string('card_no',16);
            $table->timestamps();
             $table->engine='InnoDB';
         });

     Schema::connection('mysql')->table('students_card',function(Blueprint $table){
      $table->foreign('student_id')->references('id')->on('students');
     });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
Schema::dropIfExists('students_card');
Schema::dropIfExists('students');

    }
}
