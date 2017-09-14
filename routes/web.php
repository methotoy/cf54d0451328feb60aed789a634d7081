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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Authentication Routes...
Route::get('owner/login', 'OwnerAuth\LoginController@showLoginForm')->name('owner.login');
Route::post('owner/login', 'OwnerAuth\LoginController@login');
Route::post('owner/logout', 'OwnerAuth\LoginController@logout')->name('owner.logout');

// Registration Routes...
Route::get('owner/register', 'OwnerAuth\RegisterController@showRegistrationForm')->name('owner.register');
Route::post('owner/register', 'OwnerAuth\RegisterController@register');

// Password Reset Routes...
Route::get('owner/password/reset', 'OwnerAuth\ForgotPasswordController@showLinkRequestForm')->name('owner.password.request');
Route::post('owner/password/email', 'OwnerAuth\ForgotPasswordController@sendResetLinkEmail')->name('owner.password.email');
Route::get('owner/password/reset/{token}', 'OwnerAuth\ResetPasswordController@showResetForm')->name('owner.password.reset');
Route::post('owner/password/reset', 'OwnerAuth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/owner/home', 'OwnerHomeController@index')->name('owner.home');
