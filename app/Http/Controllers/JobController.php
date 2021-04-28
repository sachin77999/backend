<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmail;

class JobController extends Controller
{
    //
   // function index()
    //{
      //  return "Hello from Index";
   // }
   public function processQueue()
   {
       $emailJob = new SendWelcomeEmail();
       dispatch($emailJob);
       
   }
}
