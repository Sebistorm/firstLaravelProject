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

// Route::get('/home', function () {
//     return view('home');
// });

//If your route only needs to return a view
Route::view('/home', 'home');

Route::view('/about', 'about');

Route::view('/pricing', 'pricing');

Route::view('/contact', 'contact');


// controllers
Route::resource('/users', 'UserController');
// Route::get('/users', 'UserController@index');
// Route::post('/users', 'UserController@store');
// Route::get('/users/create', 'UserController@create');


