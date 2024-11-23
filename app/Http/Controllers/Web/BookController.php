<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::paginate(15);
        $categories = Category::get();

        return view('books.index', compact('books', 'categories'));
    }

    public function show(Book $book): View
    {
        $book->load('category');

        return view('books.show', compact('book'));
    }

    public function read(Book $book): View
    {
        return view('books.read', compact('book'));
    }
}
