<?php
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Youtube;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Users;
use App\Http\Controllers\Companies;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Members;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('ageChecker');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);
Route::get('/hardik',function(){
return view('hardik');
});
Route::post('/send',[Youtube::class,'index']);
Route::view("login",'user');
Route::post("users",[UserController::class,'testRequest']);
Route::view("login",'loginn');
Route::post("user",[UserAuth::class,'userLogin']);
Route::view("profile",'profile');
Route::view("profile","profile");
Route::get('/logout',function(){
if(session()->has('user'))
{
    session()->pull('user');
}
return redirect('login');
});
Route::get('/login',function(){
    if(session()->has('user'))
    {
      //  session()->pull('user');
    return redirect('profile');
    }
    return view('login');
    });
    //Route::view('add','add');
    //Route::post("addmember",[AddMember::class,'add']);
    Route::view('add','add');
    Route::post("addmember",[AddMember::class,'add']);
    Route::view('upload','upload');
    Route::post('upload',[UploadController::class,'index']);
    //Route::view('profile','profile');
Route::get('/profile{lang}',function($lang){
App::setlocale($lang);
    return view('profile');
});
Route::get("users",[Users::class,'index']);
//Route::view('/mobiles','Mobiles');
Route::view('/userview',"user");
//Route::post('/usercontroller',[Users::class,'submit']);
Route::get('db',[Users::class,'dbCheck']);
Route::get('db',[Users::class,'sachin']);
Route::view('user','users');
Route::view('company','company');
Route::view('form','companyform');
Route::post('submit',[Companies::class,'save']);
Route::view('form','companyview');
Route::post('update',[companies::class,'update']);
Route::get('/youtube/{id}',function($id){
return view('youtube',["id"=>$id]);
//return $id;

});
Route::redirect('/here','/welcome');
Route::get("users/{id}",[Users::class,'indexx']);
Route::view('/mobiles','Mobiles');
Route::get("users",[Users::class,'rohan']);
Route::post('/usercontroller',[Users::class,'submit']);
Route::get('/',function(){
return view('welcome');
})->middleware('ageChecker');
Route::get('db',[Users::class,'dbCheck']);
Route::get('db',[Users::class,'soni']);
Route::post('upload',[Users::class,'mukerian']);
Route::view('from','userform');
Route::get('db',[Users::class,'chitkara']);
Route::get('list',[MembersController::class,'show']);
Route::view('add','addmember');
Route::post('add',[MemberController::class,'addData']);
//Route::get('list',[MemberController::class,'list']);
//Route::get('delete',[MemberController::class,'deleteData']);
Route::get('delete/{id}',[MemberController::class,'deleteData']);
Route::get('edit/{id}',[MemberController::class,'showData']);
Route::post('edit',[MemberController::class,'update']);
//Route::get('list',[Members::class,'dbOperations']);
Route::get('listt',[MemberController::class,'operations']);