@extends('layouts.admin')
@section('title','Quote Requests')
@section('content')

<div class="table-card">
    <div class="table-card-header">
        <h2>All Quote Requests</h2>
        <span style="font-size:13px;color:#6b7280;">{{ $quotes->total() }} total</span>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Budget</th>
                <th>Timeline</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse($quotes as $q)
        <tr>
            <td style="color:#9ca3af;">{{ $q->id }}</td>
            <td style="font-weight:600;color:#222;">{{ $q->name }}</td>
            <td><a href="mailto:{{ $q->email }}" style="color:#006d7a;text-decoration:none;">{{ $q->email }}</a></td>
            <td>{{ \Illuminate\Support\Str::limit($q->service ?: '—', 20) }}</td>
            <td>{{ $q->budget ?: '—' }}</td>
            <td>{{ $q->timeline ?: '—' }}</td>
            <td><span class="badge badge-{{ $q->status }}">{{ ucfirst($q->status) }}</span></td>
            <td style="color:#9ca3af;font-size:12px;">{{ $q->created_at->format('d M Y') }}</td>
            <td>
                <a href="/admin/quotes/{{ $q->id }}" class="btn btn-primary" style="padding:5px 12px;font-size:12px;">View</a>
                <form method="POST" action="/admin/quotes/{{ $q->id }}" style="display:inline;" onsubmit="return confirm('Delete this request?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="padding:5px 12px;font-size:12px;">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="9" style="text-align:center;color:#9ca3af;padding:32px;">No quote requests yet</td></tr>
        @endforelse
        </tbody>
    </table>
    <div style="padding:16px;">{{ $quotes->links() }}</div>
</div>
@endsection
