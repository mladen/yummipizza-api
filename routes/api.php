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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
    Routes for Meals
*/
Route::get('/meals', 'MealController@all')->name('meals.all');
Route::post('/meals', 'MealController@store')->name('meals.store');
Route::get('/meals/{Meal}', 'MealController@show')->name('meals.show');
Route::put('/meals/{Meal}', 'MealController@update')->name('meals.update');
Route::delete('/meals/{Meal}', 'MealController@destory')->name('meals.destroy');
