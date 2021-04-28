<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryPopulationModel extends Model
{
    use HasFactory;
   public $timestamps=false;
   protected $table="countries_census";
    protected $primaryKey = 'country_id';
    protected $fillable = ['country_name', 'total_population'];
    public function states()
    {
        return $this->hasMany(CountryStatePopulationModel::class, 'country_id', 'country_id');
    }
}
