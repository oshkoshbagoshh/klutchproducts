<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover premium and innovative products at Klutch. Quality meets design in our expertly crafted collection.">
    <meta name="keywords" content="Klutch, products, innovation, design, premium products">
    <title>Klutch Products - Innovation Meets Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --black: #000000;
            --yellow: #FFD700;
            --dark-grey: #333333;
            --light-grey: #F2F2F2;
            --gold: #DAA520;
            --charcoal: #36454F;
            --off-white: #FAFAFA;
            --white: #FFFFFF;
            --bright-yellow: #FFFF00;
            --blue: #1E90FF;
            --transition-standard: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--dark-grey);
            line-height: 1.6;
        }

        /* Header Styles */
        .header {
            background-color: var(--white);
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: var(--black);
            text-decoration: none;
        }

        .logo span {
            color: var(--yellow);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--charcoal);
            font-weight: 500;
            transition: var(--transition-standard);
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        /* Construction Banner */
        .construction-banner {
            background-color: #fff7e6;
            border: 2px dashed #ffa500;
            padding: 20px;
            margin: 100px 20px 20px;
            text-align: center;
            border-radius: 8px;
        }

        .construction-title {
            color: #ff6b00;
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .construction-text {
            color: #666;
            font-size: 16px;
            margin: 0;
        }

        /* Slideshow Styles */
        .slideshow {
            height: 600px;
            position: relative;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.7s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-content {
            text-align: center;
            color: var(--white);
            padding: 2rem;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            max-width: 600px;
        }

        .slide-content h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .slide-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Features Section */
        .features {
            padding: 4rem 2rem;
            background-color: var(--off-white);
        }

        .features-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background-color: var(--white);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: var(--transition-standard);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .feature-card i {
            font-size: 2.5rem;
            color: var(--yellow);
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            color: var(--black);
            margin-bottom: 1rem;
        }

        /* Blog Section */
        .blog-section {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .blog-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: var(--transition-standard);
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-content {
            padding: 1.5rem;
        }

        .blog-content h3 {
            margin-bottom: 1rem;
            color: var(--black);
        }

        .blog-meta {
            color: var(--dark-grey);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        /* CTA Section */
        .cta-section {
            background-color: var(--charcoal);
            color: var(--white);
            padding: 4rem 2rem;
            text-align: center;
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-button {
            background-color: var(--yellow);
            color: var(--black);
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: var(--transition-standard);
            display: inline-block;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: var(--gold);
            transform: translateY(-2px);
        }

        /* Footer Styles */
        .footer {
            background-color: var(--black);
            color: var(--white);
            padding: 4rem 2rem 2rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            color: var(--yellow);
            margin-bottom: 1rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: var(--light-grey);
            text-decoration: none;
            transition: var(--transition-standard);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a:hover {
            color: var(--yellow);
        }

        .footer-bottom {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--dark-grey);
            text-align: center;
            color: var(--light-grey);
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .slide-content h2 {
                font-size: 2rem;
            }

            .slide-content p {
                font-size: 1rem;
            }

            .construction-banner {
                margin: 80px 10px 10px;
            }
        }

        /* Accessibility Improvements */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important;
            }
        }

        /* Print Styles */
        @media print {
            .header,
            .slideshow,
            .cta-section {
                display: none;
            }
        }
    </style>
</head>
<body>
<header class="header">
    <nav class="nav">
        <a href="#home" class="logo">Klutch<span>.</span></a>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#products">Products</a>
            <a href="#services">Services</a>
            <a href="#misc">Misc</a>
            <a href="#faq">FAQ</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>
</header>

<div class="construction-banner" role="alert">
    <div class="construction-title">
        🚧 UNDER CONSTRUCTION 🚧
    </div>
    <p class="construction-text">
        NOTE: WE ARE CURRENTLY UNDER CONSTRUCTION<br>
        THIS IS JUST A TESTING VERSION
    </p>
    <article>
        If you have any questions, please reach out to
        <a href="mailto:info@klutchproducts.com">info@klutchproducts.com</a>
    </article>
</div>

<main>
    <div class="slideshow" role="region" aria-label="Featured Products">
        <div class="slide active">
            <div class="slide-content">
                <h2>Welcome to Klutch</h2>
                <p>Discover our premium collection of innovative products</p>
                <button class="cta-button">Shop Now</button>
            </div>
        </div>
        <div class="slide">
            <div class="slide-content">
                <h2>Quality Meets Design</h2>
                <p>Expertly crafted products for your lifestyle</p>
                <button class="cta-button">Learn More</button>
            </div>
        </div>
        <div class="slide">
            <div class="slide-content">
                <h2>New Arrivals</h2>
                <p>Check out our latest collection</p>
                <button class="cta-button">View Collection</button>
            </div>
        </div>
    </div>

    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Premium Quality</h3>
                <p>All our products are crafted with the finest materials and attention to detail.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-shipping-fast"></i>
                <h3>Fast Shipping</h3>
                <p>Quick and reliable worldwide shipping on all orders.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Our customer service team is always here to help you.</p>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <h2>Latest Blog Posts</h2>
        <div class="blog-grid">
            <article class="blog-card">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8" alt="Blog post 1">
                <div class="blog-content">
                    <h3>10 Tips for Product Innovation</h3>
                    <div class="blog-meta">
                        <span>Dec 13, 2024</span> • <span>5 min read</span>
                    </div>
                    <p>Learn the secrets of successful product innovation and development...</p>
                </div>
            </article>
            <article class="blog-card">
                <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04" alt="Blog post 2">
                <div class="blog-content">
                    <h3>The Future of Design</h3>
                    <div class="blog-meta">
                        <span>Dec 12, 2024</span> • <span>4 min read</span>
                    </div>
                    <p>Exploring upcoming trends in product design and user experience...</p>
                </div>
            </article>
            <article class="blog-card">
                <img src="https://images.unsplash.com/photo-1441985969846-3e7c90531139" alt="Blog post 3">
                <div class="blog-content">
                    <h3>Sustainability in Manufacturing</h3>
                    <div class="blog-meta">
                        <span>Dec 11, 2024</span> • <span>6 min read</span>
                    </div>
                    <p>How we're making our production process more environmentally friendly...</p>
                </div>