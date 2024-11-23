<?php

// Redirects

use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::redirect('login',LaravelLocalization::setLocale() ?? app()->getLocale().'/login', 301);
Route::redirect('register', LaravelLocalization::setLocale() ?? app()->getLocale().'/register', 301);