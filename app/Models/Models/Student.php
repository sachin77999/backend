<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   public $timestamps=false;
   protected $table='students';
   protected $primaryKey='id';
   protected $fillable=[
    'name',
    'first_name',
    'last_name',
    'email'
   ];
   public function card()
   {
       return $this->hasOne('App\Models\StudentCard');
   }
}
