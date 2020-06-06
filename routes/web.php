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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {  
	return view('auth.login'); 
})->name('login');

Route::get('/', function () { 
	return view('dashboard.dashboard'); 
})->name('dashboard');

Route::prefix('user')->group(function () { 
	Route::get('/', function () {     return view('dashboard.homepage'); })->name('user');
	Route::get('/create', function () {     return view('dashboard.roles.create'); })->name('user.create');
	Route::get('/edit', function () {     return view('dashboard.roles.edit'); })->name('user.edit');
	Route::get('/show', function () {     return view('dashboard.roles.show'); })->name('user.show');
});

Route::prefix('role')->group(function () { 
	Route::get('/', function () {     return view('dashboard.role.index'); })->name('role');
	Route::get('/create', function () {     return view('dashboard.role.create'); })->name('role.create');
	Route::get('/edit', function () {     return view('dashboard.role.edit'); })->name('role.edit');
	Route::get('/show', function () {     return view('dashboard.role.show'); })->name('role.show');
});

Route::prefix('post')->group(function () { 
	Route::get('/', function () {     return view('dashboard.post.index'); })->name('post');
	Route::get('/create', function () {     return view('dashboard.post.create'); })->name('post.create');
	Route::get('/edit', function () {     return view('dashboard.post.edit'); })->name('post.edit');
	Route::get('/show', function () {     return view('dashboard.post.show'); })->name('post.show');
});

Route::prefix('tag')->group(function () { 
	Route::get('/', function () {     return view('dashboard.tag.index'); })->name('tag');
	Route::get('/create', function () {     return view('dashboard.tag.create'); })->name('tag.create');
	Route::get('/edit', function () {     return view('dashboard.tag.edit'); })->name('tag.edit');
	Route::get('/show', function () {     return view('dashboard.tag.show'); })->name('tag.show');
});