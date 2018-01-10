<?php
namespace App;
use Illuminate\Support\Facades\DB;
use App\Hoster;
/**
 * Here is main logic for working with DB
 *
 * Class make some methods for working with database and models
*/
class IndexQueries {
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
public function getTopHosters($limit=10){
  $hosters = DB::table('hosters')
  ->join('raitings','hosters.hoster_id','=','raitings.hoster_id')
  ->select('name','hosters.hoster_id')
  ->orderBy('rait')
  ->limit($limit)
  ->get();
  return $hosters;
}
public function getTopHostersByRegion($region='UK',$limit=10){
  $hosters = DB::table('hosters')
  ->join('raitings','hosters.hoster_id','=','raitings.hoster_id')
  ->join('regions','regions.id','=','hosters.region')
  ->select('name','hosters.hoster_id')
  ->where('regions.region','=',$region)
  ->orderBy('rait')
  ->limit($limit)
  ->get();
  return $hosters;
}
}