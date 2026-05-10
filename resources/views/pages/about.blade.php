@extends('layouts.app')
@section('title','About Us - Softnsolution')
@section('meta_description','Learn about Softnsolution - Bangladesh\'s leading software company with 8+ years of experience.')
@section('content')

<div class="page-hero">
    <div class="container">
        <h1>About Us</h1>
        <div class="breadcrumb"><a href="/">Home</a><span>›</span> About Us</div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-img-wrap">
                <img src="{{ asset('images/about/team.jpg') }}" alt="Softnsolution Team" style="width:100%;height:100%;object-fit:cover;border-radius:12px;">
            </div>
            <div class="about-content">
                <div class="section-tag">Who We Are</div>
                <h2>Bangladesh's Most Trusted Software Company</h2>
                <p>Softnsolution is a leading software and IT service company based in Dhaka, Bangladesh. Since our founding, we have been committed to delivering world-class digital solutions that help businesses grow and succeed in the digital age.</p>
                <p>With a team of 50+ experienced professionals, we have successfully delivered 750+ projects to clients across 20+ countries. Our expertise spans web design, web development, mobile app development, SEO, digital marketing, and custom software solutions.</p>
                <ul class="feature-list">
                    <li>8+ Years of Industry Experience</li>
                    <li>500+ Happy Clients Worldwide</li>
                    <li>750+ Successful Projects Delivered</li>
                    <li>50+ Expert Team Members</li>
                    <li>24/7 Dedicated Support</li>
                    <li>Money Back Guarantee</li>
                </ul>
                <br>
                <a href="/get-a-quote" class="btn-primary">Work With Us</a>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background:#f8f8f8;">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Our Values</div>
            <h2>Why Choose Softnsolution?</h2>
            <div class="divider"></div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            @php $values = [
                ['web-design.jpg','Our Mission','To provide affordable, high-quality digital solutions that empower businesses to grow and succeed online.'],
                ['software.jpg','Our Vision','To be the most trusted technology partner for businesses globally, driving innovation and digital transformation.'],
                ['web-dev.jpg','Our Values','Integrity, quality, innovation and client satisfaction are the core values that drive everything we do.'],
            ]; @endphp
            @foreach($values as $v)
            <div class="service-card">
                <img src="{{ asset('images/services/'.$v[0]) }}" alt="{{ $v[1] }}" class="service-img-card">
                <h3>{{ $v[1] }}</h3>
                <p>{{ $v[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item"><h3>500+</h3><p>Happy Clients</p></div>
            <div class="stat-item"><h3>750+</h3><p>Projects Completed</p></div>
            <div class="stat-item"><h3>8+</h3><p>Years Experience</p></div>
            <div class="stat-item"><h3>20+</h3><p>Countries Served</p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Our Team</div>
            <h2>Meet The Experts</h2>
            <div class="divider"></div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;">
            @php $team = [
                ['ceo.jpg','MD. Mamun','CEO & Founder'],
                ['dev.jpg','Rakib Hasan','Lead Developer'],
                ['designer.jpg','Nadia Islam','Head of Design'],
                ['marketing.jpg','Farhan Ahmed','Marketing Director'],
            ]; @endphp
            @foreach($team as $t)
            <div style="text-align:center;padding:24px;border:1px solid #eee;border-radius:12px;">
                <img src="{{ asset('images/team/'.$t[0]) }}" alt="{{ $t[1] }}" style="width:90px;height:90px;border-radius:50%;object-fit:cover;margin-bottom:14px;border:3px solid #006d7a;">
                <h3 style="font-size:16px;font-weight:700;margin-bottom:4px;">{{ $t[1] }}</h3>
                <p style="font-size:13px;color:#777;">{{ $t[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Ready to Work Together?</h2>
        <p>Let's build something amazing for your business.</p>
        <a href="/contact" class="btn-primary" style="font-size:16px;padding:15px 36px;">Contact Us Today</a>
    </div>
</section>

@endsection
