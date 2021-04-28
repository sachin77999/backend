<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    public function add(Request $req)

    {
  // return $req->input();
$data=$req->input('user');    
$req->session()->flash('user',$data);
return redirect('add');
}
public function addMember(Request $req)
{
  return $req->input();
}
}
