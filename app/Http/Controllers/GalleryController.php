<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Inertia\Inertia;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(24);

        return Inertia::render('gallery/index', [
            'galleries' => $galleries
        ]);
    }
}