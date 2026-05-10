@extends('layouts.app')
@section('title','Our Services - Softnsolution')
@section('meta_description','Explore all services offered by Softnsolution including web design, development, SEO, digital marketing, software and app development.')
@section('content')

<div class="page-hero">
    <div class="container">
        <h1>Our Services</h1>
        <div class="breadcrumb"><a href="/">Home</a><span>›</span> Services</div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">What We Offer</div>
            <h2>Professional Digital Services</h2>
            <p>From web design to software development, we cover all your digital needs</p>
            <div class="divider"></div>
        </div>
        <div class="services-grid">
            @php $services = [
                ['web-design.jpg','Web Design','Starting from ৳4,999','Professional, responsive and modern websites that make a lasting impression. We design with your brand and audience in mind.'],
                ['web-dev.jpg','Web Development','Starting from ৳7,999','Custom web applications using Laravel, PHP, React and more. Scalable, secure and high-performance solutions.'],
                ['seo.jpg','SEO Services','Starting from ৳2,999','Get found on Google. Our SEO experts help you rank higher, drive organic traffic and grow your business.'],
                ['digital-marketing.jpg','Digital Marketing','Starting from ৳3,999','Social media, Facebook Ads, Google Ads, email marketing and content strategy to grow your brand.'],
                ['software.jpg','Software Development','Starting from ৳14,999','Custom ERP, HRM, accounting, POS and school management software tailored for your business.'],
                ['app-dev.jpg','App Development','Starting from ৳9,999','Native Android & iOS apps, and cross-platform solutions that engage your users.'],
                ['ecommerce.jpg','E-Commerce','Starting from ৳7,999','Full-featured online stores with payment gateways, inventory management and order tracking.'],
                ['maintenance.jpg','Website Maintenance','Starting from ৳1,999','Keep your website fast, secure and up-to-date with our professional maintenance plans.'],
            ]; @endphp
            @foreach($services as $s)
            <div class="service-card">
                <img src="{{ asset('images/services/'.$s[0]) }}" alt="{{ $s[1] }}" class="service-img-card">
                <h3>{{ $s[1] }}</h3>
                <p style="color:#ff5722;font-weight:700;font-size:13px;margin-bottom:8px;">{{ $s[2] }}</p>
                <p>{{ $s[3] }}</p>
                <a href="/get-a-quote">Get Quote →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section" style="background:#f8f8f8;">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Our Process</div>
            <h2>How We Work</h2>
            <div class="divider"></div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;">
            @php $steps = [
                ['1','web-design.jpg','Discovery','We understand your business goals, target audience and project requirements.'],
                ['2','seo.jpg','Planning','We create a detailed project plan, timeline and design mockups for your approval.'],
                ['3','web-dev.jpg','Development','Our expert team builds your project with clean code and best practices.'],
                ['4','digital-marketing.jpg','Launch','We test thoroughly, then launch your project and provide ongoing support.'],
            ]; @endphp
            @foreach($steps as $p)
            <div style="text-align:center;padding:28px 20px;background:#fff;border-radius:12px;box-shadow:0 2px 10px rgba(0,0,0,.06);">
                <img src="{{ asset('images/services/'.$p[1]) }}" alt="{{ $p[2] }}" style="width:100%;height:130px;object-fit:cover;border-radius:8px;margin-bottom:14px;">
                <div style="width:36px;height:36px;background:#ff5722;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:16px;margin:0 auto 12px;">{{ $p[0] }}</div>
                <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;">{{ $p[2] }}</h3>
                <p style="font-size:13px;color:#666;line-height:1.6;">{{ $p[3] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Need a Custom Solution?</h2>
        <p>Tell us about your project and get a free quote within 24 hours.</p>
        <a href="/get-a-quote" class="btn-primary" style="font-size:16px;padding:15px 36px;">Get a Free Quote</a>
    </div>
</section>

@endsection
