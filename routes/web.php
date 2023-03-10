<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('frontEnd.index');
});

Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post('/login', [LoginController::class, 'authenticate'])->name("authenticate");
Route::post('/logout', [LoginController::class, 'logout'])->name("logout");

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name("dashboard");
    Route::group(['prefix'=>'user_management',], function(){
        Route::resource('user', UserController::class)->except(['create','edit', 'destroy']);
        Route::post('user/delete', [UserController::class, 'destroy'])->name('user.destroy');
        Route::resource('role', RoleController::class)->except(['create','edit', 'destroy']);
        Route::post('role/delete', [RoleController::class, 'destroy'])->name('role.destroy');
    });
    Route::resource('book', BookController::class);
    Route::resource('tag', TagController::class);
    Route::resource('category', CategoryController::class)->except(['create', 'edit', 'destroy']);
    Route::post('category/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::resource('tag', TagController::class)->except(['create', 'edit', 'destroy']);
    Route::post('tag/delete', [TagController::class, 'destroy'])->name('tag.destroy');


    
});

