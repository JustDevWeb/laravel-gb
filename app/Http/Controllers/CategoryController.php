<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view("categories.index", ["categories" => $this->getCategories()]);

    }

    public function show(string $category): View {
        return view("categories.show", ["newsList" => $this->getNewsByCategory($category),"categoryName"=> $category]);
    }
}
