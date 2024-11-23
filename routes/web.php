<?php

declare(strict_types=1);

use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\UserBookController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('', [PageController::class, 'home'])->name('pages.index');

    Route::prefix('books')->group(function () {
        Route::get('', [BookController::class, 'index'])->name('books.index');
        Route::get('{book}', [BookController::class, 'show'])->name('books.show');
        Route::get('{book}/read', [BookController::class, 'read'])->name('books.read');
    });

    Route::prefix('users/books')->middleware('auth')->group(function () {
        Route::get('/', [UserBookController::class, 'index'])->name('users.books.index');
    });
});

require_once __DIR__.'/redirect.php';
