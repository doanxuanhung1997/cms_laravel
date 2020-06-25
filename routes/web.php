<?php

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

Route::get('/store', function () {	return view('welcome'); })->name('store');

Route::get('/login', function () {  return view('auth.login'); })->name('login');
Route::post('/handle-login', 'UserController@handleLogin')->name('handle-login');


Route::get('/', function () { return view('dashboard.dashboard'); })->name('dashboard');

Route::prefix('user')->group(['middleware' => ['checkLogin'], function () { 
	Route::get('/', 		'UserController@index')->name('user');
	Route::get('/create',	'UserController@create')->name('user.create');
	Route::post('/store',	'UserController@store')->name('user.store');
	Route::get('/edit', function () {     return view('dashboard.user.edit'); })->name('user.edit');
	Route::get('/show', function () {     return view('dashboard.user.show'); })->name('user.show');
});

Route::prefix('role')->group(['middleware' => ['checkLogin'], function () { 
	Route::get('/',			   'RoleController@index')->name('role');
	Route::get('/create', function () {     return view('dashboard.role.create'); })->name('role.create');
	Route::post('/store',       'RoleController@store')->name('role.store');
	Route::delete('/destroy/{id}', 'RoleController@destroy')->name('role.destroy');
	Route::get('/edit/{id}', 'RoleController@edit')->name('role.edit');
	Route::post('/update/{id}',       'RoleController@update')->name('role.update');
});

Route::prefix('post')->group(['middleware' => ['checkLogin'], function () { 
	Route::get('/', function () {     return view('dashboard.post.index'); })->name('post');
	Route::get('/create', function () {     return view('dashboard.post.create'); })->name('post.create');
	Route::get('/edit', function () {     return view('dashboard.post.edit'); })->name('post.edit');
	Route::get('/show', function () {     return view('dashboard.post.show'); })->name('post.show');
});

Route::prefix('tag')->group(['middleware' => ['checkLogin'], function () { 
	Route::get('/',			   'TagController@index')->name('tag');
	Route::get('/create', function () {     return view('dashboard.tag.create'); })->name('tag.create');
	Route::post('/store',       'TagController@store')->name('tag.store');
	Route::delete('/destroy/{id}', 'TagController@destroy')->name('tag.destroy');
	Route::get('/edit/{id}', 'TagController@edit')->name('tag.edit');
	Route::post('/update/{id}',       'TagController@update')->name('tag.update');
});
