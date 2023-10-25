<?php

use App\Http\Controllers\MappingController;
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

//Route::get('/mapping', MappingController::class);

//[MappingController::class, 'index']
Route::get('/mapping', [MappingController::class, 'index']); //'\App\Http\Controllers\MappingController@index'
Route::get('/mapping/new', [MappingController::class, 'create'])->name('mapping.new'); //'\App\Http\Controllers\MappingController@create'
Route::post('/mapping/new', [MappingController::class, 'store']); //'\App\Http\Controllers\MappingController@store'

//Route::get('/{slug}', MappingController::class, 'handleRedirect'); //'\App\Http\Controllers\MappingController@handleRedirect'