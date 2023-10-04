// Get references to the carousel elements
const carouselContainerElement = document.querySelector('.carousel-container');
const slides = document.querySelectorAll('.carousel-slide');

let currentSlideIndex = 0;

// Function to show the next slide
function showNextSlide() {
    slides[currentSlideIndex].style.display = 'none';
    currentSlideIndex = (currentSlideIndex + 1) % slides.length;
    slides[currentSlideIndex].style.display = 'block';
}

// Start the slideshow
setInterval(showNextSlide, 3000); // Change slide every 3 seconds (adjust as needed)

// Add an event listener to initialize the carousel
document.addEventListener('DOMContentLoaded', function() {
    // Initialize the carousel
    showNextSlide();
});