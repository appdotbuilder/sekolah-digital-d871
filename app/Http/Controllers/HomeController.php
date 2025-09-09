<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Extracurricular;
use App\Models\Gallery;
use App\Models\Facility;
class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $latestNews = News::published()
            ->latest('published_at')
            ->take(6)
            ->get();

        $extracurriculars = Extracurricular::take(6)->get();
        
        $recentPhotos = Gallery::photos()
            ->latest()
            ->take(8)
            ->get();

        return view('welcome', [
            'latestNews' => $latestNews,
            'extracurriculars' => $extracurriculars,
            'recentPhotos' => $recentPhotos,
        ]);
    }


}