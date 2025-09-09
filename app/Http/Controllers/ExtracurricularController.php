<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular;
use Inertia\Inertia;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = Extracurricular::latest()->get();

        return Inertia::render('extracurriculars/index', [
            'extracurriculars' => $extracurriculars
        ]);
    }
}