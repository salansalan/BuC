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
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-records','StudViewController@index');
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');
Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('buc-view','BudgetController@index');
Route::get('/', 'WelcomeController@index');
Route::model('tasks', 'App\Task');
Route::model('projects', 'App\Project');


Route::bind('tasks', function($value) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value) {
	return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
//Route::resource('tasks', 'TasksController');


Route::resource('projects.tasks', 'TasksController');
