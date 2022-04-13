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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('products', ProductController::class);

// Route::get('/', 'ProductController@welcome')->name('products.welcome');

// ROUTE PRODUCT

Route::get('/index', 'ProductController@index')->name('products.index')->middleware('auth');
Route::get('/create', 'ProductController@create')->name('products.create')->middleware('auth');
Route::get('/products/{products}/show', 'ProductController@show')->name('products.show')->middleware('auth');
Route::post('/products', 'ProductController@store')->name('products.store')->middleware('auth');
Route::get('/products/{products}/edit', 'ProductController@edit')->name('products.edit')->middleware('auth');
Route::patch('/products/{products}', 'ProductController@update')->name('products.update')->middleware('auth');
Route::delete('/products/{products}', 'ProductController@destroy')->name('products.destroy')->middleware('auth');

//Route Posts
Route::resource('posts','PostController')->middleware('auth');


//Route Customer
Route::get('customers', function () {
    return view ('internals.customers');
});

Route::get('customers', 'CustomerController@list')->middleware('auth');
Route::post('customers','CustomerController@store')->middleware('auth');


//Route Comment
// Route::get('/create', 'CommentController@list')->name('comments.create');

Route::get('comments', function () {
    return view ('comments.create');
});

Route::get('comments', 'CommentController@list')->middleware('auth');
Route::post('comments','CommentController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

