<?php
namespace App\Queries;
use Illuminate\Support\Facades\DB;
use App\Models\Hoster;
use App\AbstractClasses\AbstractIndexQueries;
/**
 * Here is main logic for working with DB
 *
 * Class make some methods for working with database and models
*/
class IndexQueries extends AbstractIndexQueries{

protected function topHosters($limit){
  $this->hosters = DB::table('hosters')
  ->join('raitings','hosters.hoster_id','=','raitings.hoster_id')
  ->select('name','url_slug')
  ->orderBy('rait')
  ->limit($limit)
  ->get();
  return $this->hosters;
}

protected function topHostersByRegion($region,$limit){
  $this->hosters = DB::table('hosters')
  ->join('raitings','hosters.hoster_id','=','raitings.hoster_id')
  ->join('regions','regions.id','=','hosters.region')
  ->select('name','url_slug')
  ->where('regions.region','=',$region)
  ->orderBy('rait')
  ->limit($limit)
  ->get();
  return $this->hosters;
}

protected function topHostersByKind($kind,$limit){
  $this->hosters = DB::table('types_of_hostings')
  ->select('hosters.name','hosters.url_slug')
  ->join('hosters','types_of_hostings.hoster_id','=','hosters.hoster_id')
  ->join('kind_of_hostings','types_of_hostings.kind_of_hosting_id','=','kind_of_hostings.kind_id')
  ->join('raitings','raitings.hoster_id','=','hosters.hoster_id')
  ->where('kind_of_hostings.caption','=',$kind)
  ->orderBy('rait')
  ->limit($limit)
  ->get();
  return $this->hosters;
}
public function getTopHosters($limit=10){
  $this->hosters= $this->topHosters($limit);
  return $this->hosters;
}

public function getTopHostersByRegion($region="UK",$limit=10){
  $this->hosters = $this->topHostersByRegion($region,$limit);
  return $this->hosters;
}
public function getTopHostersByKind($kind='vps',$limit=5){
  $this->hosters=$this->topHostersByKind($kind,$limit);
  return $this->hosters;
}
}