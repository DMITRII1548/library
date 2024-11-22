<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Contracts\View\View;

class BookController extends Controller
{
    public function show(Book $book): View
    {
        $book->load('category');

        return view('books.show', compact('book'));
    }
}
