<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(): View {
        $news = app(News::class);
        return view('news.index',["newsList" => $news->getAll()]);
    }

    public function show(int $id): View {
        return view('news.show', ["news"=> $this->getNews($id)]);
    }
}
