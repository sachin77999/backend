<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
$factory->define(App\User::class,function(Faker\Generator $faker){
static $password;
return [
    'name'=>$faker->name,
    'email'=>$faker->unique()->safeEmail,
    'password'=>$password ?: $password=bcrypt('secret'),
    'remember_token'=>str_random(10),
];
});
$factory->define(App\Models\Student::class,function(Faker\Generator $faker){
    static $password;
    return [
        'name'=>$faker->name,
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'email'=>$faker->unique()->safeEmail,
        
    ];
    });
    $factory->define(App\Models\StudentCard::class,function(Faker\Generator $faker){
        static $password;
        return [
           'card_no'=>$faker->numberBetween(12,12),
            
        ];
        });
   