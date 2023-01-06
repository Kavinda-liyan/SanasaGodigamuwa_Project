<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\History;
use App\Http\Controllers\Projects;
use App\Http\Controllers\Account;

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

//HomeController
Route::get('/',[HomeContoller::class,'index']) -> name('welcome');

//history Controller
Route::get('/history',[History::class,'index']) -> name('history');

//history Acounts
Route::get('/Account',[Account::class,'index']) -> name('Account');

//history Projects
Route::get('/Projects',[Projects::class,'index']) -> name('Projects');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
