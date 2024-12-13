<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klutch Products</title>
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
            transition: opacity 0.5s ease-in-out;
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
            <a href="#products">Products</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>
</header>

{{-- HERO SECTION --}}
{{--LANDING PAGE:--}}
<div class="slideshow">
    <div class="slide active"
         style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8')">
        <div class="slide-content">
            <h2>Welcome to Klutch</h2>
            <p>Discover our premium collection of innovative products</p>
            <button class="cta-button">Shop Now</button>
        </div>
    </div>
    <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1441984904996-e0b6ba687e04')">
        <div class="slide-content">
            <h2>Quality Meets Design</h2>
            <p>Expertly crafted products for your lifestyle</p>
            <button class="cta-button">Learn More</button>
        </div>
    </div>
    <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1441985969846-3e7c90531139')">
        <div class="slide-content">
            <h2>New Arrivals</h2>
            <p>Check out our latest collection</p>
            <button class="cta-button">View Collection</button>
        </div>
    </div>
</div>

{{--Features --}}
<section class="features">
    <div class="features-grid">
        <div class="feature-card">
            <h3>Premium Quality</h3>
            <p>Our products are crafted with the finest materials and attention to detail.</p>
        </div>
        <div class="feature-card">
            <h3>Innovation</h3>
            <p>Leading the way with cutting-edge design and technology.</p>
        </div>
        <div class="feature-card">
            <h3>Sustainability</h3>
            <p>Committed to eco-friendly practices and sustainable manufacturing.</p>
        </div>
    </div>
</section>

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
    setInterval(nextSlide, 5000);

</script>
</body>
</html>