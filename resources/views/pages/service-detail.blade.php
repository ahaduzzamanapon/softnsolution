@extends('layouts.app')

@section('title', ($page ? $page['title'] : $category['title']) . ' - Softnsolution')
@section('meta_description', $page ? $page['desc'] : $category['intro'])

@section('content')

<div class="page-hero">
    <div class="container">
        <h1>{{ $page ? $page['title'] : $category['title'] }}</h1>
        <div class="breadcrumb">
            <a href="/">Home</a><span>›</span>
            <a href="/{{ $slug ? request()->segment(1) : '' }}">{{ $category['title'] }}</a>
            @if($page)<span>›</span> {{ $page['title'] }}@endif
        </div>
    </div>
</div>

@if($page)
{{-- ── SUB-PAGE DETAIL ─────────────────────────────────── --}}
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-img-wrap">
                <img src="{{ asset('images/services/'.$page['image']) }}" alt="{{ $page['title'] }}">
            </div>
            <div class="about-content">
                <div class="section-tag">{{ $category['title'] }}</div>
                <h2>{{ $page['title'] }}</h2>
                <p style="font-size:15px;color:#555;line-height:1.8;margin-bottom:20px;">{{ $page['desc'] }}</p>

                <div style="background:#f0f9fa;border-radius:10px;padding:20px 24px;margin-bottom:24px;">
                    <div style="font-size:13px;color:#666;margin-bottom:6px;">Starting Price</div>
                    <div style="font-size:28px;font-weight:800;color:#ff5722;">{{ $page['price'] }}</div>
                </div>

                <div style="display:flex;gap:14px;flex-wrap:wrap;">
                    <a href="/get-a-quote" class="btn-primary">Get a Quote</a>
                    <a href="/contact" class="btn-outline" style="border-color:#006d7a;color:#006d7a;padding:11px 24px;border-radius:4px;text-decoration:none;font-weight:600;border:2px solid;">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Features --}}
<section class="section" style="background:#f8f8f8;padding-top:0;">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">What's Included</div>
            <h2>Features & Deliverables</h2>
            <div class="divider"></div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:14px;max-width:800px;margin:0 auto;">
            @foreach($page['features'] as $f)
            <div style="display:flex;align-items:center;gap:12px;background:#fff;padding:14px 18px;border-radius:8px;box-shadow:0 1px 6px rgba(0,0,0,.06);">
                <span style="width:24px;height:24px;background:#006d7a;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0;">✓</span>
                <span style="font-size:14px;font-weight:500;color:#333;">{{ $f }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Related sub-pages from same category --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Also Available</div>
            <h2>More {{ $category['title'] }} Services</h2>
            <div class="divider"></div>
        </div>
        <div class="services-grid">
            @foreach($category['pages'] as $key => $p)
                @if($key !== $slug)
                <div class="service-card">
                    <img src="{{ asset('images/services/'.$p['image']) }}" alt="{{ $p['title'] }}" class="service-img-card">
                    <h3>{{ $p['title'] }}</h3>
                    <p style="color:#ff5722;font-weight:700;font-size:13px;margin-bottom:6px;">{{ $p['price'] }}</p>
                    <p>{{ \Illuminate\Support\Str::limit($p['desc'], 90) }}</p>
                    <a href="/{{ request()->segment(1) }}/{{ $key }}">Learn More →</a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

@else
{{-- ── CATEGORY OVERVIEW PAGE ───────────────────────────── --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">{{ $category['title'] }}</div>
            <h2>{{ $category['subtitle'] }}</h2>
            <p>{{ $category['intro'] }}</p>
            <div class="divider"></div>
        </div>
        <div class="services-grid">
            @foreach($category['pages'] as $key => $p)
            <div class="service-card">
                <img src="{{ asset('images/services/'.$p['image']) }}" alt="{{ $p['title'] }}" class="service-img-card">
                <h3>{{ $p['title'] }}</h3>
                <p style="color:#ff5722;font-weight:700;font-size:13px;margin-bottom:6px;">{{ $p['price'] }}</p>
                <p>{{ \Illuminate\Support\Str::limit($p['desc'], 90) }}</p>
                <a href="{{ request()->path() }}/{{ $key }}">View Details →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Why Choose Us --}}
<section class="section" style="background:#f8f8f8;">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Why Softnsolution</div>
            <h2>Why Choose Us?</h2>
            <div class="divider"></div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;">
            @foreach([['✅','Experienced Team','8+ years of industry experience with 50+ skilled professionals.'],['💰','Affordable Pricing','Best quality at the most competitive prices in Bangladesh.'],['🔒','NDA & Security','We sign NDA and keep your project 100% confidential.'],['🛠️','Ongoing Support','Free post-delivery support and maintenance included.']] as $w)
            <div style="text-align:center;padding:24px 16px;background:#fff;border-radius:10px;box-shadow:0 2px 10px rgba(0,0,0,.06);">
                <div style="font-size:32px;margin-bottom:12px;">{{ $w[0] }}</div>
                <h3 style="font-size:15px;font-weight:700;margin-bottom:8px;">{{ $w[1] }}</h3>
                <p style="font-size:13px;color:#666;line-height:1.6;">{{ $w[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today for a free consultation and custom quote.</p>
        <a href="/get-a-quote" class="btn-primary" style="font-size:16px;padding:15px 36px;">Get a Free Quote</a>
    </div>
</section>

@endsection
