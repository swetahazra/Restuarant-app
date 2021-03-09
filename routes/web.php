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

// Route::view('home', 'home');


Route::group(['middleware'=>"web"], function(){

    Route::get('/','Retrocontroller@index');
    Route::get('/list','Retrocontroller@list');
    Route::post('/add','Retrocontroller@add');
    Route::view('/add', 'add');
    Route::get('/delete/{id}','Retrocontroller@delete');
    Route::get('/edit/{id}','Retrocontroller@edit');
    Route::post('/edit','Retrocontroller@update');
    Route::view('/register', 'register');
    Route::post('/register','Retrocontroller@upload');
    Route::post('/register','Retrocontroller@register');
    Route::view('/login', 'login');
    Route::post('/login','Retrocontroller@login');
    Route::view('/profile', 'profile');
    Route::get('/profile','Retrocontroller@profile');
    Route::view('/Cuser','Cuser');

});

Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to("/login");
});

