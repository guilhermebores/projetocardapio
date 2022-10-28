<?php

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

Route::get('/cadastroempresa',function () {
    return view('cadastroempresa');
  });
Route::get('/',function () {
  return view('auth.login');
});
Route::get('/pedidos','App\Http\Controllers\PedidosController@helloworld');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {

  Route::resource('User', App\Http\Controllers\UserController::class);
  Route::resource('product', App\Http\Controllers\ProductController::class);
  Route::resource('menu', App\Http\Controllers\MenuController::class);
  Route::resource('menu.product', App\Http\Controllers\MenuProductController::class)
     ->only(['store', 'destroy']);
  Route::get('/cardapio/{menu}', 'App\Http\Controllers\MenuController@showPublic')->name('menu.public.show');

});
