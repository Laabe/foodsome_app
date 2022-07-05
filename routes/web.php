<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/restaurants', RestaurantController::class)->middleware('auth');
Route::resource('admin/restaurants/{restaurant}/menus', MenuController::class)->middleware('auth');
Route::resource('admin/restaurants/{restaurant}/items', ItemController::class)->middleware('auth');

