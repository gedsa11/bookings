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

/*
Route::get('/', function () {
    return view('booking.index');
});*/

Route::get('/', 'ActivityController@index');

Route::get('activity/{slug}', ['as' => 'activity', 'uses' => 'ActivityController@show']);

Route::post('/booking', [
            'as' => 'booking', 'uses' => 'BookingController@store'
]);

Route::get('bookings/index', ['as' => 'index_bookings', 'uses' => 'BookingController@index']);
