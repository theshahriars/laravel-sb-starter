<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Dashboard routes
Route::get('/', function () {
    return redirect()->route('dashboard');
});
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
