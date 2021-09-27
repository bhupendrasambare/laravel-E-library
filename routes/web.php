<?php

use App\Http\Controllers\account;
use App\Http\Controllers\books;
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


Route::view('library/student','managerstudent');
Route::post('library/studentsearch',[manager::class,'studentsearch']);
Route::get('library/managerdelete',[manager::class,'deleteissue']);
Route::get('library/managerdeleteall',[manager::class,'deleteissueall']);


Route::view('library/issue','bookissue');
Route::get('library/issuebook',[books::class,'issuebook']);

Route::view('library/book','managerbook');
Route::get('library/booksearch',[books::class,'booksearch']);


Route::get('library/add',[books::class,'manageradd']);


Route::get('library/manager/logout',[manager::class,'managerlogout']);