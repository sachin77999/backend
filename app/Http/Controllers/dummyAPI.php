<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"sachin","email"=>"sachinsoni77999@gmail.com","address"=>"hoshiarpur"];
    }
}
