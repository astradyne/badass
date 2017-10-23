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

// URI '/test' will now access public function 'testController' (defined within the app/http/controllers folder)
Route::get('/test', 'testController@index');
// Route::get('/url', 'controllerName@functionName');

Route::get('/test/create', 'testController@create');

Route::get('/test/createGame', 'testController@createGame');