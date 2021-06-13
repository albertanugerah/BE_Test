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

Route::get('/form_registrasi', 'CandidateController@create');

Route::get('/data_activity', 'CandidateController@index');

Route::get('/data_activity_detail/{id}', 'CandidateController@show');

Route::get('/data_activity_edit', function () {
    return view('data_activity_edit');
});
