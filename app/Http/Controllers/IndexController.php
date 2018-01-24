<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Queries\Queries;
// include_once('./../../Libs/url_slug.php');
// include_once('app_path()/Libs/test.php');

class IndexController extends Controller
{
//   private $query;
// public function __construct(Queries $query){
//   $this->query = $query;
// }
  public function index(){
   // $query = new IndexQueries();
    //get top hosters
   // $top_hosters_summary            = $query->getTopHosters();
   //  //gte top hosters by region
   // $top_hosters_by_region_ru       = $query->getTopHostersByRegion('RU');
   // $top_hosters_by_region_uk       = $query->getTopHostersByRegion('UK');
   //  //get top hosters by kind (vps, vds)
   // $top_hosters_by_kind_vps        = $query->getTopHostersByKind('shared',10);
   // $top_hosters_by_kind_vds        = $query->getTopHostersByKind('vds server',5);
   // $top_hosters_by_kind_vps_server = $query->getTopHostersByKind('vps server',5);
   // return view('pages.index',compact('top_hosters_summary', 'top_hosters_by_region_ru', 'top_hosters_by_region_uk','top_hosters_by_kind_vps','top_hosters_by_kind_vds','top_hosters_by_kind_vps_server'));
   return view('pages.index');
 }
public function fileUpload(Request $request) {
  $this->validate($request, [

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);


    $image = $request->file('image');

    $input['imagename'] = 'my_image_name'.'.'.$image->getClientOriginalExtension();

    $destinationPath = public_path('/images/hosters_logo');

    $image->move($destinationPath, $input['imagename']);


    // $this->postImage->add($input);


    return back()->with('success','Image Upload successful')->with('path',$input['imagename']);
 }
}
