<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

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
});
 Route::get('/index','AboutController@index');
 
Route::post('/store',[AboutController::class,'store']);
Route::get('/about',[AboutController::class,'about']);
//Route::get('/delete/{id}',[AboutController::class,'delete']);
//Route::get('/about_edit/{id}',[AboutController::class,'about_edit']);
Route::post('/update/{id}',[AboutController::class,'update']);
