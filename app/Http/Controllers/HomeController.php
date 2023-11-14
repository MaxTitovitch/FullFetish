<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('contents')
            ->orderBy('contents_count', 'desc')
            ->limit(9)
            ->get();

        return view('web.home.index', [
            'categories' => $categories
        ]);
    }

    public function categories()
    {
        return '';
    }

    public function models()
    {
        return '';
    }

    public function faq()
    {
        return '';
    }
}
