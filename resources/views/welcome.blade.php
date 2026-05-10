@extends('layouts.app')

@section('title', 'Softnsolution - Best Software Company in Bangladesh')
@section('meta_description', 'Softnsolution provides web design, web development, SEO, digital marketing, software and app development services in Bangladesh.')

@section('content')

<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="hero-inner">
            <div class="hero-text">
                <span class="hero-badge">🏆 #1 Software Company in Bangladesh</span>
                <h1>We Build Your Digital Success Story</h1>
                <p>Professional web design, development, SEO, digital marketing, software & app development. Trusted by 500+ businesses worldwide.</p>
                <div class="hero-btns">
                    <a href="/get-a-quote" class="btn-primary">Get a Free Quote</a>
                    <a href="/our-works" class="btn-outline">View Our Works</a>
                </div>
            </div>
            <div class="hero-visual">
                <img src="{{ asset('images/hero/hero-main.jpg') }}" alt="Software Development Team" style="width:100%;border-radius:16px;box-shadow:0 20px 60px rgba(0,0,0,.3);">
            </div>
        </div>
    </div>
    <!-- Service Pricing Cards -->
    <div class="hero-cards">
        <div class="hero-card">
            <img src="{{ asset('images/services/web-design.jpg') }}" alt="Web Design" style="width:48px;height:48px;border-radius:8px;object-fit:cover;margin-bottom:8px;">
            <div class="hero-price">৳4,999</div>
            <h3>Web Design</h3>
            <p>Professional & Responsive</p>
        </div>
        <div class="hero-card">
            <img src="{{ asset('images/services/seo.jpg') }}" alt="SEO" style="width:48px;height:48px;border-radius:8px;object-fit:cover;margin-bottom:8px;">
            <div class="hero-price">৳2,999</div>
            <h3>SEO Service</h3>
            <p>Rank #1 on Google</p>
        </div>
        <div class="hero-card">
            <img src="{{ asset('images/services/app-dev.jpg') }}" alt="App Development" style="width:48px;height:48px;border-radius:8px;object-fit:cover;margin-bottom:8px;">
            <div class="hero-price">৳9,999</div>
            <h3>App Development</h3>
            <p>Android & iOS</p>
        </div>
        <div class="hero-card">
            <img src="{{ asset('images/services/ecommerce.jpg') }}" alt="E-Commerce" style="width:48px;height:48px;border-radius:8px;object-fit:cover;margin-bottom:8px;">
            <div class="hero-price">৳7,999</div>
            <h3>E-Commerce</h3>
            <p>Full Online Store</p>
        </div>
    </div>
</section>

<!-- TRUST BADGES -->
<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-card">
                <img src="{{ asset('images/services/ecommerce.jpg') }}" alt="Money Back" class="trust-thumb">
                <div><h4>Money Back Guarantee</h4><p>100% refund if not satisfied</p></div>
            </div>
            <div class="trust-card">
                <img src="{{ asset('images/services/software.jpg') }}" alt="NDA" class="trust-thumb">
                <div><h4>NDA Protected</h4><p>Your data is fully secure</p></div>
            </div>
            <div class="trust-card">
                <img src="{{ asset('images/services/seo.jpg') }}" alt="Price" class="trust-thumb">
                <div><h4>Price Guarantee</h4><p>Best price in the market</p></div>
            </div>
            <div class="trust-card">
                <img src="{{ asset('images/services/web-dev.jpg') }}" alt="Support" class="trust-thumb">
                <div><h4>World Class Support</h4><p>24/7 dedicated support team</p></div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">What We Do</div>
            <h2>Our Professional Services</h2>
            <p>We offer a complete range of digital services to grow your business online</p>
            <div class="divider"></div>
        </div>
        <div class="services-grid">
            @php $services = [
                ['maintenance.jpg','Website Maintenance','Keep your website running smoothly with our professional maintenance packages.'],
                ['web-design.jpg','Web Design','Beautiful, responsive websites that convert visitors into customers.'],
                ['web-dev.jpg','Web Development','Custom web applications built with the latest technologies.'],
                ['software.jpg','Software Development','Tailored software solutions for your business needs.'],
                ['ecommerce.jpg','E-Commerce','Full-featured online stores that boost your sales.'],
                ['digital-marketing.jpg','Digital Marketing','Grow your brand with targeted digital marketing campaigns.'],
                ['app-dev.jpg','App Development','Native and cross-platform mobile apps for Android & iOS.'],
                ['seo.jpg','SEO Services','Rank higher on Google and drive organic traffic to your site.'],
            ]; @endphp
            @foreach($services as $s)
            <div class="service-card">
                <img src="{{ asset('images/services/'.$s[0]) }}" alt="{{ $s[1] }}" class="service-img-card">
                <h3>{{ $s[1] }}</h3>
                <p>{{ $s[2] }}</p>
                <a href="/services">Learn More →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- STATS -->
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

