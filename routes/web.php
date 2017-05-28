<?php

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

Route::get('/', "HomeController@homepage")->name('home');
Route::get('/escritorio', "HomeController@homepage")->name('escritorio');
Route::get('/equipe', "HomeController@homepage")->name('equipe');
Route::get('/solucoes', "HomeController@homepage")->name('solucoes');
Route::get('/contato', "ContatoController@pagina")->name('contato');
Route::post('/contato', "ContatoController@enviarEmail")->name('emailContato');