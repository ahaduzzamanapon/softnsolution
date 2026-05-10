<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Softnsolution - Best Software Company in Bangladesh. Web Design, Web Development, SEO, Digital Marketing & App Development.')">
    <title>@yield('title', 'Softnsolution - Best Software Company in Bangladesh')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<!-- TOP BAR -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span class="phone-icon">+880 1913-661122</span>
            <span>|</span>
            <span>📧 info@softnsolution.com</span>
        </div>
        <div class="top-bar-right">
            <a href="/blog">Blog</a>
            <span>|</span>
            <a href="/contact">Contact</a>
            <span>|</span>
            <a href="#">Forum</a>
        </div>
    </div>
</div>

<!-- MIDDLE HEADER -->
<div class="mid-header">
    <div class="container">
        <a href="/" class="logo-text">soft<span>n</span>solution</a>
        <nav class="mid-nav">
            <a href="/our-works">Our Works</a>
            <a href="/about-us">About Us</a>
            <a href="/services">Services</a>
            <a href="/faq">FAQ</a>
            <a href="/get-a-quote" class="btn-quote">Get a Quote</a>
        </nav>
    </div>
</div>

<!-- MAIN NAV -->
<nav class="main-nav">
    <div class="container">
        <div class="nav-dropdown">
            <a href="#">SEO ▾</a>
            <div class="dropdown-menu">
                <a href="#">On-Page SEO</a>
                <a href="#">Off-Page SEO</a>
                <a href="#">Local SEO</a>
                <a href="#">Technical SEO</a>
                <a href="#">E-Commerce SEO</a>
            </div>
        </div>
        <div class="nav-dropdown">
            <a href="#">Web Design ▾</a>
            <div class="dropdown-menu">
                <a href="#">Business Website</a>
                <a href="#">Landing Page</a>
                <a href="#">Portfolio Website</a>
                <a href="#">WordPress Design</a>
            </div>
        </div>
        <div class="nav-dropdown">
            <a href="#">Web Development ▾</a>
            <div class="dropdown-menu">
                <a href="#">Custom Web App</a>
                <a href="#">E-Commerce</a>
                <a href="#">CMS Development</a>
                <a href="#">API Development</a>
            </div>
        </div>
        <div class="nav-dropdown">
            <a href="#">Digital Marketing ▾</a>
            <div class="dropdown-menu">
                <a href="#">Social Media Marketing</a>
                <a href="#">Facebook Ads</a>
                <a href="#">Google Ads</a>
                <a href="#">Email Marketing</a>
                <a href="#">Content Marketing</a>
            </div>
        </div>
        <div class="nav-dropdown">
            <a href="#">Software ▾</a>
            <div class="dropdown-menu">
                <a href="#">ERP Software</a>
                <a href="#">HRM Software</a>
                <a href="#">Accounting Software</a>
                <a href="#">POS Software</a>
                <a href="#">School Management</a>
            </div>
        </div>
        <div class="nav-dropdown">
            <a href="#">Apps ▾</a>
            <div class="dropdown-menu">
                <a href="#">Android App</a>
                <a href="#">iOS App</a>
                <a href="#">Cross Platform</a>
            </div>
        </div>
    </div>
</nav>

<!-- PAGE CONTENT -->
@yield('content')

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>About Softnsolution</h4>
                <p>Softnsolution is one of the leading software companies in Bangladesh. We provide world-class web design, development, SEO, digital marketing, software, and app development services.</p>
                <br>
                <p>📍 Dhaka, Bangladesh</p>
                <p>📞 +880 1913-661122</p>
                <p>📧 info@softnsolution.com</p>
            </div>
            <div class="footer-col">
                <h4>Our Company</h4>
                <ul>
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/our-works">Our Works</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/get-a-quote">Get a Quote</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">SEO Services</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Software Development</a></li>
                    <li><a href="#">App Development</a></li>
                    <li><a href="#">E-Commerce</a></li>
                    <li><a href="#">Domain & Hosting</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Info</h4>
                <ul>
                    <li><a href="#">Monday - Friday: 9am - 6pm</a></li>
                    <li><a href="#">Saturday: 10am - 4pm</a></li>
                    <li><a href="#">Sunday: Closed</a></li>
                </ul>
                <br>
                <p style="color:#aaa;font-size:13px;">Follow Us:</p>
                <div style="display:flex;gap:10px;margin-top:10px;flex-wrap:wrap;">
                    <a href="#" style="background:#1877f2;color:#fff;padding:6px 12px;border-radius:4px;font-size:12px;text-decoration:none;">Facebook</a>
                    <a href="#" style="background:#e4405f;color:#fff;padding:6px 12px;border-radius:4px;font-size:12px;text-decoration:none;">Instagram</a>
                    <a href="#" style="background:#1da1f2;color:#fff;padding:6px 12px;border-radius:4px;font-size:12px;text-decoration:none;">Twitter</a>
                    <a href="#" style="background:#0a66c2;color:#fff;padding:6px 12px;border-radius:4px;font-size:12px;text-decoration:none;">LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            &copy; {{ date('Y') }} <a href="/">Softnsolution</a>. All Rights Reserved. | Designed & Developed by <a href="/">Softnsolution</a>
        </div>
    </div>
</footer>

<script>
// FAQ toggle
document.querySelectorAll('.faq-question').forEach(function(q){
    q.addEventListener('click',function(){
        var item = this.closest('.faq-item');
        item.classList.toggle('open');
        this.querySelector('.faq-icon').textContent = item.classList.contains('open') ? '−' : '+';
    });
});
// Portfolio filter
document.querySelectorAll('.filter-btn').forEach(function(btn){
    btn.addEventListener('click',function(){
        document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>
</body>
</html>
