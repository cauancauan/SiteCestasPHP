<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\produtosController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/anunciar',[produtosController::class,'FormularioAnunciar'])->name('anunciar');
Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::post('/anunciar', [produtosController::class,'AnunciarBanco'])->name('anunciarBanco');
Route::get('/produtos',[produtosController::class,'MostrarProdutos'])->name('produtos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


