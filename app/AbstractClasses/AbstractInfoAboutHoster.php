<?php
namespace App\AbstractClasses;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
/**
 * get all info about hoster
 *
 * get info for hoster page
 */
abstract class AbstractInfoAboutHoster extends Controller{
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
 * object with name and caption about types and kinds
 * @var Object
 */
protected $types_kinds;
/**
 * all promotions for all hosters
 * @var Object
 */
protected $all_promotions;
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
/**
 * getting from database types (tarif name) and kind (vps, shared)
 *
 * join with table kind_of_hosting
 * @param  Int $hoster_id hoster id's
 * @return Object with 'name' and 'caption' for current hoster
 */
abstract protected function typesAndKindsHostings($hoster_id);
/**
 * return into view
 * @param  Int $hoster_id hoster id's
 * @return Object  with 'name' and 'caption'
 */
abstract public function getTypesAndKindsHostings($hoster_id);
/**
 * get promotion(s) hoster
 * @param  Int $hoster_id hoster id's
 * @return Object 
 */
abstract protected function promotions($hoster_id);
/**
 * return all hosters if slug is empty
 * @return Object hoser's name and url slug
 */
abstract protected function hosters();

}