<!-- PORTFOLIO -->
<section class="section" style="background:#f8f8f8;">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Our Portfolio</div>
            <h2>Featured Creative Works</h2>
            <p>A glimpse of our best design and development projects</p>
            <div class="divider"></div>
        </div>
        <div class="portfolio-grid">
            @php $projects = [
                ['p1.jpg','E-Commerce Store','Web Development'],
                ['p2.jpg','Hospital Management','Software'],
                ['p3.jpg','Education Portal','Web Design'],
                ['p4.jpg','Food Delivery App','App Development'],
                ['p5.jpg','Real Estate Platform','Web Development'],
                ['p6.jpg','Business Dashboard','Software'],
            ]; @endphp
            @foreach($projects as $p)
            <div class="portfolio-item">
                <img src="{{ asset('images/portfolio/'.$p[0]) }}" alt="{{ $p[1] }}">
                <div class="portfolio-overlay">
                    <h3>{{ $p[1] }}</h3>
                    <p>{{ $p[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div style="text-align:center;margin-top:36px;">
            <a href="/our-works" class="btn-primary">View All Works</a>
        </div>
    </div>
</section>

<!-- GETTING STARTED -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">How It Works</div>
            <h2>Getting Started Is Easy</h2>
            <p>Three simple steps to launch your digital presence</p>
            <div class="divider"></div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:30px;">
            @php $steps = [
                ['web-design.jpg','1','Choose a Domain','Pick the perfect domain name that reflects your brand identity.'],
                ['software.jpg','2','Get Hosting','Fast, secure and reliable hosting solutions for your website.'],
                ['web-dev.jpg','3','Add Content','Our team helps you create content that engages your audience.'],
            ]; @endphp
            @foreach($steps as $st)
            <div style="text-align:center;padding:30px 20px;border:1px solid #eee;border-radius:12px;">
                <img src="{{ asset('images/services/'.$st[0]) }}" alt="{{ $st[2] }}" style="width:100%;height:160px;object-fit:cover;border-radius:8px;margin-bottom:16px;">
                <div style="width:36px;height:36px;background:#ff5722;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;margin:0 auto 12px;font-size:16px;">{{ $st[1] }}</div>
                <h3 style="font-size:17px;font-weight:700;margin-bottom:8px;">{{ $st[2] }}</h3>
                <p style="font-size:13px;color:#666;line-height:1.7;">{{ $st[3] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Client Reviews</div>
            <h2>What Our Clients Say</h2>
            <p>Real reviews from real clients who trust Softnsolution</p>
            <div class="divider"></div>
        </div>
        <div class="testimonials-grid">
            @php $reviews = [
                ['R','Rahim Uddin','CEO, Fashion Store BD','"Softnsolution delivered our e-commerce website on time and within budget. The design is stunning and sales have increased by 60% since launch!"'],
                ['K','Karim Ahmed','Principal, Ideal School','"Best software company in Bangladesh! They built our school management software with all the features we needed. Highly recommended!"'],
                ['S','Sumaiya Islam','Owner, Beauty Salon','"Their SEO services helped us rank #1 on Google in just 3 months. Our organic traffic increased by 200%. Amazing team!"'],
            ]; @endphp
            @foreach($reviews as $r)
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p>{{ $r[3] }}</p>
                <div class="testimonial-author">
                    <div class="author-avatar">{{ $r[0] }}</div>
                    <div class="author-info"><h4>{{ $r[1] }}</h4><span>{{ $r[2] }}</span></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Start Your Project?</h2>
        <p>Get a free consultation and quote today. No obligations, just possibilities.</p>
        <a href="/get-a-quote" class="btn-primary" style="font-size:16px;padding:15px 36px;">Get a Free Quote Now</a>
    </div>
</section>

@endsection
