<?php

use App\Http\Controllers\CadastroController;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cadastro', 'CadastroController@index')->name('cadastro');
// Route::post('/cadastro', 'CadastroController@store')->name('cadastro');
// Route::post('/saude', 'SaudeController@store')->name('saude');


Route::get('/contato', function(){
     return view('contato');
})->name('contato');

Auth::routes(['register' => false]);

Route::get('/relatorio', 'RelatorioController@index')->name('relatorio')->middleware('auth');

