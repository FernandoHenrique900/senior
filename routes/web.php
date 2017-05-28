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
Route::get('/quem-somos', "HomeController@homepage")->name('quemSomos');
Route::get('/direito-empresarial', "HomeController@homepage")->name('direitoEmpresarial');
Route::get('/solucoes-tributarias', "HomeController@homepage")->name('solucoesTributarias');
Route::get('/recuperacao-judicial', "HomeController@homepage")->name('recuperacaoJudicial');
Route::get('/fale-conosco', "HomeController@homepage")->name('faleConosco');