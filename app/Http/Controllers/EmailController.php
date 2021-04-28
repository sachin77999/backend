<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\MatchSendEmail;
class EmailController extends Controller
{
    //
  //  function index()
   // {
     //   return "Hello from Index";
   // }
   public function sendEmail()
{
$emailJob = new MatchSendEmail();
dispatch($emailJob);
//MatchSendEmail::dispatchIf($accountActive === true, $options);
//MatchSendEmail::dispatchUnless($accountSuspended === false, $options);
//Queue::push(new MatchSendEmail($options));
}
}
