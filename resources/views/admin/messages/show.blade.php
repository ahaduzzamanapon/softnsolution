@extends('layouts.admin')
@section('title','Message from '.$message->name)
@section('content')

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
    <a href="/admin/messages" class="btn btn-secondary">← Back to Messages</a>
    <div style="display:flex;gap:8px;align-items:center;">
        <form method="POST" action="/admin/messages/{{ $message->id }}/status" style="display:flex;gap:8px;align-items:center;">
            @csrf
            <select name="status" style="padding:7px 12px;border-radius:6px;border:1px solid #d1d5db;font-size:13px;font-family:inherit;">
                @foreach(['new','replied','closed'] as $s)
                <option value="{{ $s }}" {{ $message->status === $s ? 'selected' : '' }}>{{ ucfirst($s) }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary" style="padding:7px 16px;">Update Status</button>
        </form>
        <form method="POST" action="/admin/messages/{{ $message->id }}" onsubmit="return confirm('Delete this message?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger" style="padding:7px 16px;">Delete</button>
        </form>
    </div>
</div>

<div class="detail-card">
    <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:20px;padding-bottom:16px;border-bottom:1px solid #f3f4f6;">
        <div>
            <h2 style="font-size:18px;font-weight:700;color:#222;margin-bottom:4px;">{{ $message->subject ?: 'No Subject' }}</h2>
            <p style="font-size:13px;color:#9ca3af;">Received {{ $message->created_at->format('d M Y, h:i A') }} &bull; {{ $message->created_at->diffForHumans() }}</p>
        </div>
        <span class="badge badge-{{ $message->status }}" style="font-size:13px;padding:5px 14px;">{{ ucfirst($message->status) }}</span>
    </div>

    <div class="detail-field"><span class="detail-label">From</span><span class="detail-value" style="font-weight:600;">{{ $message->name }}</span></div>
    <div class="detail-field"><span class="detail-label">Email</span><span class="detail-value"><a href="mailto:{{ $message->email }}" style="color:#006d7a;">{{ $message->email }}</a></span></div>
    <div class="detail-field"><span class="detail-label">Phone</span><span class="detail-value">{{ $message->phone ?: '—' }}</span></div>
    <div class="detail-field"><span class="detail-label">Service</span><span class="detail-value">{{ $message->service ?: '—' }}</span></div>
    <div class="detail-field"><span class="detail-label">Message</span>
        <span class="detail-value" style="white-space:pre-line;line-height:1.7;">{{ $message->message }}</span>
    </div>

    <div style="margin-top:20px;padding-top:16px;border-top:1px solid #f3f4f6;">
        <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="btn btn-primary">
            ✉ Reply via Email
        </a>
    </div>
</div>
@endsection
