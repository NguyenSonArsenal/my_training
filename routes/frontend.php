<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@showContact')->name('contact');
Route::get('/profile', 'HomeController@showProfile')->name('profile');
Route::resource('post', 'PostController');


