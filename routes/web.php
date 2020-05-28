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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});




Auth::routes();

Route::get('/profilepicture', 'ProfileController@getProfileAvatar')->name('profileavatar');
Route::post('/profilepicture', 'ProfileController@profilePictureUpload')->name('profileavatar');
Route::get('/changepassword', 'ProfileController@changePasswordForm')->name('changepassword');
Route::post('/changepassword', 'ProfileController@changePassword')->name('changepassword');
Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/profileupdate', 'profileController@profileUpdate')->name('profileupdate');
Route::get('/home', 'HomeController@index')->name('home');


