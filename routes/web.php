<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController; // Import the controller

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/listings', [ListingsController::class, 'index'])->name('listings.index');

// Route for the login page
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

// Route for the registration page
Route::get('/signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');

// Route for storing bookings
Route::post('/bookings', 'BookingController@store')->name('bookings.store');

// Route for search
Route::get('/search', 'SearchController@index')->name('search');

Route::get('/listings/create', 'ListingsController@create')->name('listings.create');

