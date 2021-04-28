<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\HasApiTokens;
use Illuminate\Http\Request;
use App\Models\Devices;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
class MemberController extends Controller
{
    //
    public function addData(Request $req)
    {

    $devices=new Devices;
    $devices->name=$req->name;
    $devices->member_id=$req->member_id;
    $devices->email=$req->email;
    $devices->address=$req->address;
    $devices->save();
        $data=Devices::all();
        return view('list',['devicess'=>$data]);
       $token = $devices->createToken('pizzahouse');
       $response=array("responseCode"=>'200' , "msg"=>"Successfull" , "toen "=> $token);
       return $response;
    }
    public function deleteData($id)
    {
     $data=Devices::find($id);
     $data->delete();
     return redirect('addData');
    } 
  public function operations()
  {
    return DB::table('devicess')->sum('id');
  }
  public function index()
  {
    return Member::all();
  }
  public function indexx()
{
 // return Member::all();
$member=new Member;
$member->name="john";
$member->email="john@test.com";
$member->address="Delhi";
$member->save();
}
public function inde()
{
  return Member::find(3)->getCompany();
}
//public function list()
//{
 // return view('list');
//}
public function showData($id)
{
 // return Devices::find($id);
  $data=Devices::find($id);
  return view('edit',['data'=>$data]);
}
public function update(Request $req)
{
 // return $req->input();
$data=Devices::find($req->id);
$data->name=$req->name;
$data->email=$req->email;
$data->address=$req->address;
$data->save();
return redirect('list');
}
}
