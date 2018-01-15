<?php
namespace App\Queries;
use Illuminate\Support\Facades\DB;
use App\AbstractClasses\InfoAboutHoster;
class HosterInfoQueries extends InfoAboutHoster {

 public function getInfoAboutHoster($hoster_url_slug) {

  $this->hoster_url_slug = $hoster_url_slug;

  if(is_null($this->hoster_url_slug)){
    echo 'doesn\'t found hoster with null';
  } else {
    echo $this->hoster_url_slug . 'class';
  }//end else hoster_slug is null
 }
}
