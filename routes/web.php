<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarkController;

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

Route::get('/', function () {
    return view('admin.index');
})->name('main');

Route::group(['as'=>'admin.'],function(){
    
    Route::resource('user',UserController::class);

    Route::resource('product',ProductController::class);

    Route::resource('mark',MarkController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
