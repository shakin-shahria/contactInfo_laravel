<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestMiddleware;
use App\Http\Controllers\ContactUsController;

Route::namespace('App\Http\Controllers')->group(function() {

    Route::get('/', fn() => view('welcome')); // This directs to the laravel "welcome" page.

    Route::get('/home', 'HomeController@index')->middleware(TestMiddleware::class); // This will work when the "/home?region=asia" is fixed. The condition is checked by the Middleware.

    Route::resource('products', 'ProductController');

    Route:: get('/contactus','ContactUsController@index')->name('contact'); // contact_us

    Route:: post('/contactsave','ContactUsController@contactsave')->name('contact-save'); // In this the " name('contact-save') " is very important it connects the submitted form to the ContactUsController
    
    Route::get('/contact-entries', [ContactusController::class, 'showEntries'])->name('contact-entries');
});