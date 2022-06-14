<?php

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

Route::get('/', "App\Http\Controllers\MainController@home");

Route::get('/client', "App\Http\Controllers\MainController@client")->name("client");

Route::get('/manager', "App\Http\Controllers\MainController@manager");
Route::get('/manager/{id}', "App\Http\Controllers\MainController@managerContent");

Route::post('/client/check', "App\Http\Controllers\MainController@client_check");

//Route::get('/ilya', function () {
//    return "привет";
//});
