<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePpdbRequest;
use App\Models\Ppdb;
class PpdbController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePpdbRequest $request)
    {
        $ppdb = Ppdb::create($request->validated());

        return view('ppdb.success')
            ->with('success', 'Pendaftaran PPDB berhasil dikirim! Kami akan menghubungi Anda segera.');
    }


}