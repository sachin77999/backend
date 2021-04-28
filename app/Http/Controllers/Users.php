<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    //
    public function index(Request $req)
    {
    //    echo "100 users";
        //return "Hello from Index";
  //  return ['id'=>$id,'name'=>"sachin soni"];
  print_r($req->input());
  echo $req->fullUrl();
   // return view('Mobiles',['name'=>"sachin soni"]);    
}
public function submit(Request $request)
{
    $request->validate([
    "user"=>"required",
    "phone"=>"min:10",
    "password"=>"min:2 | max:5"
    ]);
   // print_r($request->input());
    return $request->input();
}
public function dbCheck()
{
  //  return DB::select('select * from User');
  //  print_r($users);
$users=DB::table('user')
->select('company.name','user.email')
->join('company','user.id','company.employee_id')
->where('company.name','microsoft')->get();
print_r($users);
//->max('id');
//->where('name','sam')
//->insert([
//    'name'=>'sam',
  //  'email'=>'sam@test',
    //'address'=>'gurgaon'
//]);
//print_r($users);
//->update([
  //  'email'=>'sam@test.com'
//]);
//->delete();
//->where('name','bruce')
//->get();
//print_r($users);
}
public function sachin()
{
    echo "Hi Model";
  //return users:all();
}
public function indexx($id)
{
  return view('Mobiles',['name'=>"sachin soni"]);
 // return ['id'=>$id,'name'=>"sachin soni"];
}
public function rohan(Request $req)
{
  echo $req->method();
  if($req->isMethod('GET'))
  {
    echo "if";
  }
  else
  {
    echo "else";
  }
  print_r($req->input());
}
public function soni()
{
  $data=['name'=>'anil','email'=>'anil@test.com',
  'head'=>'<h1>Break the rock</h1>'
];
 // return Userss::all();
  //echo "Hi Model";
  return view('users',['data'=>$data]);
}
function mukerian(Request $req)
{
  print_r($req->file('user_img')->store('uploads'));
}
//public function list()
//{
//  return User::all();
  //echo "Code will be here";
 
//}
}
