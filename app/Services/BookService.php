<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class BookService
{
    public function getUserFavoriteBooks(): Collection
    {
        $favoriteBooks = auth()->user()->favoriteBooks;

        return $favoriteBooks;
    }

    public function getUserAddedBooks(): Collection
    {
        $addedBooks = auth()->user()->addedBooks;

        return $addedBooks;
    }
}
