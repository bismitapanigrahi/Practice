<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return redirect('/listUsers');
});

Route::get('/listUsers', function () {
    return view('listUsers');
});

Route::get('listUsers', [UserController::class, 'index']);
Route::post('/create', [UserController::class, 'create']);
Route::view('/create', '/create');
Route::view('/edit', '/edit');
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::put('/edit/{id}', [UserController::class, 'update']);
Route::get('/delete/{id}', [UserController::class, 'destroy']);
