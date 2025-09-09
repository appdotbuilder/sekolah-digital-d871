<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('contact');
    }
}