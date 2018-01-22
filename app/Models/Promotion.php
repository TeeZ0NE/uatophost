<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
 public function hoster() {
  return $this->belongsTo(Hoster::class,'hoster_id');
 }
}
