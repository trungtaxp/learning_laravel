<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/admin',[AdminController::class,'index']);
Route::get('/logout',[AdminController::class,'logout']);
Route::post('/admin-login',[AdminController::class,'login']);

Route::post('/login',[HomeController::class,'login']);

Route::post('/login',[HomeController::class,'logout']);

