<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('tasks', 'TasksController');

//status editing
Route::get('tasks/status/{task}/edit', 'TasksController@editStatus')->name('status.edit');
Route::patch('tasks/status/{task}', 'TasksController@updateStatus')->name('status.edit');;
