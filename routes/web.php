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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get("/", "inicioController@inicio");
Route::get("/connection", "connectionController@connection");
Route::get("/getValues", "inicioController@getValues");
Route::post("/setValues", "inicioController@setValues");

Route::get('/exercise_1', function () {
    return view('exercise_1');
});
