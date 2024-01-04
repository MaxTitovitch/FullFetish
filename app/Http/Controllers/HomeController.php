<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('contents')
            ->orderBy('contents_count', 'desc')
            ->limit(4)
            ->get();

        $models = User::withCount('contents')
            ->where('type', 'seller')
            ->orderBy('contents_count', 'desc')
            ->limit(4)
            ->get();

        $faqs = Faq::where('active', 1)
            ->limit(10)
            ->get();

        return view('web.home.index', [
            'categories' => $categories,
            'models' => $models,
            'faqs' => $faqs,
        ]);
    }

    public function content()
    {
        return redirect()->route('home.index');
    }

    public function subscriptions()
    {
        return redirect()->route('home.index');
    }

    public function categories()
    {
        return redirect()->route('home.index');
    }

    public function models()
    {
        return redirect()->route('home.index');
    }

    public function faq()
    {
        return redirect()->route('home.index');
    }
}
