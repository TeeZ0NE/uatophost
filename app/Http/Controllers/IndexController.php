<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IndexQueries;

class IndexController extends Controller
{
  private $query;

  public function index(){
   $query = new IndexQueries();
    //get top hosters
   $top_hosters_summary            = $query->getTopHosters();
    //gte top hosters by region
   $top_hosters_by_region_ru       = $query->getTopHostersByRegion('RU');
   $top_hosters_by_region_uk       = $query->getTopHostersByRegion('UK');
    //get top hosters by kind (vps, vds)
   $top_hosters_by_kind_vps        = $query->getTopHostersByKind('vps',10);
   $top_hosters_by_kind_vds        = $query->getTopHostersByKind('vds',5);
   $top_hosters_by_kind_vps_server = $query->getTopHostersByKind('vps server',5);

   return view('index',compact('top_hosters_summary', 'top_hosters_by_region_ru', 'top_hosters_by_region_uk','top_hosters_by_kind_vps','top_hosters_by_kind_vds','top_hosters_by_kind_vps_server'));
 }
}
