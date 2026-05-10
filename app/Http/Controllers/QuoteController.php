<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'phone'   => 'required|string|max:20',
            'details' => 'required|string',
        ]);

        QuoteRequest::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'service'  => $request->service,
            'budget'   => $request->budget,
            'timeline' => $request->timeline,
            'website'  => $request->website,
            'details'  => $request->details,
        ]);

        return back()->with('success', 'Your quote request has been submitted! Our team will contact you within 24 hours.');
    }
}
