// Mobile Menu Hamburger Toggle Logic
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links-left');

if (mobileMenu && navLinks) {
    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// Menu Slider Left / Right Buttons Logic (Existing)
const menuSlider = document.getElementById('menuSlider');
const slideLeft = document.getElementById('slideLeft');
const slideRight = document.getElementById('slideRight');

if (slideLeft && slideRight && menuSlider) {
    slideLeft.addEventListener('click', () => {
        menuSlider.scrollBy({
            left: -290,
            behavior: 'smooth'
        });
    });

    slideRight.addEventListener('click', () => {
        menuSlider.scrollBy({
            left: 290,
            behavior: 'smooth'
        });
    });
}