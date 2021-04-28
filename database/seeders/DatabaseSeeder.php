<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    //    DB::table('product')->insert([
      // 'name'=>Str::random(10),
     //  'category'=>Str::random(10),
       // ]);
       $this->call(StudentsTableSeeder::class);
    }
}
