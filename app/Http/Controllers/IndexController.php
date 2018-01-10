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
   $top_hosters_summary =  $query->getTopHosters();
   //gte top hosters by region
  $top_hosters_by_region_ru = $query->getTopHostersByRegion('RU');
  $top_hosters_by_region_uk = $query->getTopHostersByRegion('UK');

   return view('index',compact('top_hosters_summary', 'top_hosters_by_region_ru', 'top_hosters_by_region_uk'));
 }
}
