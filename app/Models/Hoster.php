<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\DB;

class Hoster extends Model
{
  public $primaryKey = 'hoster_id';
  public function raiting(){
    return $this->hasOne(Raiting::class,'hoster_id')->select('rait');
  }
  public function getRegion(){
    return $this->hasOne(Region::class,'id','region')->select('region');
  }
  public function getLocations(){
    return $this->hasOne(Location::class,'hoster_id')->select('location');
  }
}
