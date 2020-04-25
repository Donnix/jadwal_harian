<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('days', 'DayController');
Route::resource('tasks', 'TasksController');
Route::resource('memos','MemoContoller');
Route::resource('schedules','ScheduleController');
Route::resource('beritas','BeritaController');
Route::resource('statuses','StatusController');
Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
