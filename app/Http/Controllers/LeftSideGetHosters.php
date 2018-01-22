<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queries\LeftSideQueries as LeftSide;

class LeftSideGetHosters extends Controller
{
/**
 * instance IndexQueriesClass
 * @var instance
 */
    protected $query;


    public function __construct(LeftSide $query)
    {
        // Dependencies automatically resolved by service container...
        $this->query = $query;
    }
    public function top(){
      return view('pages.hosters')->with('hosters',$this->query->getTopHosters());
    }
    public function top_by_region($region){
      return view('pages.hosters')->with('hosters',$this->query->getTopHostersByRegion($region));
    }
    public function top_by_kind($kind){
      return view('pages.hosters')->with('hosters',$this->query->getTopHostersByKind($kind));
    }
}
