<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return View('pages.home');
});

// Route::get('library', function () {
//   return View('pages.library');
// });

// Resourceful routes...
Route::resource('library', 'UserController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('addrepository', function() {
  return View('pages.addrepository');
});

Route::get('additem', function(){
  return View('pages.additem');
});

Route::get('members', function(){
  return View('pages.members');
});

Route::get('settings', function() {
  return View('pages.settings');
});
