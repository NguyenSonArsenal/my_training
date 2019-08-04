<?php

authRoutes('backend');

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::resource('admin', 'AdminController');
Route::resource('post', 'PostController');
