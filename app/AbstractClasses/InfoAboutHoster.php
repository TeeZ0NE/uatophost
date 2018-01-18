<?php
namespace App\AbstractClasses;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
/**
 * get all info about hoster
 *
 * get info for hoster page
 */
abstract class InfoAboutHoster extends Controller{
/**
 * using for searchin hoster's info in DB using icolumn url_slug  in hosters table
 * @var String
 */
public $hoster_url_slug;
/**
 * main info from hoster table
 * @var String
 */   
public $hoster_main_info;
/**
 * hoster id's
 * @var Int
 */
protected $hoster_id;
/**
 * instance to hoster's model Hoster
 * @var Object
 */
protected $hoster;
/**
 * getting info from database
 * @param  String $hoster_url_slug hoster's url_slug
 * @return Object with full hoster's data
 */
abstract public function getMainInfoAboutHoster($hoster_url_slug);
/**
   * get hoster raiting
   * @param  Int $hoster_id hoster id's
   * @return Int            hoster raiting
   */
abstract protected function getRaiting($hoster_id);
 /**
   * [getRegion description]
   * @param  Int $hoster_id hoster id's
   * @return String            string like 'RU','UA'
   */
abstract protected function getRegion($hoster_id);
/**
 * where hoster has servers, like Ru,Ua
 * @param  Int $hoster_id hoster's id's
 * @return Json            getting regions with array where locate servers, if applicable, expl - "ru":["Moscow","Kyiv"]
 */
abstract protected function getLocations($hoster_id);

}