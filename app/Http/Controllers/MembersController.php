<?php

namespace App\Http\Controllers;
use App\Models\Devices;
use Illuminate\Http\Request;
use App\Models\Member;
class MembersController extends Controller
{
    public function show()
    {
        $data=Devices::paginate(10);
      //  $data=Devices::all();
        return view('list',['devicess'=>$data]);
    }
    
}
