<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return Inertia::render('contact');
    }
}