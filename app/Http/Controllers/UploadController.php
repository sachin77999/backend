<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index(Request $req)
    {
    //return "Hello from controller";
return $req->file('file')->store('docs');  
}
}
