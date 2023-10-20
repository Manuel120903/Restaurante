<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


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
    return view('inicio.index');
});

Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
    $user = Socialite::driver('google')->stateless()->user();
    $user = User::updateOrCreate([
        'google_id' => $user->id,
    ], [
        'name' => $user->name,
        'email' => $user->email,
    ]);
 
    Auth::login($user);
 
    return redirect('/admin/principal');
    
});




Route::get('/dashboard', function () {
    return view('principal.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/public/api/menu', function () {
    $response=Http::get('http://fakestoreapi.com/products');
    $body=$response->body();
    $array=json_decode($body);
    //dd ($array);
    return view('menu.menu_api')->with('productos',$array);
})->name ('api.menu');
//Route::get('/public/api/menu','menu.menu_api');

Route::get('/public/api/menuDetalle/{id}', function ($id) {
    $response=Http::get('http://fakestoreapi.com/products/'.$id);
    $body=$response->body();
    $item=json_decode($body);
    //dd ($array);
    return view('menu.detalle_menu_api')->with('producto',$item);
})->name('api.menuDetalle');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view ('/admin/principal','principal.index');
    Route::resource('/admin/foods', FoodController::class);
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/orders', OrderController::class);   
});

require __DIR__.'/auth.php';
