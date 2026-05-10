@extends('layouts.admin')
@section('title','Quote from '.$quote->name)
@section('content')

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
    <a href="/admin/quotes" class="btn btn-secondary">← Back to Quotes</a>
    <div style="display:flex;gap:8px;align-items:center;">
        <form method="POST" action="/admin/quotes/{{ $quote->id }}/status" style="display:flex;gap:8px;align-items:center;">
            @csrf
            <select name="status" style="padding:7px 12px;border-radius:6px;border:1px solid #d1d5db;font-size:13px;font-family:inherit;">
                @foreach(['new','reviewing','quoted','closed'] as $s)
                <option value="{{ $s }}" {{ $quote->status === $s ? 'selected' : '' }}>{{ ucfirst($s) }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary" style="padding:7px 16px;">Update Status</button>
        </form>
        <form method="POST" action="/admin/quotes/{{ $quote->id }}" onsubmit="return confirm('Delete this request?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger" style="padding:7px 16px;">Delete</button>
        </form>
    </div>
</div>

<div class="detail-card">
    <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:20px;padding-bottom:16px;border-bottom:1px solid #f3f4f6;">
        <div>
            <h2 style="font-size:18px;font-weight:700;color:#222;margin-bottom:4px;">Quote Request — {{ $quote->service ?: 'General' }}</h2>
            <p style="font-size:13px;color:#9ca3af;">Submitted {{ $quote->created_at->format('d M Y, h:i A') }} &bull; {{ $quote->created_at->diffForHumans() }}</p>
        </div>
        <span class="badge badge-{{ $quote->status }}" style="font-size:13px;padding:5px 14px;">{{ ucfirst($quote->status) }}</span>
    </div>

    <div class="detail-field"><span class="detail-label">Name</span><span class="detail-value" style="font-weight:600;">{{ $quote->name }}</span></div>
    <div class="detail-field"><span class="detail-label">Email</span><span class="detail-value"><a href="mailto:{{ $quote->email }}" style="color:#006d7a;">{{ $quote->email }}</a></span></div>
    <div class="detail-field"><span class="detail-label">Phone</span><span class="detail-value">{{ $quote->phone }}</span></div>
    <div class="detail-field"><span class="detail-label">Service</span><span class="detail-value">{{ $quote->service ?: '—' }}</span></div>
    <div class="detail-field"><span class="detail-label">Budget</span><span class="detail-value" style="font-weight:700;color:#16a34a;">{{ $quote->budget ?: '—' }}</span></div>
    <div class="detail-field"><span class="detail-label">Timeline</span><span class="detail-value">{{ $quote->timeline ?: '—' }}</span></div>
    <div class="detail-field"><span class="detail-label">Existing Website</span><span class="detail-value">{{ $quote->website ?: '—' }}</span></div>
    <div class="detail-field"><span class="detail-label">Project Details</span>
        <span class="detail-value" style="white-space:pre-line;line-height:1.7;">{{ $quote->details }}</span>
    </div>

    <div style="margin-top:20px;padding-top:16px;border-top:1px solid #f3f4f6;">
        <a href="mailto:{{ $quote->email }}?subject=Your Quote Request - Softnsolution" class="btn btn-primary">
            ✉ Send Quote via Email
        </a>
    </div>
</div>
@endsection
