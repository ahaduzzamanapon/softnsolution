<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(15);
        return view('admin.messages.index', compact('messages'));
    }

    public function show(ContactMessage $message)
    {
        $message->update(['is_read' => true]);
        return view('admin.messages.show', compact('message'));
    }

    public function updateStatus(Request $request, ContactMessage $message)
    {
        $message->update(['status' => $request->status]);
        return back()->with('success', 'Status updated.');
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();
        return redirect('/admin/messages')->with('success', 'Message deleted.');
    }
}
