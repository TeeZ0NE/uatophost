<?php

namespace App\Http\Controllers;
use App\AbstractClasses\AbstractPromotions;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends AbstractPromotions
{
protected function allPromotions(){
  $this->all_promotions = DB::table('promotions')
  ->where('promo_display',1)
  ->select(
    'title as promo_title',
    'promo_text',
    'name as hoster_name',
    'url_slug as hoster_url_slug',
    'promo_start',
    'promo_end')
  ->join('hosters','promotions.hoster_id','=','hosters.hoster_id')
  ->orderBy('promo_start')
  ->get();
  return $this->all_promotions;
}
public function getAllPromotions(){
  return view('pages.promotions')->with('all_promotions',$this->allPromotions());
}
}
