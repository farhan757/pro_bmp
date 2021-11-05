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

Route::get('/kandidat/index','KandidatController@index')->name('kandidat.index');
Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/','HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'Update'], function(){
        Route::get('/data','UpdateController@index')->name('data');
        Route::post('/step2','UpdateController@step2')->name('step2');
        Route::get('/step2','UpdateController@step2')->name('step2');
        Route::post('/savequest','UpdateController@savequest')->name('savequest');
    });

    Route::group(['prefix' => 'Kandidat'], function(){
        //Route::get('/index','KandidatController@index')->name('kandidat.index');
        Route::post('/savequestkand','KandidatController@savequestkand')->name('savequestkand');
    });
});

Route::get('/logout','Auth\LoginController@logout');
