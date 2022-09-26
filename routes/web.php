<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;
use App\Models\City;

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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fonecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('fonecedores');
Route::get('/fonecedores/cadastro', [App\Http\Controllers\FornecedorController::class, 'create'])->name('cadastroFonecedores');
Route::post('/fonecedores/store', [App\Http\Controllers\FornecedorController::class, 'store'])->name('cadastrarFonecedores');
Route::delete('fonecedores/{id}', [App\Http\Controllers\FornecedorController::class, 'destroy'])->name('destroyFonecedores');

Route::resource('cidade', CitiesController::class);
