<?php

namespace App\Http\Controllers;
use Validator;
use App\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class SachinController extends Controller
{
    

    public function signup(Request $request)
    {
        echo "heloo";die;
        $request=validate([
      'name'=>'required',
      'email'=>'required|string|unique:users',
      'password'=>'required|string|confirmed'
        ]);
        $user=new User([
      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>bcrypt($request->password)
        ]);
        $user->save();
    }
    //public function login(Request $request)
    public function login(LoginFormRequest $request)
    {
        //die("connection ");
      // echo "sachin soni"; die("connection failde");
       // $request=validate([
         //   'name'=>'required',
           // 'email'=>'required|string',
           // 'remember'=>'boolean'
        //]);
        $credentials=request('email','password');
        if(!Auth::attempt($credentials))
        return response()->json(['message'=>'Unauthorized'],401);
        $user=$request->user();
        $tokenRes=$user->createToken('Personal Access Token');
        $token=$tokenRes->token;

        if($request->remember_me)
        $token->expires_at=Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token'=>$tokenResult->accessToken,
            'token_type'=>'Bearer',
            'expires_at'=>Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
}