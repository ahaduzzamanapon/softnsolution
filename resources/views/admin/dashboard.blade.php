@extends('layouts.admin')
@section('title','Dashboard')
@section('content')

<div class="stat-cards">
    <div class="stat-card">
        <div class="stat-card-top">
            <div><h3>{{ $stats['total_messages'] }}</h3><p>Total Messages</p></div>
            <div class="stat-card-icon" style="background:#dbeafe;">✉️</div>
        </div>
        <a href="/admin/messages" style="font-size:12px;color:#006d7a;text-decoration:none;font-weight:600;">View All →</a>
    </div>
    <div class="stat-card">
        <div class="stat-card-top">
            <div><h3>{{ $stats['unread_messages'] }}</h3><p>Unread Messages</p></div>
            <div class="stat-card-icon" style="background:#fee2e2;">🔔</div>
        </div>
        <a href="/admin/messages" style="font-size:12px;color:#ef4444;text-decoration:none;font-weight:600;">{{ $stats['unread_messages'] > 0 ? 'Needs attention!' : 'All caught up ✓' }}</a>
    </div>
    <div class="stat-card">
        <div class="stat-card-top">
            <div><h3>{{ $stats['total_quotes'] }}</h3><p>Quote Requests</p></div>
            <div class="stat-card-icon" style="background:#dcfce7;">💼</div>
        </div>
        <a href="/admin/quotes" style="font-size:12px;color:#006d7a;text-decoration:none;font-weight:600;">View All →</a>
    </div>
    <div class="stat-card">
        <div class="stat-card-top">
            <div><h3>{{ $stats['new_quotes'] }}</h3><p>New Quotes</p></div>
            <div class="stat-card-icon" style="background:#fef3c7;">⚡</div>
        </div>
        <a href="/admin/quotes" style="font-size:12px;color:#d97706;text-decoration:none;font-weight:600;">{{ $stats['new_quotes'] > 0 ? 'Follow up!' : 'All handled ✓' }}</a>
    </div>
</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

    {{-- Recent Messages --}}
    <div class="table-card">
        <div class="table-card-header">
            <h2>Recent Messages</h2>
            <a href="/admin/messages">View All</a>
        </div>
        <table>
            <thead><tr><th>Name</th><th>Subject</th><th>Status</th><th>Date</th></tr></thead>
            <tbody>
            @forelse($recent_messages as $m)
            <tr>
                <td>
                    <a href="/admin/messages/{{ $m->id }}" style="color:#006d7a;font-weight:600;text-decoration:none;">
                        {{ $m->name }}
                        @if(!$m->is_read)<span style="width:7px;height:7px;background:#ef4444;border-radius:50%;display:inline-block;margin-left:4px;"></span>@endif
                    </a>
                </td>
                <td style="color:#6b7280;">{{ \Illuminate\Support\Str::limit($m->subject ?: 'No subject', 25) }}</td>
                <td><span class="badge badge-{{ $m->status }}">{{ ucfirst($m->status) }}</span></td>
                <td style="color:#9ca3af;font-size:12px;">{{ $m->created_at->diffForHumans() }}</td>
            </tr>
            @empty
            <tr><td colspan="4" style="text-align:center;color:#9ca3af;padding:24px;">No messages yet</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{-- Recent Quotes --}}
    <div class="table-card">
        <div class="table-card-header">
            <h2>Recent Quote Requests</h2>
            <a href="/admin/quotes">View All</a>
        </div>
        <table>
            <thead><tr><th>Name</th><th>Service</th><th>Status</th><th>Date</th></tr></thead>
            <tbody>
            @forelse($recent_quotes as $q)
            <tr>
                <td>
                    <a href="/admin/quotes/{{ $q->id }}" style="color:#006d7a;font-weight:600;text-decoration:none;">{{ $q->name }}</a>
                </td>
                <td style="color:#6b7280;">{{ \Illuminate\Support\Str::limit($q->service ?: 'N/A', 20) }}</td>
                <td><span class="badge badge-{{ $q->status }}">{{ ucfirst($q->status) }}</span></td>
                <td style="color:#9ca3af;font-size:12px;">{{ $q->created_at->diffForHumans() }}</td>
            </tr>
            @empty
            <tr><td colspan="4" style="text-align:center;color:#9ca3af;padding:24px;">No quote requests yet</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
