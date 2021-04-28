<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\http\Controllers\FileController;
use App\http\Controllers\Users;
//use App\Http\Controllers\DeviceController;
//use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace'=>'App\Http\Controllers'], function () {
    
  
Route::post('login','SachinController@login');
});
//Route::post('/auth/login', function () {
  //  return 'Hello World';
    //});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("data",[dummyAPI::class,'getData']);
Route::get("list",[DeviceController::class,'list']);
//Route::get('list', 'DeviceController@list');
Route::get('list',[Users::class,'list']);
Route::put("update",[DeviceController::class,'update']);
Route::post("add",[DeviceController::class,'add']);
Route::delete("delete/{id}",[DeviceController::class,'delete']);
Route::get("search/{name}",[DeviceController::class,'search']);
Route::post("save",[DeviceController::class,'testData']);
Route::post('upload',[FileController::class,'upload']);
//Route::group(['prefix'=>'auth/'],function(){
    Route::prefix('auth')->group(function () {
       
//    Route::post('login','SachinController@login');
    Route::post('signup','SachinController@signup');
    Route::group([
        'middleware'=>'auth:api'
    ],
    function(){
        Route::get('logout','AuthController@logout');
        Route::get('user','AuthController@user');
    });
});
