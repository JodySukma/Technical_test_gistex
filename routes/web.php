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

// login
Route::get('home', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');

    // CRUD master
    Route::get('create', 'MasterController@create')->name('master.create');
    Route::post('store', 'MasterController@store')->name('master.store');
    Route::get('master/edit/{kode}', 'MasterController@edit')->name('master.edit');
    Route::post('master/update', 'MasterController@update')->name('master.update');
    Route::get('master/delete/{kode}', 'MasterController@delete')->name('master.delete');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
