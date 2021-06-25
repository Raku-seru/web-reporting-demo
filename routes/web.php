<?php
/*
| Web Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/report/create', 'ReportController@create')->name('create_report');

Route::resource('report', 'ReportController');

Route::get('/pdf/{id}', 'ReportController@getPDF')->name('getPDF');

Route::fallback(function () {
    /** This will check for the 404 view page unders /resources/views/errors/404 route */
    return view('errors.404');
})->name('error404');