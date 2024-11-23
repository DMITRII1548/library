<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryBookController extends Controller
{
    public function index(Category $category): View
    {
        $books = $category->books()->paginate(15);
        $categories = Category::get();

        return view('categories.books.index', compact(
            'books',
            'category',
            'categories'
        ));
    }
}
