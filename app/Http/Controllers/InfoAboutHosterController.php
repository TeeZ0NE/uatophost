<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbstractClasses\InfoAboutHoster;
use App\Models\Hoster as Hoster;
use Exception;
/**
 * Here are all information about hoster to user
 */
class InfoAboutHosterController extends InfoAboutHoster
{
  public function __construct(Hoster $hoster){
    $this->hoster = $hoster;
  }

  protected function mainInfo($hoster_url_slug){
    $this->hoster_main_info = $this->hoster->where('url_slug',$hoster_url_slug)->get();
    return $this->hoster_main_info;
  }

  public function getMainInfoAboutHoster($hoster_url_slug=NULL){
    // TODO: what to do if hoster url slug is empty
    $hoster_main_info = $this->mainInfo($hoster_url_slug)[0];
    $hoster_id = $hoster_main_info->hoster_id;

    $locations = json_decode($this->getLocations($hoster_id),true);
    $raiting   = $this->getRaiting($hoster_id);
    $region    = $this->getRegion($hoster_id);

    return view('pages.info_about_hoster',
      compact('hoster_main_info','raiting','region','locations'));
  }
  
  protected function getRaiting($hoster_id){
    return $this->hoster->find($hoster_id)->raiting->rait;
  }

  protected function getRegion($hoster_id){
    return $this->hoster->find($hoster_id)->getRegion->region;
  }

  protected function getLocations($hoster_id){
     // TODO: Field location switch to required
     return $result = $this->hoster->find($hoster_id)->getLocations->location;
  }

}

