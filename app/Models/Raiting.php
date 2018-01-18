<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raiting extends Model
{
  public $primaryKey = 'hoster_id';
  public function hoster(){
    return $this->belongsTo(Hoster::class,'hoster_id')->withDefault();
  }
}
