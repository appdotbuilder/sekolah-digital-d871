<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePpdbRequest;
use App\Models\Ppdb;
use Inertia\Inertia;

class PpdbController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('ppdb/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePpdbRequest $request)
    {
        $ppdb = Ppdb::create($request->validated());

        return Inertia::render('ppdb/success')
            ->with('success', 'Pendaftaran PPDB berhasil dikirim! Kami akan menghubungi Anda segera.');
    }


}