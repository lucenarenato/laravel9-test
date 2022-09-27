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
Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('fornecedores');
Route::get('/fornecedores/cadastro', [App\Http\Controllers\FornecedorController::class, 'create'])->name('cadastroFornecedores');
Route::post('/fornecedores/store', [App\Http\Controllers\FornecedorController::class, 'store'])->name('cadastrarFornecedores');
Route::delete('fornecedores/{id}', [App\Http\Controllers\FornecedorController::class, 'destroy'])->name('destroyFornecedores');

Route::resource('cidade', CitiesController::class);

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('logout', 'Auth\LoginController@logout')
                                        ->name('logout')
                                        ->middleware('auth');
