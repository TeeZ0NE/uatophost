<?php
namespace App\AbstractClasses;
/**
 * Abstract queries to DB placed here
 */
abstract class AbstractIndexQueries{
  /**
 * list of hosters
 * @var Object
 */
  public $hosters;

/**
 * getting top hosters on index page
 * @var $limit INT limit of count result
 *     
 * @return JSON object with name and ID max 10 hosters
 */
protected $limit;

/**
 * where is located hoster
 * @var string
 */
protected $region;

/**
 * kind of hoster, like vps, vds, vds server
 * @var String
 */
protected $kind;

/**
 * gettin data from tables(hosters and raitings) to get max-count($limit) hosters with columns (name and hoster id)
 * @param  INT $limit max-count of hosters
 * @return Object        object with name
 */
abstract protected function topHosters($limit);

/**
 * get array of topHosters from defined region
 * @param  String $region where hoster locate, exp. "UK" or "RU"
 * @param  Int $limit  max-count hosters in result
 * @return Object  object with name
 */
abstract protected function topHostersByRegion($region,$limit);

/**
 * get from DB top of hosters by kind, like 'vps','vds server'
 * @param  String $kind  kind of hoster, 'vps' etc.
 * @param  Int $limit max count of hosters to result
 * @return Object  object with hoster name ordered by rating filtered by kind of hosting
 */
abstract protected function topHostersByKind($kind,$limit);

/**
 * returnin result of topHosters
 * @param  Int $limit max count hosters in result
 * @return Object 
 */
abstract public function getTopHosters($limit);

/**
 * result to view of topHosters summary
 * @param  String $region where is hoster locate
 * @param  Int $limit  max count hosters in result
 * @return Object  
 */
abstract public function getTopHostersByRegion($region,$limit);

/**
 * returning to controller result of topHostersByKind
 * @param  String $kind  kind of hosting, like 'vds','vps'
 * @param  Int $limit max count to return results
 * @return Object        Object with hoster name 
 */
abstract public function getTopHostersByKind($kind,$limit);
}