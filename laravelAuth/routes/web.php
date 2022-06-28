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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware'=>['auth']], function(){
    Route::get('/listUsers', function () {
        return view('listUsers');
    });
    Route::get('listUsers', [UserController::class, 'index'])->name('listUsers');
    Route::view('/create', '/create')->name('create');
    Route::post('/create', [UserController::class, 'create']);
    Route::view('/edit', '/edit');
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::put('/edit/{id}', [UserController::class, 'update']);
    Route::get('/delete/{id}', [UserController::class, 'destroy']);
});
