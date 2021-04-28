<?php

namespace App\Http\Controllers;
use App\Jobs\HardikVerma;
use Illuminate\Http\Request;
use App\Models\QuizData;
class Youtube extends Controller
{
    //
    function index(Request $request)
    {
        //return "Hello from Index";
   // print_r($request->url());
   // echo"Hello from function";
 // if($request->isMethod("get"))
  //{
    //  echo "get request";
  //}   
 //  echo $request->input('name');
   //if(isset($_POST["submit"])){
  //  $curl=curl_init();
    //curl_setopt($curl,CURLOPT_URL,'http://www.google.com');
    //curl_exec($curl);

    $curl=curl_init(); //Initializind Curl

    //Setting up Data on Curl
    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://devandroidquiz.herokuapp.com/category/JAVA",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_TIMEOUT => 30000,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    ),
    ));
    $response = curl_exec($curl); //Executing URL
    $err = curl_error($curl); //Checking If Error Or Not
    curl_close($curl);//Close the curl obj
    
    if($err){
    echo "Error Has Occured" . "error = " . $err;
    }
    else
    $resp=json_decode($response);
   // return $response;
   QuizData::truncate();
        foreach($resp as $key=>$value){
            //Working Fine nOW aDDING iN tHE dATABASE
            Youtube::addDataIntoDatabase($value);
         
    }
    return response("Successfully Sent In Database",200);

}
function addDataIntoDatabase($value){
  //  $quizData=new QuizData;
   // $quizData->category=$value->category;
   // $quizData->question=$value->question;
   // $quizData->correctOption=$value->correctOption;
   // $quizData->save();
   $jobArray=array('category'=>$value->category,'question'=>$value->question,'correctOption'=>$value->correctOption);
$this->dispatch(new HardikVerma($jobArray));
}


}