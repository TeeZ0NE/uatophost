<?php
namespace App\AbstractClasses;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;

abstract class AbstractPromotions extends Controller{
  protected $hoster_id;
/**
 * all promotions for all hosters
 * @var Object
 */
protected $all_promotions;
/**
 * returning all promotions with hoster's url_slugs as h_url_slug, hoster names, promo (text,title) filter by promo_display order by promo_start
 * @return Object
 */
abstract protected function allPromotions() ;
/**
 * return for allPromotions
 * @return Object 
 */
abstract public function getAllPromotions();
}