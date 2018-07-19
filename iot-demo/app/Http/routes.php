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
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Interface Routes
Route::group(['middleware' => 'auth'], function()
{
    // Define the resources for the entities you want to CRUD.
    Route::get('dashboard', 'DashboardController@index');
    //Route::get('buildings/create', 'BuildingsController@create');

    Route::resource('users', 'UsersController');
    Route::resource('buildings', 'BuildingsController');
    Route::resource('houses', 'HousesController');
    Route::resource('mansions', 'MansionsController');
    Route::resource('building_images', 'ImagesController');

});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


