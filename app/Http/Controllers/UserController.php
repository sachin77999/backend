<?php

namespace App\Http\Controllers;
use App\Models\Devices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    //
  //  public function index()
   // {
     //   return DB::select("select * from devicess");
       // echo "from from user controller";
    //}
  //  function getData()
    //{
      //  return Devices::all();
   // }
   function index()
   {
    //   return "Api data will be here";
 $collection=Http::get("http://127.0.0.1:8000/devicess");   
return view('devicess',['collection'=>$collection]);
}
public function testRequest(Request $req)
{
  //return "Hello from controller";
  return $req->input();
}
}
