<?php

use App\Http\Controllers\account;
use App\Http\Controllers\student;
use App\Http\Controllers\manager;
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

Route::post('logincheck', [account::class,'login']);
Route::post('signup', [account::class,'make']);
Route::post('forgot', [account::class,'forgot']);
Route::get('logout', [account::class,'logout']);


Route::get('details', [student::class,'detail']);
Route::get('due', [student::class,'due']);
Route::get('bag', [student::class,'bag']);

Route::view('edit', 'edit');
Route::get('editdetails', [student::class,'edit']);
// library
Route::get('library',[manager::class,'redirect']);
Route::get('library/detail',[manager::class,'check']);


Route::get('library/student',[manager::class,'managerstudent']);


Route::get('library/issue',[manager::class,'managerissue']);


Route::get('library/book',[manager::class,'managerbook']);


Route::get('library/add',[manager::class,'manageradd']);