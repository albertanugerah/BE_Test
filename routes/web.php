<?php

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

Route::get('/', 'DashboardController@index');

Route::get('/candidate', 'CandidateController@index');
Route::get('/candidate/create', 'CandidateController@create');
Route::get('/candidate/{id}', 'CandidateController@show');
Route::post('/candidate', 'CandidateController@store');

Route::get('/data_activity_edit', function () {
    return view('data_activity_edit');
});
