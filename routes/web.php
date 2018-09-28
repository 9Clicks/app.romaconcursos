<?php

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashborad/home');


Route::get('/', 'HomeController@index');
Route::get('/quem-somos', 'EmpresaController@index');
Route::get('/videos', 'VideoController@index');

Route::get('/preparatorio/agente-penitenciario', 'cursoAGPController@index');
Route::get('/preparatorio/agente-penitenciario/detalhes/{id}', 'cursoAGPController@detalhes');

Route::get('/preparatorio/bombeiro-militar', 'cursoBMMController@index');
Route::get('/preparatorio/bombeiro-militar/detalhes/{id}', 'cursoBMMController@detalhes');

Route::get('/preparatorio/enem', 'cursoENEController@index');
Route::get('/preparatorio/enem/detalhes/{id}', 'cursoENEController@detalhes');

Route::get('/preparatorio/inss', 'cursoINSController@index');
Route::get('/preparatorio/inss/detalhes/{id}', 'cursoINSController@detalhes');

Route::get('/preparatorio/oab', 'cursoOABController@index');
Route::get('/preparatorio/oab/detalhes/{id}', 'cursoOABController@detalhes');

Route::get('/preparatorio/policia-civil', 'cursoPLCController@index');
Route::get('/preparatorio/policia-civil/detalhes/{id}', 'cursoPLCController@detalhes');

Route::get('/preparatorio/prf', 'cursoPRFController@index');
Route::get('/preparatorio/prf/detalhes/{id}', 'cursoPRFController@detalhes');