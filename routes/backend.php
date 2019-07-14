<?php

authRoutes('backend');

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::resource('admin', 'AdminController');
