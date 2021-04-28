<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
   public  function getData(Request $req)
    {
     //   return "From data will be here";
  //echo "hello";die("connection failed");
   //  return $req->input();
  
  return redirect('profile');
$data=$req->input();
$req->session()->put('users',$data[users]);   
echo session('user');
}
}
