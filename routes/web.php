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

// Route::get('/', function () {
//     return view('content');
// });

Auth::routes();

// HOME
Route::get('/', 'HomeController@index')->name('home')->middleware('can:role-all');
Route::get('/home', 'HomeController@index')->name('home')->middleware('can:role-all');

// ROLE
Route::get('/role', 'RoleController@index')->name('role')->middleware('can:role-admin');
Route::get('/role/edit/{id}', 'RoleController@edit')->name('role.edit')->middleware('can:role-admin');

// USER
Route::get('/user', 'UserController@index')->name('user')->middleware('can:role-admin');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit')->middleware('can:role-admin');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update')->middleware('can:role-admin');

// MENU
Route::get('/menu', 'MenuController@index')->name('menu')->middleware('can:role-admin');
Route::get('/menu/create', 'MenuController@create')->name('menu.create')->middleware('can:role-admin');
Route::post('/menu/store', 'MenuController@store')->name('menu.store')->middleware('can:role-admin');
Route::get('/menu/edit/{id}', 'MenuController@edit')->name('menu.edit')->middleware('can:role-admin');
Route::post('/menu/update/{id}', 'MenuController@update')->name('menu.update')->middleware('can:role-admin');
Route::get('/menu/roles/{id}', 'MenuController@roles')->name('menu.roles')->middleware('can:role-admin');
Route::post('/menu/roles_update/{id}', 'MenuController@roles_update')->name('menu.roles_update')->middleware('can:role-admin');

// MAPA
//Route::get('/mapa', 'MapaController@index')->name('mapa')->middleware('can:role-all');

// PRODUTO
Route::get('/produto', 'ProdutoController@index')->name('produto')->middleware('can:role-admin');
Route::get('/produto/create', 'ProdutoController@create')->name('produto.create')->middleware('can:role-admin');
Route::post('/produto/store', 'ProdutoController@store')->name('produto.store')->middleware('can:role-admin');
Route::get('/produto/edit/{id}', 'ProdutoController@edit')->name('produto.edit')->middleware('can:role-admin');
Route::post('/produto/update/{id}', 'ProdutoController@update')->name('produto.update')->middleware('can:role-admin');

// COMPRA
Route::get('/compra', 'CompraController@index')->name('compra')->middleware('can:role-admin');