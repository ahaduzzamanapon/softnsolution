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
            @php $works = [
                ['p1.jpg','Fashion E-Commerce','Full-featured online clothing store with payment gateway','E-Commerce'],
                ['p2.jpg','Hospital Management System','Complete HMS with patient, doctor and billing modules','Software'],
                ['p3.jpg','Education Portal','Online learning platform with video courses','Web Development'],
                ['p4.jpg','Food Delivery App','Android & iOS food ordering application','App'],
                ['p5.jpg','Real Estate Platform','Property listing and management website','Web Development'],
                ['p6.jpg','Business Dashboard','Analytics and reporting web application','Software'],
                ['p1.jpg','Salon Booking System','Online appointment booking for beauty salon','Web Design'],
                ['p2.jpg','Car Rental Platform','Vehicle booking and management system','Web Development'],
                ['p3.jpg','Online Library','Digital library with book management','Software'],
                ['p4.jpg','Multi-Vendor Store','Marketplace with multiple sellers','E-Commerce'],
                ['p5.jpg','Gym Management','Member management and billing system','Software'],
                ['p6.jpg','News Portal','Dynamic news website with admin panel','Web Design'],
            ]; @endphp
            @foreach($works as $w)
            <div class="work-item">
                <div class="work-img" style="padding:0;">
                    <img src="{{ asset('images/portfolio/'.$w[0]) }}" alt="{{ $w[1] }}" style="width:100%;height:100%;object-fit:cover;">
                </div>
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
