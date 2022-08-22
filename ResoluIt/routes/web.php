<?php

use App\Http\Controllers\SeriesController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::controller(SeriesController::class)->group(function () {
//    Route::get('/series','index');
//    Route::get('/series/criar', 'create');
//    Route::post('/series/salvar', 'store');
//    Route::post('serie/destroy/{serie}', 'destroy')->name('serie.destroy');
//    Route::post('serie/edit/{serie}', 'edit')->name('series.edit');
//});

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->except(['show']);

