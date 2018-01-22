<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\DB;

class Hoster extends Model
{
  public $primaryKey = 'hoster_id';
  /**
   * get actual hoster's raitng
   * @return Int
   */
  public function raiting(){
    return $this->hasOne(Raiting::class,'hoster_id')->select('rait');
  }
  /**
   * where hoster from
   * @return String
   */
  public function getRegion(){
    return $this->hasOne(Region::class,'id','region')->select('region');
  }
  /**
   * get location where hoster has servers
   * @return String in json
   */
  public function getLocations(){
    return $this->hasOne(Location::class,'hoster_id')->select('location');
  }
  /**
   * get promotion(s)
   * @return Object
   */
  public function promotions(){
    return $this->hasMany(Promotion::class,'hoster_id')
    ->where('promo_display',1)
    ->select('id','title','promo_start','promo_end','promo_text')
    ->orderBy('promo_start');
  }
}
