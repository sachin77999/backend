<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companyy;
class Companies extends Controller
{
    //
    function update(Request $req)
    {
        // $company=new Company();
        // $company->name=$req->name;
        // $company->address=$req->address;
        // echo $company->save();

       // return "Hello from Index";
    $cmp=Companyy::find($req->id);
    $cmp->name=$req->name;
    $cmp->address=$req->address;
    $cmp->save();
       print_r($req->input());
   // echo Companyy::where('name','samsung')
     //->update(['address'=>'USA']);    
}
}
