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

Route::get('/Guilherme', function () {
    return view('Guilherme');
});
Route::get('/cadastroempresa',function () {
    return view('cadastroempresa');
  });
Route::get('/',function () {
  return view('login');
});

Route::get('/cadastroempresa','App\Http\Controllers\CadastroempresaController@helloworld');
Route::get('/cardapio','App\Http\Controllers\CardapioController@helloworld');
Route::get('/funcionarios','App\Http\Controllers\FuncionariosController@helloworld');
Route::get('/pedidos','App\Http\Controllers\PedidosController@helloworld');
Route::get('/produtos','App\Http\Controllers\ProdutosController@helloworld');
Route::get('/verpedido','App\Http\Controllers\VerpedidoController@helloworld');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
