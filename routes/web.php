<?php

// Executa a ação direto na rota (não é boa prática)
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::group(['namespace' => 'Site'], function(){
	// A ação é executada por um controller (boa prática)
	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');

	Route::get('/categoria/{id}', 'SiteController@categoria');
	// Route::get('/categoria/{id}', 'SiteController@categoria')->middleware('auth');
	Route::get('/categoria2/{id}', 'SiteController@categoriaOp');
});