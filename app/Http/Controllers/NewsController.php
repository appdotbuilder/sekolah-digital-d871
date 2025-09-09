<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Inertia\Inertia;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::published()
            ->latest('published_at')
            ->paginate(12);

        return Inertia::render('news/index', [
            'news' => $news
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        // Check if news is published
        if (!$news->published_at || $news->published_at > now()) {
            abort(404);
        }

        $relatedNews = News::published()
            ->where('id', '!=', $news->id)
            ->latest('published_at')
            ->take(4)
            ->get();

        return Inertia::render('news/show', [
            'news' => $news,
            'relatedNews' => $relatedNews
        ]);
    }
}