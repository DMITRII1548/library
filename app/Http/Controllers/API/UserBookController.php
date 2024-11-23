<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;

class UserBookController extends Controller
{
    public function addFavoriteBook(User $user, Book $book): mixed
    {
        $user->favoriteBooks()->syncWithoutDetaching($book->id);

        return response([
            'message' => 'Add to favorite',
        ]);
    }
}
