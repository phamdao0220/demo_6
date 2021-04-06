<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::get('home', function () {
    return view('home');
});
Route::get('/', [HomeController::class,'index']);
Route::get('index',[LoginController::class,'loginAdmin'])->name('login');
Route::post('index',[LoginController::class,'postLoginController'])->name('admin.login');


Route::prefix('admin')->group(function (){
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::prefix('user')->group(function (){
        Route::get('/',[ProductController::class,'index'])->name('products.index');
    });
});
