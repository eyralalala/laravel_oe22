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

// Route::resource('products', ProductController::class);

// Route::get('/', 'ProductController@welcome')->name('products.welcome');

// // ROUTE PRODUCT

Route::get('/', 'ProductController@index')->name('products.index');
Route::get('/create', 'ProductController@create')->name('products.create');
Route::get('/products/{products}/show', 'ProductController@show')->name('products.show');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{products}/edit', 'ProductController@edit')->name('products.edit');
Route::patch('/products/{products}', 'ProductController@update')->name('products.update');
Route::delete('/products/{products}', 'ProductController@destroy')->name('products.destroy');


Route::resource('posts','PostController');

