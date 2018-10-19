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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/rota1', function() {
	return 'rota01';
});

Route::group(['prefix' =>'rota1'], function(){
	
	Route::get('/dado', function(){
		return 'dado1';
	});

	Route::get('/dado2', function(){
		return 'dado2';
	});

});

Route::get('/rota1/dado', function() {
	return 'dado1';
});

Route::get('/rota1/dado2', function() {
	return 'dado2';
});


