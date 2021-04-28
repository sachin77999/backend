<?php

namespace App\Http\Controllers;
use App\Models\Device;
use Illuminate\Http\Request;
//use App\Http\Controller\DevicController;
use Validator;
class DeviceController extends Controller
{
    //
 // public function list()
 public function add(Request $req)  
 {
return Device::all();
$device=new Device;
$device->name=$req->name;
$device->member_id=$req->member_id;
$device->email=$device->email;
$device->address=$device->address;
$result=$device->save();
if($result)
{
    return ["Result"=>"Data has been saved"]; 
}
else
{
    return ["Result"=>"operation failed"]; 
}
 
}
public function update(Request $req)
{
   // $actionId = "score_update";
//$actionData = array("team1_score" => 46);
//event(new ActionEvent($actionId, $actionData));
    $device=Device::find($req->id);
    $device->name=$req->name;
    $device->member_id=$req->member_id;
    $device->email=$device->email;
    $device->address=$device->address;
    $result=$device->save();
    if($result)
    {
        return ["result"=>"data is updated"];
    }
    else
    {
        return["result"=>"update operation has been failed"];
    }
    
}
public function delete($id)
{
    $device=Device::find($id);
    $result=$device->delete();
    if($result)
    {
    return ["result"=>"record has been deleted".$id];
    }
    else
    {
    return ["result"=>"delete operation has been deleted"];
    }
}
public function search($name)
{
    return Device::where("name",$name)->get();
}
public function testData(Request $req)
{
    $rules=array(
        "member_id"=>"required|min:2|max:4"
    );
    $validator=Validator::make($req->all(),$rules);
    if($validator->fails())
    {
        return $validator->errors();
    }
    else
    {
     return["x"=>"y"];   
    }
 }
 public function index(Device $key)
 {
   //  return"Hello from DeviceController";
return $key; 
}
}
