<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/packages/create','PackageController@create')->name('package.create')->middleware('auth','Admin');
Route::post('/packages/create','PackageController@store')->name('package.store');
Route::get('/packages/index','PackageController@index')->name('package.index')->middleware('auth');
Route::get('/packages/{id}/edit','PackageController@edit')->name('package.edit')->middleware('auth','Admin');
Route::post('/packages/update/{id}','PackageController@update')->name('package.update');
Route::get('/packages/{id}/delete','PackageController@destroy')->name('package.delete');
Route::get('/booking/bookingpage/{id}','BookingController@Bookingview')->name('booking.bookingpage');
Route::post('/booking/book/{id}','BookingController@book')->name('booking.book');
Route::get('/booking/bookingslist','BookingController@bookings_list')->name('booking.list')->middleware('auth','Admin');
