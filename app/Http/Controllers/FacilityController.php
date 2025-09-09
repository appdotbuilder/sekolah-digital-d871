<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Inertia\Inertia;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::latest()->get();

        return Inertia::render('facilities/index', [
            'facilities' => $facilities
        ]);
    }
}