<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\QuoteRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_messages'   => ContactMessage::count(),
            'unread_messages'  => ContactMessage::where('is_read', false)->count(),
            'total_quotes'     => QuoteRequest::count(),
            'new_quotes'       => QuoteRequest::where('status', 'new')->count(),
        ];

        $recent_messages = ContactMessage::latest()->take(5)->get();
        $recent_quotes   = QuoteRequest::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_messages', 'recent_quotes'));
    }
}
