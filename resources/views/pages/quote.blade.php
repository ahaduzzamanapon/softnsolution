@extends('layouts.app')
@section('title','Get a Quote - Softnsolution')
@section('meta_description','Get a free quote from Softnsolution for web design, development, SEO and software services.')
@section('content')

<div class="page-hero">
    <div class="container">
        <h1>Get a Free Quote</h1>
        <div class="breadcrumb"><a href="/">Home</a><span>›</span> Get a Quote</div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="quote-intro">
            <div class="section-tag">Free Consultation</div>
            <h2 style="font-size:32px;font-weight:800;color:#222;margin-bottom:14px;">Tell Us About Your Project</h2>
            <p style="color:#666;font-size:15px;line-height:1.7;">Fill in the form below and our team will get back to you within 24 hours with a detailed proposal and pricing.</p>
        </div>

        <div class="quote-form">
            <h3 style="font-size:17px;font-weight:700;margin-bottom:20px;color:#333;">Select Service Package</h3>
            <div class="package-grid">
                <div class="package-card selected">
                    <h3>Starter</h3>
                    <div class="price">৳4,999</div>
                    <p>Basic website, 5 pages, responsive design</p>
                </div>
                <div class="package-card">
                    <h3>Professional</h3>
                    <div class="price">৳9,999</div>
                    <p>10 pages, SEO optimized, contact form</p>
                </div>
                <div class="package-card">
                    <h3>Enterprise</h3>
                    <div class="price">Custom</div>
                    <p>Full custom solution, all features included</p>
                </div>
            </div>

            <form>
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="q_name">Full Name *</label>
                        <input type="text" id="q_name" name="name" placeholder="Your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="q_email">Email Address *</label>
                        <input type="email" id="q_email" name="email" placeholder="your@email.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="q_phone">Phone Number *</label>
                        <input type="tel" id="q_phone" name="phone" placeholder="+880 ..." required>
                    </div>
                    <div class="form-group">
                        <label for="q_service">Service Required *</label>
                        <select id="q_service" name="service" required>
                            <option value="">Select a service</option>
                            <option>Web Design</option>
                            <option>Web Development</option>
                            <option>SEO Services</option>
                            <option>Digital Marketing</option>
                            <option>Software Development</option>
                            <option>App Development</option>
                            <option>E-Commerce Website</option>
                            <option>Website Maintenance</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="q_budget">Your Budget</label>
                        <select id="q_budget" name="budget">
                            <option value="">Select budget range</option>
                            <option>Under ৳5,000</option>
                            <option>৳5,000 - ৳10,000</option>
                            <option>৳10,000 - ৳25,000</option>
                            <option>৳25,000 - ৳50,000</option>
                            <option>Above ৳50,000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q_timeline">Expected Timeline</label>
                        <select id="q_timeline" name="timeline">
                            <option value="">Select timeline</option>
                            <option>ASAP (1-2 weeks)</option>
                            <option>1 month</option>
                            <option>2-3 months</option>
                            <option>Flexible</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="q_website">Existing Website URL (if any)</label>
                    <input type="url" id="q_website" name="website" placeholder="https://yourwebsite.com">
                </div>
                <div class="form-group">
                    <label for="q_details">Project Details *</label>
                    <textarea id="q_details" name="details" placeholder="Please describe your project requirements, goals and any specific features you need..." style="height:160px;" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Submit Quote Request →</button>
            </form>
        </div>
    </div>
</section>

<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-card">
                <div style="font-size:32px;flex-shrink:0;"><img src="{{ asset('images/icons/money-back.png') }}" alt="Money Back" style="width:40px;height:40px;object-fit:contain;" onerror="this.style.fontSize='32px';this.outerHTML='💰'"></div>
                <div><h4>Money Back Guarantee</h4><p>100% refund if not satisfied</p></div>
            </div>
            <div class="trust-card">
                <div style="font-size:32px;flex-shrink:0;"><img src="{{ asset('images/icons/nda.png') }}" alt="NDA" style="width:40px;height:40px;object-fit:contain;" onerror="this.style.fontSize='32px';this.outerHTML='🔒'"></div>
                <div><h4>NDA Protected</h4><p>Your data is fully secure</p></div>
            </div>
            <div class="trust-card">
                <div style="font-size:32px;flex-shrink:0;"><img src="{{ asset('images/icons/price.png') }}" alt="Price" style="width:40px;height:40px;object-fit:contain;" onerror="this.style.fontSize='32px';this.outerHTML='🏷️'"></div>
                <div><h4>Price Guarantee</h4><p>Best price in the market</p></div>
            </div>
            <div class="trust-card">
                <div style="font-size:32px;flex-shrink:0;"><img src="{{ asset('images/icons/support.png') }}" alt="Support" style="width:40px;height:40px;object-fit:contain;" onerror="this.style.fontSize='32px';this.outerHTML='🌍'"></div>
                <div><h4>World Class Support</h4><p>24/7 dedicated support team</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
