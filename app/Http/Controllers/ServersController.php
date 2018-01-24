<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Queries\Queries;
class ServersController extends Controller
{
    private $query;
public function __construct(Queries $query){
  $this->query = $query;
}
public function getHostersByKindsServers(){
return view('pages.servers')->with([
  'vps_servers'=>$this->query->getTopHostersByKind('vps-server'),
  'vds_servers'=>$this->query->getTopHostersByKind('vds-server')
]);
 }
}
