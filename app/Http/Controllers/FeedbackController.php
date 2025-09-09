<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackRequest $request)
    {
        $feedback = Feedback::create([
            'user_id' => auth()->id(),
            'message' => $request->validated()['message'],
        ]);

        return view('feedback.success')
            ->with('success', 'Saran Anda telah berhasil dikirim. Terima kasih!');
    }


}