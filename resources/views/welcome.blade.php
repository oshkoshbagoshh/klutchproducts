<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klutch Products</title>
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
        }

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
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .slideshow {
            margin-top: 80px;
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

        .cta-button {
            background-color: var(--yellow);
            color: var(--black);
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: var(--gold);
        }

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
        }

        .feature-card h3 {
            color: var(--black);
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: var(--dark-grey);
        }

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

        .cta-content h2 {
            margin-bottom: 1.5rem;
            font-size: 2.5rem;
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
            transition: background-color 0.3s ease;
            display: inline-block;
            text-decoration: none;
            margin-top: 1rem;
        }

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
            transition: color 0.3s ease;
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

        .cta-content h2 {
            margin-bottom: 1.5rem;
            font-size: 2.5rem;
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
            transition: background-color 0.3s ease;
            display: inline-block;
            text-decoration: none;
            margin-top: 1rem;
        }

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
            transition: color 0.3s ease;
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


        /* MEDIA QUERIES */
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
        }
    </style>
</head>
<body>
{{--HEADER--}}
<header class="header">
    <nav class="nav">
        <div class="logo">Klutch<span>.</span></div>
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

{{-- HERO SECTION --}}


{{--LANDING PAGE:--}}

{{-- SLIDESHOW --}}
<div class="slideshow">
    <div class="slide active"
         style="background-image: url('https://plus.unsplash.com/premium_photo-1681488262364-8aeb1b6aac56?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8ZWNvbW1lcmNlfGVufDB8fDB8fHww')">
        <div class="slide-content">
            <h2>Welcome to Klutch</h2>
            <p>Discover our premium collection of innovative products</p>
            <button class="cta-button">Shop Now</button>
        </div>
    </div>
    <div class="slide" style="background-image: url('https://plus.unsplash.com/premium_photo-1682310144714-cb77b1e6d64a?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cmV2aWV3fGVufDB8fDB8fHww')">
        <div class="slide-content">
            <h2>Quality Meets Design</h2>
            <p>Expertly crafted products for your lifestyle</p>
            <button class="cta-button">Learn More</button>
        </div>
    </div>
    <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzl8fGRhdGF8ZW58MHx8MHx8fDA%3D')">
        <div class="slide-content">
            <h2>New Arrivals</h2>
            <p>Check out our latest collection</p>
            <button class="cta-button">View Collection</button>
        </div>
    </div>
</div>

{{-- SECTION --}}
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
        </article>
    </div>
</section>

<section class="cta-section">
    <div class="cta-content">
        <h2>Join Our Team</h2>
        <p>Be part of something extraordinary. We're always looking for talented individuals to join our innovative
            team.</p>
        <a href="#careers" class="cta-button">Join Klutch Today</a>
    </div>
</section>


{{--FOOTER --}}
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>About Klutch</h3>
            <ul class="footer-links">
                <li><a href="#about">About Us</a></li>
                <li><a href="#careers">Careers</a></li>
                <li><a href="#press">Press</a></li>
                <li><a href="#blog">Blog</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Support</h3>
            <ul class="footer-links">
                <li><a href="#help">Help Center</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#shipping">Shipping Info</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Legal</h3>
            <ul class="footer-links">
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#terms">Terms of Service</a></li>
                <li><a href="#cookies">Cookie Policy</a></li>
                <li><a href="#compliance">Compliance</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Connect</h3>
            <ul class="footer-links">
                <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Klutch Products. All rights reserved. | Powered by <a href="https://pentecost.ai">
            Pentecost.AI </a>
        </p>
    </div>
</footer>


{{--Javascript--}}
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Change slides every 5 seconds
    setInterval(nextSlide, 8000);

</script>
</body>
</html>