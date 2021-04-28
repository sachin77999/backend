<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false;
public function getNameAttribute($value)
{
    return ucFirst($value);
}
public function getAddressAttribute($value)
{
    return $value.',India';
}
public function setNameAttribute($value)
{
    $this->attributes['name']="Mr".$value;
}
public function setAddressAttribute($value)
{
    $this->attributes['address']=$value.". India";
}
public function getCompany()
{
    return $this->hasOne('App\Models\Company');
}


}
