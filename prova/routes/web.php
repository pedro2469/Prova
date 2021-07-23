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

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProdutoController;

Route::resource('/pessoas', PessoaController::class);
Route::resource('/produtos', ProdutoController::class);
Route::view('/produto/search', 'searchProduto');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
