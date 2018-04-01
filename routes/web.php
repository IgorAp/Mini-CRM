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
Route::group(['middleware'=>'auth'],function(){
    Route::get('/companies',"CompanyController@index");
    Route::get('/companies/create',"CompanyController@create");
    Route::post('/companies/store','CompanyController@store');
    Route::get('/companies/{id}/destroy','CompanyController@destroy');
    Route::get('/companies/{id}/edit','CompanyController@edit');
    Route::get('/companies/{id}/update','CompanyController@update');
    Route::get('/companies/{id}/logo','CompanyController@getImageLogo');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
