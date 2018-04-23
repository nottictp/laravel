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

Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');            
Route::get('/users/{user}/edit', 'UsersController@edit'); 
Route::get('/users/{user}', 'UsersController@show')->where('id','[0-9]+');
Route::post('/users', 'UsersController@store');
Route::put('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{project}', 'ProjectsController@show')->where('project','[0-9]+');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/{project}/edit', 'ProjectsController@edit')->where('project','[0-9]+');
Route::put('/projects/{project}', 'ProjectsController@update')->where('project','[0-9]+');

Route::get('/categories', 'CategoriesController@index')->name("categories");
Route::get('/categories/create', 'CategoriesController@create');            
Route::get('/categories/{category}/edit', 'CategoriesController@edit'); 
Route::get('/categories/{category}', 'CategoriesController@show')->where('id','[0-9]+')->name("category");
Route::post('/categories', 'CategoriesController@store');
Route::put('/categories/{category}', 'CategoriesController@update');
Route::delete('/categories/{category}', 'CategoriesController@destroy');

Route::get('/issues', 'IssuesController@index');
Route::get('/issues/create', 'IssuesController@create');            
Route::get('/issues/{issue}/edit', 'IssuesController@edit'); 
Route::get('/issues/{issue}', 'IssuesController@show')->where('id','[0-9]+');
Route::post('/issues', 'IssuesController@store');
Route::put('/issues/{issue}', 'IssuesController@update');
Route::delete('/issues/{issue}', 'IssuesController@destroy');
