@extends('layouts.app')
@section('title','FAQ - Softnsolution')
@section('meta_description','Frequently asked questions about Softnsolution services, pricing and process.')
@section('content')

<div class="page-hero">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <div class="breadcrumb"><a href="/">Home</a><span>›</span> FAQ</div>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width:800px;">
        <div class="section-header">
            <div class="section-tag">Have Questions?</div>
            <h2>We Have Answers</h2>
            <div class="divider"></div>
        </div>

        @php
        $faqs = [
            ['How long does it take to build a website?','A standard business website typically takes 7-14 days. E-commerce or complex web applications may take 4-8 weeks depending on the scope.'],
            ['What is your pricing structure?','We offer flexible pricing based on project requirements. Web design starts from ৳4,999, SEO from ৳2,999/month, and software development from ৳14,999. Contact us for a custom quote.'],
            ['Do you provide website maintenance after launch?','Yes! We offer monthly maintenance packages starting from ৳1,999/month that include updates, backups, security monitoring and technical support.'],
            ['Do you work with international clients?','Absolutely! We have worked with clients from 20+ countries. We accept international payments and communicate via email, Skype, WhatsApp and Zoom.'],
            ['Can I see your previous work?','Yes, please visit our Our Works page to see our portfolio of 750+ completed projects across various industries.'],
            ['What technologies do you use?','We use Laravel, PHP, React, Vue.js, WordPress, Flutter, Android Studio and more depending on project requirements.'],
            ['Do you offer a money-back guarantee?','Yes, we offer a 100% money-back guarantee if we fail to deliver as per the agreed scope of work.'],
            ['How do I get started?','Simply click Get a Quote, fill in your project details and our team will contact you within 24 hours with a proposal.'],
            ['Do you sign an NDA?','Yes, we sign a Non-Disclosure Agreement (NDA) with all clients to protect their business information and project details.'],
            ['What payment methods do you accept?','We accept bank transfer, bKash, Nagad, PayPal, and major credit/debit cards.'],
        ];
        @endphp

        @foreach($faqs as $faq)
        <div class="faq-item">
            <div class="faq-question">
                {{ $faq[0] }}
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">{{ $faq[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Still Have Questions?</h2>
        <p>Our team is happy to help. Contact us anytime.</p>
        <a href="/contact" class="btn-primary" style="font-size:16px;padding:15px 36px;">Contact Us</a>
    </div>
</section>

@endsection
