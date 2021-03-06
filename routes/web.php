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

Route::get('/',function (){
    return redirect('/login');
});
Route::get('/login','loginController@index')->name('login.index');

Route::post('/login',['uses'=>'loginController@verify']);

Route::group(['middleware'=>'sess'],function(){
    Route::get('/home','HomeController@index')->name('home.index');
    Route::group(['middleware'=>'type'],function(){
        Route::get('/home/create', 'HomeController@create')->name('home.create');
        Route::post('/home/create', 'HomeController@store');
        Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
        Route::post('/home/edit/{id}', 'HomeController@update');
        Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
        Route::post('/home/delete/{id}', 'HomeController@destroy');
    });

    Route::get('/home/details/{id}','HomeController@details')->name('home.details');
});


Route::get('/logout',['as'=>'logout.index', 'uses'=>'logoutController@index']);
