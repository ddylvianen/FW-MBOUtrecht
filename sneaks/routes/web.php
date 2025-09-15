<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about-us', 'about_us')->name('about_us');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submitForm'])->name('contact.submit');


