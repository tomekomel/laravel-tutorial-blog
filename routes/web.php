<?php

use App\Task;

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/incompleted', 'TasksController@incompleted');

Route::get('/about', function () {
	return view('about');
});

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
