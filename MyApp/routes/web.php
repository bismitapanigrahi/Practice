<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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


Route::get('/hello/{name}', function ($name) {
    return view('hello',['name'=>$name]);
    // return redirect("about"); 
});

// Route::view('user', "hello");

Route::get('users/{name}',[Users::class,'index'])->middleware('protectedPage');
Route::view("noaccess", "noaccess");
Route::get('about', [Users::class, 'viewLoad']);
Route::group(['middleware' => ['pageAccess']], function() {
    // Route::view('about', "about");
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::view('login', 'login');
Route::post('userReq', [Users::class, 'testRequest']);
// Route::put('userReq', [user::class, 'testRequest']);