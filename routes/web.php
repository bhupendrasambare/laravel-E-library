<?php

use App\Http\Controllers\account;
use App\Http\Controllers\student;
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

Route::get('/', [account::class,'main']);
Route::view('login', 'login');
Route::get('logincheck', [account::class,'login']);
Route::get('signup', [account::class,'make']);
Route::get('forgot', [account::class,'forgot']);
Route::get('details', [student::class,'detail']);
Route::get('due', [student::class,'due']);
Route::get('bag', [student::class,'bag']);
Route::view('edit', 'edit');
Route::get('editdetails', [student::class,'edit']);
