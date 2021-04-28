<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryStatePopulationModel extends Model
{
    use HasFactory;
   public $timestamps=false;
   protected $table="states_census";
   protected $primaryKey = 'state_id';
   protected $fillable = ['country_id', 'state_name', 'state_population'];
   public function country()
    {
        return $this->belongsTo(CountryPopulationModel::class, 'country_id', 'country_id');
    }

}
