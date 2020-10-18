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

Route::get('/menu','OrderController@items')->name('Order.items');

Route::post('/menu','OrderController@store')->name('Order.menu');

Route::get('/menu/create','OrderController@create')->name('Order.create')->middleware('auth');

Route::get('/menu/{id}','OrderController@details')->name('Order.details');

Route::delete('/menu/{id}','OrderController@remove')->name('Order.remove')->middleware('auth');

Auth::routes([
    'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');
