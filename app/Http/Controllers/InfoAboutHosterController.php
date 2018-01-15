<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queries\HosterInfoQueries as HosterInfo;
use App\Models\Hoster as Hoster;

class InfoAboutHosterController extends Controller
{
    public function getInfoAboutHoster($hoster_url_slug=NULL){
      $query = new HosterInfo();
      $query->getInfoAboutHoster($hoster_url_slug);
    }
}
