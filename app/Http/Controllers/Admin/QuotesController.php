<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index()
    {
        $quotes = QuoteRequest::latest()->paginate(15);
        return view('admin.quotes.index', compact('quotes'));
    }

    public function show(QuoteRequest $quote)
    {
        return view('admin.quotes.show', compact('quote'));
    }

    public function updateStatus(Request $request, QuoteRequest $quote)
    {
        $quote->update(['status' => $request->status]);
        return back()->with('success', 'Status updated.');
    }

    public function destroy(QuoteRequest $quote)
    {
        $quote->delete();
        return redirect('/admin/quotes')->with('success', 'Quote request deleted.');
    }
}
