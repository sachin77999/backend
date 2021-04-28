<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCard extends Model
{
    use HasFactory;
   public $timestamps=false;
   protected $table='students_card';
   protected $primaryKey='id';
   protected $fillable=[
    'student_id',
    'card_no',

   ];

}
