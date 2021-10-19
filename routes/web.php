<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::middleware('auth')->group(function () {
    // Frontend routes
    Route::prefix('frontend')->as('frontend.')->namespace('Frontend')->group(function () {
        // Nothing here yet
    });

    // Backend routes
    Route::prefix('backend')->as('backend.')->namespace('Backend')->group(function () {
        // General routines
        Route::post('general/setValueDB', 'GeneralController@setValueDB')->name('general.setValueDB');
        Route::post('general/setValueSession', 'GeneralController@setValueSession')->name('general.setValueSession');
        Route::get('general/getDatatablesHelp', 'GeneralController@getDatatablesHelp')->name('general.getDatatablesHelp');
        /* ---------------------------------------- */
        // Developer
        Route::get('developer/impressum', 'DeveloperController@impressum')->name('developer.impressum');
        Route::get('developer/session', 'DeveloperController@session')->name('developer.session');
        /* ---------------------------------------- */
        // Users
        Route::delete('users/massDestroy', 'UserController@massDestroy')->name('users.massDestroy');
        Route::resource('users', 'UserController')->except(['show', 'destroy']);
        /* ---------------------------------------- */
        // Customers
        Route::delete('customers/massDestroy', 'CustomerController@massDestroy')->name('customers.massDestroy');
        Route::resource('customers', 'CustomerController')->except(['destroy']);
    });
});
