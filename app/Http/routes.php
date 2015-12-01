<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'middleware' => 'auth',
    'uses' => 'CompanyController@index'
]); 

Route::model('company',  'Company'); 
Route::model('customer', 'Customer'); 
Route::model('driver',   'Driver'); 
Route::model('truck',    'Truck'); 


Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::bind('company', function($value, $route) {
	return App\Company::whereId($value)->first();
});

Route::bind('customer', function($value, $route) {
	return App\Customer::whereId($value)->first();
});

Route::bind('driver', function($value, $route) {
	return App\Driver::whereId($value)->first();
});

Route::bind('truck', function($value, $route) {
	return App\Truck::whereId($value)->first();
});

Route::resource('company',  'CompanyController');
Route::resource('customer', 'CustomerController');
Route::resource('driver',   'DriverController');
Route::resource('truck',    'TruckController');
