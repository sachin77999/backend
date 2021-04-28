<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function UserLogin(Request $req)
    {
        $data=$req->input();
       // return $req->input();
      $req->session()->put('user',$data['user']);
      echo session('user');
    return redirect('profile');
    }
}
