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

get('/', 'StaticPagesController@home')->name('home');
get('/help', 'StaticPagesController@help')->name('help');
get('/about', 'StaticPagesController@about')->name('about');

/*用户路由*/
get('signup', 'UsersController@create')->name('signup');
resource('users', 'UsersController');
/**
 * resource('users', 'UsersController');=
get('/users', 'UsersController@index')->name('users.index');
get('/users/{id}', 'UsersController@show')->name('users.show');
get('/users/create', 'UsersController@create')->name('users.create');
post('/users', 'UsersController@store')->name('users.store');
get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
patch('/users/{id}', 'UsersController@update')->name('users.update');
delete('/users/{id}', 'UsersController@destroy')->name('users.destroy');
 */
get('login', 'SessionsController@create')->name('login');
post('login', 'SessionsController@store')->name('login');
delete('logout', 'SessionsController@destroy')->name('logout');