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
    return view('home');
});
Route::group(['middleware'=>'auth'],function(){
    //Company
    Route::get('/companies',"CompanyController@index");
    Route::get('/companies/create',"CompanyController@create");
    Route::post('/companies/store','CompanyController@store');
    Route::get('/companies/{id}/destroy','CompanyController@destroy');
    Route::get('/companies/{id}/edit','CompanyController@edit');
    Route::post('/companies/{id}/update','CompanyController@update');
    Route::get('/companies/{id}/logo','CompanyController@getImageLogo');
    //Employee
    Route::get('/employees','EmployeeController@index');
    Route::get('/employees/select','EmployeeController@select');
    Route::get('/employees/{id}/create','EmployeeController@create');
    Route::post('/employees/{id}/store','EmployeeController@store');
    Route::get('/employees/{id}/destroy','EmployeeController@destroy');
    Route::get('/employees/{id}/edit','EmployeeController@edit');
    Route::post('/employees/{id}/update','EmployeeController@update');
});
Auth::routes();
