<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\BookService;
use Illuminate\Contracts\View\View;

class UserBookController extends Controller
{
    public function index(BookService $bookService): View
    {
        $favoriteBooks = $bookService->getUserFavoriteBooks();
        $addedBooks = $bookService->getUserAddedBooks();

        return view('users.books.index', compact('favoriteBooks', 'addedBooks'));
    }
}
