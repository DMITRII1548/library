<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }
}
