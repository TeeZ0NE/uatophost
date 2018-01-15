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
}
