<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('refreshtoken', 'UserController@refreshToken');

Route::get('/unauthorized', 'UserController@unauthorized');

Route::post('/employee/login', 'EmployeeController@login');
Route::get('/employee/unauthorized', 'EmployeeController@unauthorized');

Route::group(['middleware' => ['CheckClientCredentials','auth:api']], function() {
    Route::post('logout', 'UserController@logout');
    Route::post('details', 'UserController@details');
    Route::post('pay', 'PaymentsController@pay');
});

Route::group(['middleware' => ['CheckClientCredentials', 'auth:api-employee']], function() {
    Route::get('products', 'ProductsController@getProducts');
    Route::post('products', 'ProductsController@insert');
    Route::post('products', 'ProductsController@update');
    Route::post('products', 'ProductsController@delete');          

    Route::post('products/{id}', 'ProductsController@getSingleProduct');
});