<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('about', [HomeController::class,'about'])->name('about');
Route::get('our_project', [HomeController::class,'our_project'])->name('our_project');
Route::get('contact', [HomeController::class,'contact'])->name('contact');
Route::get('architechture', [HomeController::class,'architechture'])->name('architechture');
Route::get('road', [HomeController::class,'road'])->name('road');
Route::get('big', [HomeController::class,'big'])->name('big');
Route::get('auther_services', [HomeController::class,'auther_services'])->name('auther_services');
Route::get('decoration', [HomeController::class,'decoration'])->name('decoration');
