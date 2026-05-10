@extends('layouts.app')
@section('title','Our Works - Softnsolution')
@section('meta_description','Browse our portfolio of web design, development, software and app projects delivered to clients worldwide.')
@section('content')

<div class="page-hero">
    <div class="container">
        <h1>Our Works</h1>
        <div class="breadcrumb"><a href="/">Home</a><span>›</span> Our Works</div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Portfolio</div>
            <h2>Our Featured Projects</h2>
            <p>A selection of our best work across various industries</p>
            <div class="divider"></div>
        </div>

        <div class="works-filter">
            <button class="filter-btn active">All</button>
            <button class="filter-btn">Web Design</button>
            <button class="filter-btn">Web Development</button>
            <button class="filter-btn">Software</button>
            <button class="filter-btn">App</button>
            <button class="filter-btn">E-Commerce</button>
        </div>

        <div class="works-grid">
            @php
            $works = [
                ['🏪','Fashion E-Commerce','Full-featured online clothing store with payment gateway','E-Commerce'],
                ['🏥','Hospital Management System','Complete HMS with patient, doctor and billing modules','Software'],
                ['🎓','Education Portal','Online learning platform with video courses','Web Development'],
                ['🍕','Food Delivery App','Android & iOS food ordering application','App'],
                ['🏠','Real Estate Platform','Property listing and management website','Web Development'],
                ['📊','Business Dashboard','Analytics and reporting web application','Software'],
                ['💇','Salon Booking System','Online appointment booking for beauty salon','Web Design'],
                ['🚗','Car Rental Platform','Vehicle booking and management system','Web Development'],
                ['📚','Online Library','Digital library with book management','Software'],
                ['🛍️','Multi-Vendor Store','Marketplace with multiple sellers','E-Commerce'],
                ['🏋️','Gym Management','Member management and billing system','Software'],
                ['📰','News Portal','Dynamic news website with admin panel','Web Design'],
            ];
            @endphp
            @foreach($works as $w)
            <div class="work-item">
                <div class="work-img">{{ $w[0] }}</div>
                <div class="work-info">
                    <h3>{{ $w[1] }}</h3>
                    <p>{{ $w[2] }}</p>
                    <span class="work-tag">{{ $w[3] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Have a Project in Mind?</h2>
        <p>Let's discuss your idea and turn it into reality.</p>
        <a href="/get-a-quote" class="btn-primary" style="font-size:16px;padding:15px 36px;">Start Your Project</a>
    </div>
</section>

@endsection
