<?php

use Illuminate\Support\Facades\Route;
use \App\Mail\WelcomeMail;
use \Illuminate\Support\Facades\Mail;

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

Route::get('/email', function () {
    Mail::to('email@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::get('/hello','HelloController@index');

//Route::view('/about','about');
Route::get('/about','HelloController@about');

//Route::view('/services','services');
Route::get('/service','ServiceController@index');
Route::post('/service','ServiceController@store');



Route::get('/customers','CustomerController@index');
Route::get('/customers/create','CustomerController@create');
Route::post('/customers','CustomerController@store');
Route::get('/customers/{customer}','CustomerController@show');
Route::get('/customers/{customer}/edit','CustomerController@edit');
Route::patch('/customers/{customer}','CustomerController@update');
Route::delete('/customers/{customer}','CustomerController@destroy');
