<?php
namespace App\AbstractClasses;
/**
 * get all info about hoster
 *
 * get info for hoster page
 */
abstract class InfoAboutHoster{
/**
 * using for searchin hoster's info in DB using icolumn url_slug  in hosters table
 * @var String
 */
  public $hoster_url_slug;
/**
 * getting info from database
 * @param  String $hoster_url_slug hoster's url_slug
 * @return Object with full hoster's data
 */
  abstract public function getInfoAboutHoster($hoster_url_slug);
}