<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingController@index');

Route::put('website/update', 'WebsiteController@update')->name('website.update');

Route::resource('product', 'ProductController')->only(['store', 'update', 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'DashboardController@home')->name('dashboard');
