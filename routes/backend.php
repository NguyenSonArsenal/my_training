<?php

authRoutes('backend');

Route::get('/', 'DashboardController@index')->name('dashboard');
