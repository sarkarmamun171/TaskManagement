<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.admin-index');
// });


//Task Management login part
Route::get('login',[AdminController::class,'login'])->name('login');


Route::get('admin-index',[AdminController::class,'admin_index'])->name('admin.index');
