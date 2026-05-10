<?php

namespace App\Http\Controllers;

class ServicePageController extends Controller
{
    public static function getData(string $category, string $slug = ''): ?array
    {
        $all = self::allServices();
        if (!isset($all[$category])) return null;
        $cat = $all[$category];

        if ($slug === '' || $slug === null) {
            return ['category' => $cat, 'page' => null, 'slug' => ''];
        }

        if (!isset($cat['pages'][$slug])) return null;
        return ['category' => $cat, 'page' => $cat['pages'][$slug], 'slug' => $slug];
    }

    private static function allServices(): array
    {
        return [
            'seo' => [
                'title' => 'SEO Services',
                'subtitle' => 'Rank #1 on Google and drive organic traffic to your business',
                'image' => 'seo.jpg',
                'color' => '#2ecc71',
                'intro' => 'Our SEO experts use proven white-hat strategies to boost your website rankings, increase organic traffic and grow your business online.',
                'pages' => [
                    'on-page-seo' => [
                        'title' => 'On-Page SEO',
                        'price' => '৳2,999/mo',
                        'desc' => 'On-Page SEO is the practice of optimizing individual web pages to rank higher in search engines. We optimize meta tags, headings, content, images, internal links and URL structure.',
                        'features' => ['Keyword Research & Mapping','Title & Meta Description Optimization','Header Tags (H1–H6) Optimization','Content Optimization & NLP','Image Alt Text & Compression','Internal Linking Strategy','URL Structure Optimization','Schema Markup Implementation','Page Speed Optimization','Core Web Vitals Fix'],
                        'image' => 'seo.jpg',
                    ],
                    'off-page-seo' => [
                        'title' => 'Off-Page SEO',
                        'price' => '৳3,499/mo',
                        'desc' => 'Off-Page SEO builds your website\'s authority through high-quality backlinks, brand mentions and external signals that tell Google your site is trustworthy.',
                        'features' => ['High-Authority Backlink Building','Guest Post Outreach','Broken Link Building','Directory Submissions','Social Bookmarking','Brand Mention Monitoring','Competitor Backlink Analysis','Link Detox & Disavow','Press Release Distribution','Local Citation Building'],
                        'image' => 'seo.jpg',
                    ],
                    'local-seo' => [
                        'title' => 'Local SEO',
                        'price' => '৳2,499/mo',
                        'desc' => 'Local SEO helps your business appear in local search results and Google Maps. Perfect for businesses targeting customers in a specific city or region.',
                        'features' => ['Google Business Profile Optimization','Local Keyword Research','NAP Consistency Audit','Local Citation Building','Google Maps Ranking','Review Management','Local Landing Pages','Geo-Targeted Content','Local Link Building','Competitor Local Analysis'],
                        'image' => 'seo.jpg',
                    ],
                    'technical-seo' => [
                        'title' => 'Technical SEO',
                        'price' => '৳3,999/mo',
                        'desc' => 'Technical SEO ensures search engines can crawl, index and understand your website. We fix technical issues that prevent your site from ranking.',
                        'features' => ['Site Crawl & Audit','XML Sitemap Optimization','Robots.txt Configuration','Canonical Tag Implementation','HTTPS & SSL Setup','Mobile Usability Fixes','Structured Data Markup','Redirect Management','Core Web Vitals Optimization','Duplicate Content Resolution'],
                        'image' => 'seo.jpg',
                    ],
                    'ecommerce-seo' => [
                        'title' => 'E-Commerce SEO',
                        'price' => '৳4,999/mo',
                        'desc' => 'E-Commerce SEO drives targeted shoppers to your online store. We optimize product pages, categories and the full shopping experience for search engines.',
                        'features' => ['Product Page Optimization','Category Page SEO','Product Schema Markup','Faceted Navigation Fix','Duplicate Product Content Fix','Shopping Feed Optimization','Conversion Rate Optimization','Site Architecture Planning','Competitor Product Analysis','Review & Rating Integration'],
                        'image' => 'ecommerce.jpg',
                    ],
                ],
            ],

            'web-design' => [
                'title' => 'Web Design',
                'subtitle' => 'Beautiful, modern websites that convert visitors into customers',
                'image' => 'web-design.jpg',
                'color' => '#3498db',
                'intro' => 'We design stunning, responsive websites that look great on all devices and help your business stand out from the competition.',
                'pages' => [
                    'business-website' => [
                        'title' => 'Business Website',
                        'price' => 'Starting ৳4,999',
                        'desc' => 'A professional business website is your most important digital asset. We create custom business websites that represent your brand perfectly and generate leads.',
                        'features' => ['Custom Design (No Templates)','Fully Responsive (Mobile-Friendly)','Up to 10 Pages','Contact Form Integration','Google Maps Integration','Social Media Links','SEO Ready Structure','Fast Loading Speed','Free 1 Year Hosting','Free Domain (.com)'],
                        'image' => 'web-design.jpg',
                    ],
                    'landing-page' => [
                        'title' => 'Landing Page Design',
                        'price' => 'Starting ৳1,999',
                        'desc' => 'A high-converting landing page designed to turn visitors into leads or customers. Perfect for ad campaigns, product launches and promotions.',
                        'features' => ['Single Page Design','Conversion-Focused Layout','A/B Testing Ready','Lead Capture Form','Fast Load Speed (<2s)','Mobile Optimized','CTA Button Optimization','Analytics Integration','Heat Map Ready','Unlimited Revisions'],
                        'image' => 'web-design.jpg',
                    ],
                    'portfolio-website' => [
                        'title' => 'Portfolio Website',
                        'price' => 'Starting ৳3,499',
                        'desc' => 'Showcase your work with a stunning portfolio website. Perfect for freelancers, photographers, designers, agencies and creative professionals.',
                        'features' => ['Elegant Portfolio Gallery','Filterable Project Grid','Case Study Pages','Testimonials Section','About & Bio Page','Blog Integration','Contact Form','Resume/CV Download','Social Media Links','SEO Optimized'],
                        'image' => 'web-design.jpg',
                    ],
                    'wordpress-design' => [
                        'title' => 'WordPress Design',
                        'price' => 'Starting ৳5,999',
                        'desc' => 'Custom WordPress website design built on the world\'s most popular CMS. Easy to manage, update and scale as your business grows.',
                        'features' => ['Custom WordPress Theme','Page Builder Integration','Plugin Configuration','WooCommerce Setup','Speed Optimization','Security Hardening','Backup System','SEO Plugin Setup','Contact Form 7','Training & Documentation'],
                        'image' => 'web-design.jpg',
                    ],
                ],
            ],

            'web-development' => [
                'title' => 'Web Development',
                'subtitle' => 'Powerful web applications built with the latest technologies',
                'image' => 'web-dev.jpg',
                'color' => '#9b59b6',
                'intro' => 'Our development team builds scalable, secure and high-performance web applications using modern frameworks like Laravel, React and Vue.js.',
                'pages' => [
                    'custom-web-app' => [
                        'title' => 'Custom Web Application',
                        'price' => 'Starting ৳14,999',
                        'desc' => 'We build fully custom web applications tailored to your exact business requirements. From simple tools to complex enterprise systems.',
                        'features' => ['Requirements Analysis','Custom Architecture Design','Laravel / Node.js Backend','React / Vue.js Frontend','RESTful API Development','Database Design','User Authentication','Role-Based Permissions','Admin Dashboard','Deployment & Support'],
                        'image' => 'web-dev.jpg',
                    ],
                    'ecommerce' => [
                        'title' => 'E-Commerce Development',
                        'price' => 'Starting ৳7,999',
                        'desc' => 'Full-featured online store development with payment gateways, inventory management, order tracking and a beautiful customer experience.',
                        'features' => ['Custom E-Commerce Platform','Product & Category Management','bKash / Nagad / SSLCommerz','Shopping Cart & Checkout','Order Management System','Customer Accounts','Inventory Management','Coupon & Discount System','Mobile Responsive','SEO Optimized'],
                        'image' => 'ecommerce.jpg',
                    ],
                    'cms-development' => [
                        'title' => 'CMS Development',
                        'price' => 'Starting ৳9,999',
                        'desc' => 'Custom Content Management Systems that give you full control over your website content without needing a developer for every change.',
                        'features' => ['Custom CMS Dashboard','Content Editor (WYSIWYG)','Media Library Management','User Role Management','Multi-Language Support','SEO Meta Management','Blog & News Module','Page Builder','Version Control','Training Included'],
                        'image' => 'web-dev.jpg',
                    ],
                    'api-development' => [
                        'title' => 'API Development',
                        'price' => 'Starting ৳11,999',
                        'desc' => 'RESTful and GraphQL API development for mobile apps, third-party integrations and microservices architecture.',
                        'features' => ['RESTful API Design','GraphQL API','JWT Authentication','OAuth 2.0 Integration','API Documentation','Rate Limiting','Versioning Support','Webhook Implementation','Third-Party Integrations','Postman Collection'],
                        'image' => 'web-dev.jpg',
                    ],
                ],
            ],

            'digital-marketing' => [
                'title' => 'Digital Marketing',
                'subtitle' => 'Grow your brand and reach more customers online',
                'image' => 'digital-marketing.jpg',
                'color' => '#e67e22',
                'intro' => 'Our digital marketing experts create data-driven campaigns that increase brand awareness, generate leads and boost sales.',
                'pages' => [
                    'social-media-marketing' => [
                        'title' => 'Social Media Marketing',
                        'price' => '৳3,999/mo',
                        'desc' => 'Build a strong social media presence and engage your audience on Facebook, Instagram, LinkedIn and YouTube with compelling content and strategies.',
                        'features' => ['Social Media Strategy','Content Calendar','Graphic Design for Posts','Post Scheduling','Community Management','Hashtag Research','Audience Growth','Story & Reel Creation','Performance Analytics','Monthly Reporting'],
                        'image' => 'digital-marketing.jpg',
                    ],
                    'facebook-ads' => [
                        'title' => 'Facebook Ads',
                        'price' => '৳4,999/mo',
                        'desc' => 'Targeted Facebook and Instagram advertising campaigns that reach your ideal customers and deliver measurable results.',
                        'features' => ['Campaign Strategy','Audience Research & Targeting','Ad Creative Design','Copywriting','A/B Testing','Pixel Setup & Tracking','Retargeting Campaigns','Budget Optimization','Conversion Tracking','Bi-Weekly Reporting'],
                        'image' => 'digital-marketing.jpg',
                    ],
                    'google-ads' => [
                        'title' => 'Google Ads',
                        'price' => '৳5,999/mo',
                        'desc' => 'Google Search, Display and Shopping ads that put your business in front of people actively searching for your products or services.',
                        'features' => ['Keyword Research','Search Campaign Setup','Display Advertising','Shopping Ads (PLA)','Remarketing Campaigns','Ad Copywriting','Quality Score Optimization','Bid Management','Conversion Tracking','Monthly Performance Report'],
                        'image' => 'digital-marketing.jpg',
                    ],
                    'email-marketing' => [
                        'title' => 'Email Marketing',
                        'price' => '৳2,999/mo',
                        'desc' => 'Professional email marketing campaigns that nurture leads, retain customers and drive repeat sales with personalized messaging.',
                        'features' => ['Email Strategy Development','Template Design','List Segmentation','Automation Workflows','Welcome Email Sequence','Newsletter Campaigns','A/B Subject Line Testing','Deliverability Optimization','Open & Click Tracking','Monthly Analytics Report'],
                        'image' => 'digital-marketing.jpg',
                    ],
                    'content-marketing' => [
                        'title' => 'Content Marketing',
                        'price' => '৳3,499/mo',
                        'desc' => 'High-quality content that attracts, educates and converts your target audience. From blog posts to videos and infographics.',
                        'features' => ['Content Strategy Development','Blog Post Writing (4/mo)','SEO-Optimized Articles','Infographic Design','Video Script Writing','Social Media Content','E-book / Guide Creation','Content Distribution','Performance Tracking','Editorial Calendar'],
                        'image' => 'digital-marketing.jpg',
                    ],
                ],
            ],

            'software' => [
                'title' => 'Software Development',
                'subtitle' => 'Custom software solutions for every business need',
                'image' => 'software.jpg',
                'color' => '#e74c3c',
                'intro' => 'We build powerful, scalable business software that automates processes, saves time and helps your business run more efficiently.',
                'pages' => [
                    'erp-software' => [
                        'title' => 'ERP Software',
                        'price' => 'Starting ৳49,999',
                        'desc' => 'Enterprise Resource Planning software that integrates all your business processes — finance, HR, inventory, sales and more — into one unified system.',
                        'features' => ['Financial Management Module','HR & Payroll Module','Inventory Management','Sales & CRM Module','Purchase Management','Production Planning','Multi-Branch Support','User Role Management','Custom Reports & Analytics','Cloud / On-Premise Deployment'],
                        'image' => 'software.jpg',
                    ],
                    'hrm-software' => [
                        'title' => 'HRM Software',
                        'price' => 'Starting ৳24,999',
                        'desc' => 'Complete Human Resource Management software for employee management, attendance, payroll, leave tracking and performance evaluation.',
                        'features' => ['Employee Database Management','Attendance & Biometric Integration','Leave Management','Payroll Processing','Salary Sheet Generation','Performance Appraisal','Recruitment Module','Training Management','HR Reports & Analytics','Mobile App Access'],
                        'image' => 'software.jpg',
                    ],
                    'accounting-software' => [
                        'title' => 'Accounting Software',
                        'price' => 'Starting ৳19,999',
                        'desc' => 'Comprehensive accounting software for managing income, expenses, invoices, tax reports and financial statements with ease.',
                        'features' => ['Chart of Accounts','Income & Expense Tracking','Invoice Generation','Payment Tracking','Bank Reconciliation','VAT / Tax Management','Financial Reports (P&L, Balance Sheet)','Multi-Currency Support','Customer & Vendor Ledger','Year-End Closing'],
                        'image' => 'software.jpg',
                    ],
                    'pos-software' => [
                        'title' => 'POS Software',
                        'price' => 'Starting ৳14,999',
                        'desc' => 'Point of Sale software for retail shops, restaurants and service businesses. Fast, reliable and easy to use.',
                        'features' => ['Fast Billing & Checkout','Barcode Scanner Support','Inventory Management','Daily Sales Reports','Customer Management','Discount & Coupon System','Multi-Counter Support','Thermal Printer Support','Supplier Management','Offline Mode Support'],
                        'image' => 'software.jpg',
                    ],
                    'school-management' => [
                        'title' => 'School Management Software',
                        'price' => 'Starting ৳29,999',
                        'desc' => 'Complete school management system covering student admissions, attendance, exams, fees, payroll and parent communication.',
                        'features' => ['Student Admission & Profile','Class & Section Management','Attendance Tracking','Exam & Result Management','Fee Collection & Reports','Teacher & Staff Management','Library Management','SMS / Email Notifications','Parent Portal','Custom Report Cards'],
                        'image' => 'software.jpg',
                    ],
                ],
            ],

            'apps' => [
                'title' => 'App Development',
                'subtitle' => 'Mobile apps that engage your users and grow your business',
                'image' => 'app-dev.jpg',
                'color' => '#1abc9c',
                'intro' => 'We build high-quality mobile applications for Android and iOS that deliver seamless user experiences and achieve your business goals.',
                'pages' => [
                    'android-app' => [
                        'title' => 'Android App Development',
                        'price' => 'Starting ৳9,999',
                        'desc' => 'Native Android applications built with Kotlin and Java, optimized for performance, security and the best user experience on Android devices.',
                        'features' => ['Native Android Development','Kotlin / Java','Material Design UI','Google Play Store Publishing','Push Notifications','In-App Purchases','Google Maps Integration','Firebase Integration','Offline Mode','Free 6 Months Support'],
                        'image' => 'app-dev.jpg',
                    ],
                    'ios-app' => [
                        'title' => 'iOS App Development',
                        'price' => 'Starting ৳14,999',
                        'desc' => 'Native iOS applications built with Swift for iPhone and iPad, following Apple\'s design guidelines for a premium user experience.',
                        'features' => ['Native iOS Development','Swift / SwiftUI','Apple Human Interface Guidelines','App Store Publishing','Push Notifications (APNs)','Apple Pay Integration','Face ID / Touch ID','iCloud Integration','Core Data','Free 6 Months Support'],
                        'image' => 'app-dev.jpg',
                    ],
                    'cross-platform' => [
                        'title' => 'Cross Platform App',
                        'price' => 'Starting ৳11,999',
                        'desc' => 'Single codebase apps that run on both Android and iOS using Flutter or React Native — saving time and cost without sacrificing quality.',
                        'features' => ['Flutter / React Native','Single Codebase','Android + iOS Deployment','Near-Native Performance','Hot Reload Development','Custom UI Components','REST API Integration','Push Notifications','App Store + Play Store','Free 6 Months Support'],
                        'image' => 'app-dev.jpg',
                    ],
                ],
            ],
        ];
    }
}
