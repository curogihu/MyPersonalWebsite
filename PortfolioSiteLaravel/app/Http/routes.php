<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DisplayController@displayDeveloperPage');

/*
Route::get('/php', 'DisplayController@displayPhpPage');
Route::get('/scala', 'DisplayController@displayScalaPage');
Route::get('/others', 'DisplayController@displayOtherPage');
*/
Route::get('/projects', 'DisplayController@displayProjectsPage');

Route::get('/hobby', 'DisplayController@displayHobbyPage');


Route::get('/job/{companyName}', 'DisplayController@displaySchedulePage');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*
Route::group(['middleware' => ['web']], function () {
    //
});
*/