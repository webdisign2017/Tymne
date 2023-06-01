<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
 
Route::get('/about', function () {
    return view('about');
})->name('about');
 
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/specialists', function () {
    return view('specialists');
})->name('specialists');

Route::get('/specialist', function () {
    return view('specialist');
})->name('specialist');

Route::get('/profile-spec', function () {
    return view('profile-spec');
})->name('profile-spec');

Route::get('/profile-users', function () {
    return view('profile-users');
})->name('profile-users');
Route::get('/form-registration', function () {
    return view('form-registration');
})->name('form-registration');
 

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Кэш очищен.";
});