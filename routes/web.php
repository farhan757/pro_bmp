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

Route::get('/pw/{id}','UpdateController@getPas');
Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/','HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/infoupdate','HomeController@infoupdate');
    Route::get('/qa','HomeController@qa');
    Route::get('/setuju','HomeController@setuju');
    Route::get('/tdksetuju','HomeController@tdksetuju');
    Route::get('/seluruhdata','HomeController@seluruhdata');
    Route::get('/sudahsubmit','HomeController@sudahsubmit');
    Route::get('/belumsubmit','HomeController@belumsubmit');
    Route::get('/infowil','HomeController@infowil');

    Route::group(['prefix' => 'Update'], function(){
        Route::get('/data','UpdateController@index')->name('data');
        Route::post('/step2','UpdateController@step2')->name('step2');
        Route::get('/step2','UpdateController@step2')->name('step2');
        Route::post('/savequest','UpdateController@savequest')->name('savequest');
    });
});

Route::get('/logout','Auth\LoginController@logout');
