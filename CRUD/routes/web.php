<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('listUsers', [MemberController::class, 'index']);
Route::post('/create', [MemberController::class, 'create']);
Route::view('create', 'create');
Route::get('/edit/{id}', [MemberController::class, 'edit']);
Route::put('/edit/{id}', [MemberController::class, 'update']);
Route::get('/delete/{id}', [MemberController::class, 'destroy']);
