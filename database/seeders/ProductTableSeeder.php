<?php

namespace Database\Seeders;
use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            'name'=>Str::random(10),
            'category'=>Str::random(10),
             ]);
    }
}
