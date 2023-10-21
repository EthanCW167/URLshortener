<?php

use app\Controllers\MappingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mapping', '\App\Http\Controllers\MappingController@index');
Route::get('/mapping/new', '\App\Http\Controllers\MappingController@create')->name('mapping.new');
Route::post('/mapping/new', '\App\Http\Controllers\MappingController@store');

Route::get('/{slug}', '\App\Http\Controllers\MappingController@handleRedirect');