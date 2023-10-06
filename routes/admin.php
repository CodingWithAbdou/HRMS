<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
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


Route::group(['namespace' => 'Admin' , 'prefix' => 'admin' , 'middleware' => 'auth:admin'] , function() {
    Route::get('/' , [DashboardController::class , 'index'])->name('dashboard_view');
    Route::get('/logout' , [LoginController::class , 'logout'])->name('logout_view');
});
Route::group(['namespace' => 'Admin' , 'prefix' => 'admin' , 'middleware' => 'guest:admin'] , function() {
    Route::get('/login' , [LoginController::class , 'index'])->name('login_view');
    Route::post('/login' , [LoginController::class , 'login'])->name('check_login');
});

Route::fallback(function(){
    return redirect()->route('dashboard_view');
});
