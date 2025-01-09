/*
 **	AJ Javadi
 **	Created	1/9/2025
 **	/Users/aj/Herd/klutchproducts-1/resources/js/welcome.js
 */

// Initialize AOS
AOS.init({
    duration: 1000,
    once: true,
});

// Back to Top Button
const backToTop = document.querySelector(".back-to-top");
window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        backToTop.classList.add("visible");
    } else {
        backToTop.classList.remove("visible");
    }
});

// Chat Widget
const chatButton = document.querySelector(".chat-button");
const chatPopup = document.querySelector(".chat-popup");
const chatClose = document.querySelector(".chat-header .fa-times");

chatButton.addEventListener("click", () => {
    chatPopup.classList.toggle("active");
});

chatClose.addEventListener("click", () => {
    chatPopup.classList.remove("active");
});

// Testimonial Slider
const testimonials = document.querySelectorAll(".testimonial-slide");
let currentTestimonial = 0;

function showTestimonial(index) {
    testimonials.forEach((slide) => slide.classList.remove("active"));
    testimonials[index].classList.add("active");
}

function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    showTestimonial(currentTestimonial);
}

setInterval(nextTestimonial, 5000);
