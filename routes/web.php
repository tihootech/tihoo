<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingController@index');

Route::put('website/update', 'WebsiteController@update')->name('website.update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'DashboardController@home')->name('dashboard');
