@extends('layouts.app')
@section('title','Contact Us - Softnsolution')
@section('meta_description','Contact Softnsolution for web design, development, SEO and software services. Get a free consultation today.')
@section('content')

<div class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <div class="breadcrumb"><a href="/">Home</a><span>›</span> Contact</div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div>
                <div class="section-tag">Get In Touch</div>
                <h2 style="font-size:28px;font-weight:800;color:#222;margin-bottom:24px;">We'd Love to Hear From You</h2>

                <div class="contact-info-card">
                    <div class="contact-info-icon">📍</div>
                    <div>
                        <h4>Our Office</h4>
                        <p>Dhaka, Bangladesh</p>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="contact-info-icon">📞</div>
                    <div>
                        <h4>Phone Number</h4>
                        <p>+880 1913-661122</p>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="contact-info-icon">📧</div>
                    <div>
                        <h4>Email Address</h4>
                        <p>info@softnsolution.com</p>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="contact-info-icon">🕐</div>
                    <div>
                        <h4>Working Hours</h4>
                        <p>Mon–Fri: 9am–6pm | Sat: 10am–4pm</p>
                    </div>
                </div>

                <div style="margin-top:24px;background:#f0f9fa;border-radius:12px;padding:24px;">
                    <h4 style="font-size:15px;font-weight:700;margin-bottom:14px;color:#006d7a;">Our Guarantees</h4>
                    <p style="font-size:13px;color:#555;line-height:1.8;">✅ Reply within 24 hours<br>✅ Free consultation<br>✅ NDA on request<br>✅ Money back guarantee</p>
                </div>
            </div>

            <div>
                <div style="background:#fff;border-radius:12px;box-shadow:0 4px 24px rgba(0,0,0,.09);padding:36px;">
                    <h3 style="font-size:20px;font-weight:700;margin-bottom:24px;color:#222;">Send Us a Message</h3>
                    @if(session('success'))
                    <div style="background:#dcfce7;color:#16a34a;border:1px solid #bbf7d0;padding:14px 18px;border-radius:8px;margin-bottom:20px;font-weight:600;font-size:14px;">
                        ✅ {{ session('success') }}
                    </div>
                    @endif
                    @if($errors->any())
                    <div style="background:#fee2e2;color:#dc2626;border:1px solid #fecaca;padding:14px 18px;border-radius:8px;margin-bottom:20px;font-size:14px;">
                        @foreach($errors->all() as $e)<div>• {{ $e }}</div>@endforeach
                    </div>
                    @endif
                    <form method="POST" action="/contact">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" placeholder="Your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" placeholder="your@email.com" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+880 ...">
                            </div>
                            <div class="form-group">
                                <label for="service">Service Needed</label>
                                <select id="service" name="service">
                                    <option value="">Select a service</option>
                                    <option>Web Design</option>
                                    <option>Web Development</option>
                                    <option>SEO Services</option>
                                    <option>Digital Marketing</option>
                                    <option>Software Development</option>
                                    <option>App Development</option>
                                    <option>E-Commerce</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="How can we help?">
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" placeholder="Tell us about your project..." required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Send Message →</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
