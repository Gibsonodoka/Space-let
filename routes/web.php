<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');


Route::get('/listings', 'ListingController@index')->name('listings.index');

// Route for the login page
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

// Route for the registration page
Route::get('/signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');


// routes/web.php

Route::post('/bookings', 'BookingController@store')->name('bookings.store');

// Route for search

Route::get('/search', 'SearchController@index')->name('search');

