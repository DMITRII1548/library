<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		return view('welcome');
	});
});

Route::get('/text', function () {
    return LaravelLocalization::getCurrentLocale();
});
