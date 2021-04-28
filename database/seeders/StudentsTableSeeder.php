<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     //   factory(App\Models\Student::class,10)->create()->each(function($student){
     \App\Models\Student::factory()->count(10)->create();
        $student->card()->save(factory(App\Models\StudentCard::class)->make());
       // });
    }
}
