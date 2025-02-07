<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\MatchController;

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
    
    Route::get('/match',[MatchController::class,'index'])->name('match.index');
    Route::get('/match/find',[MatchController::class,'find'])->name('match.find.get');
    Route::post('/match/find',[MatchController::class,'findShow'])->name('match.find.post');

    Route::get('/match/show/{id}',[MatchController::class,'show'])->name('match.show.get');
    Route::post('/match/show',[MatchController::class,'findShow'])->name('match.show.post');
    
    Route::post('/match/add/{id}',[MatchController::class,'add'])->name('match.add');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
