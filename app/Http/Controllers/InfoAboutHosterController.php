<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\AbstractClasses\AbstractInfoAboutHoster;
use App\Models\Hoster as Hoster;
// use Exception;
use Illuminate\Support\Facades\DB;
/**
 * Here are all information about hoster to user
 */
class InfoAboutHosterController extends AbstractInfoAboutHoster
{
  public function __construct(Hoster $hoster){
    $this->hoster = $hoster;
  }

  protected function mainInfo($hoster_url_slug){
    $this->hoster_main_info = $this->hoster->where('url_slug',$hoster_url_slug)->get();
    return $this->hoster_main_info;
  }

  public function getMainInfoAboutHoster($hoster_url_slug=NULL){
    //hoster slug is empty
    if (empty($hoster_url_slug)){
      $hosters = $this->hosters();
      return view('pages.hosters')->with('hosters',$hosters);
    };
        // hoster found in DB
    if (count($this->mainInfo($hoster_url_slug))){
      $hoster_main_info = $this->mainInfo($hoster_url_slug)[0];
      $hoster_id = $hoster_main_info->hoster_id;

      $locations   = json_decode($this->getLocations($hoster_id),true);
      $promotions  = $this->promotions($hoster_id);
      $raiting     = $this->getRaiting($hoster_id);
      $region      = $this->getRegion($hoster_id);
      $types_kinds = $this->getTypesAndKindsHostings($hoster_id);

      return view('pages.info_about_hoster',
        compact('hoster_main_info','raiting','region','locations','types_kinds','promotions'));
    }
    else {return view('pages.info_about_hoster',
      ['error_text'=>'Hoster doesn\'t exist',
      'error_class'=>'warning']);}
  }

protected function getRaiting($hoster_id){
  return $this->hoster->find($hoster_id)->raiting->rait;
}

protected function getRegion($hoster_id){
  return $this->hoster->find($hoster_id)->getRegion->region;
}

protected function getLocations($hoster_id){
     // TODO: Field location switch to required
 return $this->hoster->find($hoster_id)->getLocations->location;
}
protected function typesAndKindsHostings($hoster_id){
 $this->types_kinds =  DB::table('types_of_hostings')
 ->where('hoster_id',$hoster_id)
 ->join('kind_of_hostings','kind_of_hosting_id','=','kind_id')
 ->select(
  'name',
  'caption',
  'kind_of_hostings.url_slug as wiki_url_slug',
  'types_of_hostings.url_slug as hosting_tarif_url_slug')
 ->get();
 return $this->types_kinds;
}
public function getTypesAndKindsHostings($hoster_id){
  return $this->typesAndKindsHostings($hoster_id);
}
protected function promotions($hoster_id){
  return $this->hoster->find($hoster_id)->promotions;
}
protected function hosters(){
  return $this->hoster->all('name','url_slug');
}

}

