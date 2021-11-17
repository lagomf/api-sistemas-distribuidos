<?php
namespace App\Http\Controllers;

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
Route::get('oi');
Route::group(['middleware' => [],'prefix'=>'movie'], function () {
    Route::get('/','MovieController@index')->name('movie.index');
    Route::get('/{movie}','MovieController@show')->name('movie.show');
    Route::post('/','MovieController@create')->name('movie.create');
    Route::patch('/{movie}','MovieController@update')->name('movie.update');
    Route::delete('/{movie}','MovieController@destroy')->name('movie.delete');
});