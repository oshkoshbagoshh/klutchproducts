<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Discover premium and innovative products at Klutch. Quality meets design in our expertly crafted collection.">
    <meta name="keywords" content="Klutch, products, innovation, design, premium products">
    <title>Klutch Products - Innovation Meets Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    {{-- <style>
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

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--yellow);
            color: var(--black);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0;
            transition: opacity 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .back-to-top.visible {
            opacity: 1;
        }

        /* Chat Widget */
        .chat-widget {
            position: fixed;
            bottom: 20px;
            right: 80px;
            z-index: 1000;
        }

        .chat-button {
            background: var(--charcoal);
            color: var(--white);
            padding: 1rem;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .chat-popup {
            position: absolute;
            bottom: 70px;
            right: 0;
            width: 300px;
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            display: none;
        }

        .chat-popup.active {
            display: block;
        }

        .chat-header {
            background: var(--charcoal);
            color: var(--white);
            padding: 1rem;
            border-radius: 10px 10px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-messages {
            height: 300px;
            padding: 1rem;
            overflow-y: auto;
        }

        .chat-input {
            padding: 1rem;
            border-top: 1px solid var(--light-grey);
            display: flex;
        }

        .chat-input input {
            flex: 1;
            padding: 0.5rem;
            border: 1px solid var(--light-grey);
            border-radius: 5px;
            margin-right: 0.5rem;
        }

        /* Testimonials */
        .testimonials {
            padding: 4rem 2rem;
            background: var(--off-white);
        }

        .testimonial-slider {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .testimonial-slide {
            display: none;
            text-align: center;
            padding: 2rem;
        }

        .testimonial-slide.active {
            display: block;
        }

        .testimonial-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 1rem;
        }

        /* Newsletter */
        .newsletter {
            background: var(--charcoal);
            color: var(--white);
            padding: 2rem;
            text-align: center;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 1rem auto;
            display: flex;
            gap: 1rem;
        }

        .newsletter-form input {
            flex: 1;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
        }

        /* Featured Products */
        .featured-products {
            padding: 4rem 2rem;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-price {
            color: var(--gold);
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style> --}}
    <link rel="stylesheet" href="/resources/css/welcome.css">
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
                <a href="#chat">Chat</a>
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


    {{-- HERO --}}
    <div class="slideshow" role="region" aria-label="Featured Products">
        <div class="slide active">
            <div class="slide-content">
                <h2>Welcome to Klutch Products</h2>
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
            </article>
        </div>
    </section>

    <section class="featured-products" data-aos="fade-up">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8" alt="Product 1"
                    class="product-image">
                <div class="product-info">
                    <h3>Premium Product 1</h3>
                    <p>High-quality craftsmanship with modern design</p>
                    <div class="product-price">$99.99</div>
                    <button class="cta-button">Add to Cart</button>
                </div>
            </div>
            <!-- Add more product cards -->
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" data-aos="fade-up">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-slider">
            <div class="testimonial-slide active">
                <img src="https://i.pravatar.cc/150?img=1" alt="Customer 1" class="testimonial-avatar">
                <p>"Absolutely love the quality of Klutch products. The attention to detail is outstanding!"</p>
                <h4>John Doe</h4>
                <p>CEO, Tech Corp</p>
            </div>
            <!-- Add more testimonials -->
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter" data-aos="fade-up">
        <h2>Stay Updated</h2>
        <p>Subscribe to our newsletter for the latest updates and exclusive offers.</p>
        <form class="newsletter-form">
            <input type="email" placeholder="Enter your email">
            <button type="submit" class="cta-button">Subscribe</button>
        </form>
    </section>

    <!-- Chat Widget -->
    <div class="chat-widget">
        <div class="chat-button">
            <i class="fas fa-comments"></i>
        </div>
        <div class="chat-popup">
            <div class="chat-header">
                <span>Chat Support</span>
                <i class="fas fa-times"></i>
            </div>
            <div class="chat-messages"></div>
            <div class="chat-input">
                <input type="text" placeholder="Type your message...">
                <button class="cta-button">Send</button>
            </div>
        </div>
    </div>


    <section class="cta-section">
        <div class="cta-content">
            <h2>Join Our Team</h2>
            <p>Be part of something extraordinary. We're always looking for talented individuals to join our innovative
                team.</p>
            <a href="#careers" class="cta-button">Join Klutch Today</a>
        </div>
    </section>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>


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
            <p>&copy; 2024 Klutch Products. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Back to Top Button
        const backToTop = document.querySelector('.back-to-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        // Chat Widget
        const chatButton = document.querySelector('.chat-button');
        const chatPopup = document.querySelector('.chat-popup');
        const chatClose = document.querySelector('.chat-header .fa-times');

        chatButton.addEventListener('click', () => {
            chatPopup.classList.toggle('active');
        });

        chatClose.addEventListener('click', () => {
            chatPopup.classList.remove('active');
        });

        // Testimonial Slider
        const testimonials = document.querySelectorAll('.testimonial-slide');
        let currentTestimonial = 0;

        function showTestimonial(index) {
            testimonials.forEach(slide => slide.classList.remove('active'));
            testimonials[index].classList.add('active');
        }

        function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }

        setInterval(nextTestimonial, 5000);
    </script>
</body>

</html>
