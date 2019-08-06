<?php

// PostsController
Route::get('/post', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/post', 'PostsController@store');
Route::get('/post/{post}/edit', 'PostsController@edit');
Route::patch('/post/{post}', 'PostsController@update');
Route::delete('/post/{post}', 'PostsController@destroy');

Auth::routes();

Route::get('/', 'HomeController@index');
