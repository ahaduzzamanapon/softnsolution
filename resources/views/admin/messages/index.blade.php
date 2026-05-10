@extends('layouts.admin')
@section('title','Contact Messages')
@section('content')

<div class="table-card">
    <div class="table-card-header">
        <h2>All Contact Messages</h2>
        <span style="font-size:13px;color:#6b7280;">{{ $messages->total() }} total</span>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Subject</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse($messages as $m)
        <tr style="{{ !$m->is_read ? 'background:#f0f9ff;' : '' }}">
            <td style="color:#9ca3af;">{{ $m->id }}</td>
            <td>
                <span style="font-weight:{{ !$m->is_read ? '700' : '500' }};color:#222;">{{ $m->name }}</span>
                @if(!$m->is_read)<span style="width:6px;height:6px;background:#ef4444;border-radius:50%;display:inline-block;margin-left:4px;vertical-align:middle;"></span>@endif
            </td>
            <td><a href="mailto:{{ $m->email }}" style="color:#006d7a;text-decoration:none;">{{ $m->email }}</a></td>
            <td>{{ $m->service ?: '—' }}</td>
            <td>{{ \Illuminate\Support\Str::limit($m->subject ?: '—', 30) }}</td>
            <td><span class="badge badge-{{ $m->status }}">{{ ucfirst($m->status) }}</span></td>
            <td style="color:#9ca3af;font-size:12px;">{{ $m->created_at->format('d M Y') }}</td>
            <td>
                <a href="/admin/messages/{{ $m->id }}" class="btn btn-primary" style="padding:5px 12px;font-size:12px;">View</a>
                <form method="POST" action="/admin/messages/{{ $m->id }}" style="display:inline;" onsubmit="return confirm('Delete this message?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="padding:5px 12px;font-size:12px;">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="8" style="text-align:center;color:#9ca3af;padding:32px;">No messages yet</td></tr>
        @endforelse
        </tbody>
    </table>
    <div style="padding:16px;">{{ $messages->links() }}</div>
</div>
@endsection
