<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

use Database\Seeders\OrderSeeder;
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


//Route::view ('/admin/orders','orders.index');
//Route::view ('/admin/foods','foods.index');
//Route::view ('/admin/customers','customers.index');

Route::resource('/admin/foods', FoodController::class);
Route::resource('/admin/users', UserController::class);
Route::resource('/admin/orders', OrderController::class);