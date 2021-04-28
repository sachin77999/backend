<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Members extends Controller
{
    //
    public function dbOperations()
    {
        return (array)DB::table('devicess')
         ->where('id',22)
         ->update(
         [   'name'=>'anilll',
            'email'=>'anil@gmail.com',
            'address'=>'usa',
            'member_id'=>'21'
         ]
            );
        
      //  return DB::table('devicess')->get();
            //->where('id',4)
      //  ->get();
  //  return view('list',['data'=>$data]);
    }
}
