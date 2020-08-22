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

Route::get('welcome','TodosController@welcome')->name('welcome');


Route::get('todos','TodosController@index')->name('todos');
Route::get('todos/{todo}','TodosController@show')->name('todos.show');
Route::get('todos-create','TodosController@create')->name('todos.create');
Route::post('todos-store','TodosController@store')->name('todos.store');
Route::get('todos/{todo}/edit','TodosController@edit')->name('todos.edit');
Route::post('todos/{todo}/update-todos','TodosController@update')->name('todos.update');
Route::get('todos/{todo}/delete', 'TodosController@destroy')->name('todos.destroy');
