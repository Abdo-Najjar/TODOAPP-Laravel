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
use Illuminate\Support\Facades\Route;

Route::get("/" ,"TodoController@index" );

Route::get("todo" ,"TodoController@index" )->name("todo.index");

Route::post("todo" ,"TodoController@store" )->name("todo.store");

Route::get("todo/create" ,"TodoController@create" )->name("todo.create");

Route::delete("/delete/{id}" ,"TodoController@destroy" );
