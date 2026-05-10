@extends('layouts.app')
@section('title','Blog - Softnsolution')
@section('meta_description','Read the latest articles on web design, development, SEO, digital marketing and technology from Softnsolution.')
@section('content')

<div class="page-hero">
    <div class="container">
        <h1>Our Blog</h1>
        <div class="breadcrumb"><a href="/">Home</a><span>›</span> Blog</div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Latest Articles</div>
            <h2>Tips, Insights & News</h2>
            <div class="divider"></div>
        </div>
        <div class="blog-grid">
            @php
            $posts = [
                ['blog1.jpg','Web Design','May 5, 2026','10 Web Design Trends to Watch in 2026','Discover the latest design trends that are shaping the web in 2026, from glassmorphism to AI-generated layouts.'],
                ['blog2.jpg','SEO','May 3, 2026','How to Rank #1 on Google in Bangladesh','A step-by-step guide to SEO strategies that work specifically for Bangladeshi businesses and local search.'],
                ['blog3.jpg','Digital Marketing','April 28, 2026','Facebook Ads vs Google Ads: Which is Better?','We compare the two giants of digital advertising to help you decide which platform suits your business.'],
                ['blog4.jpg','Web Development','April 22, 2026','Why Laravel is the Best PHP Framework in 2026','Laravel continues to dominate PHP development. Here is why it remains the top choice for web developers.'],
                ['blog5.jpg','E-Commerce','April 18, 2026','How to Start an Online Business in Bangladesh','A complete guide for Bangladeshi entrepreneurs looking to launch their first e-commerce store.'],
                ['blog6.jpg','Software','April 12, 2026','ERP Software: Does Your Business Need It?','We explain what ERP software is, how it works, and whether your business is ready to adopt it.'],
            ];
            @endphp
            @foreach($posts as $post)
            <div class="blog-card">
                <div class="blog-img">
                    <img src="{{ asset('images/blog/'.$post[0]) }}" alt="{{ $post[3] }}" style="width:100%;height:100%;object-fit:cover;" onerror="this.parentElement.style.background='linear-gradient(135deg,#e8f5f7,#c5eaee)';this.remove();">
                </div>
                <div class="blog-body">
                    <div class="blog-meta">{{ $post[1] }} &bull; {{ $post[2] }}</div>
                    <h3>{{ $post[3] }}</h3>
                    <p>{{ $post[4] }}</p>
                    <a href="#">Read More →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
