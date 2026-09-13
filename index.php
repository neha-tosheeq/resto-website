<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet Bite - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar ko yahan sabse upar rakho -->
    <?php include 'navbar.php'; ?>

    <!-- Header & Banner Section -->
    <div class="header">
        <div class="hero-text">
            <h1>Velvet Bite</h1>
            <p class="hero-subtext">STREET FOOD</p>
        </div>
    </div>
    
    <!-- Logo Section -->
    <div class="logo-container-white">
        <img src="imges/logo2.png" alt="Restaurant Logo">
    </div>

    <!-- About Our Restaurant -->
    <section class="content-section-box">
        <div class="container-grid">
            <div class="text-content">
                <h2>About Our Restaurant</h2>
                <div class="title-underline"></div>
                <p>Welcome to <strong>Velvet Bite</strong>, where street food meets culinary excellence. We pride ourselves on serving the crunchiest burgers, hot-baked pizzas, and mouth-watering wraps crafted from the freshest ingredients and secret house spices.</p>
                <p>Our kitchen is driven by passion, aiming to give you a cozy dining experience and flavors that linger long after your last bite.</p>
            </div>
            <div class="image-content">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=80" alt="Restaurant Ambiance">
            </div>
        </div>
    </section>

    <!-- OUR SIGNATURE MENU SECTION WITH SLIDER ARROWS -->
    <div class="content-section-box" id="menu-preview">
        <div class="section-heading-center">
            <h2>OUR SIGNATURE MENU</h2>
            <div class="title-underline center-line"></div>
            <p>Discover our hand-picked customer favorites made fresh daily.</p>
        </div>

        <!-- Menu Carousel / Slider Wrapper with Left & Right Icons -->
        <div class="menu-slider-wrapper" style="position: relative; display: flex; align-items: center;">
            <button id="slideLeft" style="position: absolute; left: -20px; z-index: 10; background: rgba(229, 89, 14, 0.9); color: white; border: none; width: 45px; height: 45px; border-radius: 50%; cursor: pointer; font-size: 18px; box-shadow: 0 4px 10px rgba(0,0,0,0.5); transition: background 0.3s;"><i class="fa-solid fa-chevron-left"></i></button>
            
            <div id="menuSliderContainer" style="display: flex; gap: 25px; overflow-x: auto; scroll-behavior: smooth; width: 100%; padding: 10px 5px; scrollbar-width: none;">
                <!-- Item 1 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=500&q=80" alt="Burger">
                    <h3>Velvet Signature Burger</h3>
                    <p class="price">$12.99</p>
                </div>
                <!-- Item 2 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=500&q=80" alt="Pizza">
                    <h3>Truffle Crust Pizza</h3>
                    <p class="price">$16.50</p>
                </div>
                <!-- Item 3 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=500&q=80" alt="Steak">
                    <h3>Grilled BBQ Ribs</h3>
                    <p class="price">$21.00</p>
                </div>
                <!-- Item 4 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?auto=format&fit=crop&w=500&q=80" alt="Cheeseburger">
                    <h3>Double Cheese Crunch</h3>
                    <p class="price">$14.00</p>
                </div>
                <!-- Item 5 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=500&q=80" alt="Pepperoni Pizza">
                    <h3>Fiery Pepperoni Pizza</h3>
                    <p class="price">$17.99</p>
                </div>
                <!-- Item 6 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1585238342024-78d387f4a707?auto=format&fit=crop&w=500&q=80" alt="Loaded Fries">
                    <h3>Loaded Cheddar Fries</h3>
                    <p class="price">$8.99</p>
                </div>
                <!-- Item 7 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=500&q=80" alt="Mushroom Pizza">
                    <h3>Wild Mushroom Pizza</h3>
                    <p class="price">$15.50</p>
                </div>
                <!-- Item 8 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=500&q=80" alt="Salad">
                    <h3>Crispy Caesar Salad</h3>
                    <p class="price">$9.50</p>
                </div>
                <!-- Item 9 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?auto=format&fit=crop&w=500&q=80" alt="Tacos">
                    <h3>Spicy Chicken Tacos</h3>
                    <p class="price">$11.20</p>
                </div>
                <!-- Item 10 -->
                <div class="menu-card" style="min-width: 300px; flex: 0 0 auto;">
                    <img src="https://images.unsplash.com/photo-1527477396000-e27163b481c2?auto=format&fit=crop&w=500&q=80" alt="Fried Chicken">
                    <h3>Golden Crispy Wings</h3>
                    <p class="price">$10.00</p>
                </div>
            </div>

            <button id="slideRight" style="position: absolute; right: -20px; z-index: 10; background: rgba(229, 89, 14, 0.9); color: white; border: none; width: 45px; height: 45px; border-radius: 50%; cursor: pointer; font-size: 18px; box-shadow: 0 4px 10px rgba(0,0,0,0.5); transition: background 0.3s;"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>

    <!-- Our Dining Experience -->
    <section class="content-section-box" id="restaurant">
        <div class="container-grid">
            <div class="text-content">
                <h2>Our Dining Experience</h2>
                <div class="title-underline"></div>
                <p>Step into a warm, modern environment designed for families, friends, and food lovers. Enjoy great music, ambient lighting, and top-notch hospitality while relishing your favorite street snacks in an aesthetic seating area.</p>
                <a href="resturant.html" class="page-link-btn">Explore Restaurant <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="image-content">
                <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=600&q=80" alt="Dining Interior">
            </div>
        </div>
    </section>

    <!-- Fast Delivery Services -->
    <section class="content-section-box" id="delivery">
        <div class="container-grid reverse-flex">
            <div class="image-content">
                <img src="https://images.unsplash.com/photo-1526367790999-0150786686a2?auto=format&fit=crop&w=600&q=80" alt="Fast Delivery">
            </div>
            <div class="text-content">
                <h2>Fast Delivery Services</h2>
                <div class="title-underline"></div>
                <p>Craving our food at home? Our rapid delivery network ensures your meals arrive piping hot, crisp, and fresh at your doorstep within 30 minutes. Order now and enjoy restaurant-quality food anywhere!</p>
                <a href="orderdelevery.php" class="page-link-btn">Order Delivery <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Book a Table -->
    <section class="content-section-box" id="booking">
        <div class="container-grid">
            <div class="text-content">
                <h2>Book a Table</h2>
                <div class="title-underline"></div>
                <p>Skip the wait by reserving your table in advance. Whether it's a romantic dinner or a cozy family gathering, we have the perfect spot and pleasant arrangement ready exclusively for you.</p>
                <a href="booktable.html" class="page-link-btn">Reservation Form <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="image-content">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=80" alt="Family Table Dining">
            </div>
        </div>
    </section>

    <!-- Contact Us Footer -->
    <div class="contact-outer-white-bg" id="contact">
        <div class="contact-inner-black-box">
            <h2>Contact Us</h2>
            <div class="title-underline center-line"></div>
            <p>Have questions, feedback, or bulk catering orders? Reach out to our team anytime!</p>
            <div class="contact-details">
                <p><i class="fa-solid fa-location-dot"></i> Main Street, City Center, Pakistan</p>
                <p><i class="fa-solid fa-phone"></i> +92 300 1234567</p>
                <p><i class="fa-solid fa-envelope"></i> support@velvetbite.com</p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <p class="copyright">&copy; 2026 Velvet Bite. All Rights Reserved.</p>
        </div>
    </div>

    <!-- JavaScript for Left/Right Slider Buttons -->
    <script>
        const slider = document.getElementById('menuSliderContainer');
        document.getElementById('slideLeft').addEventListener('click', () => {
            slider.scrollBy({ left: -330, behavior: 'smooth' });
        });
        document.getElementById('slideRight').addEventListener('click', () => {
            slider.scrollBy({ left: 330, behavior: 'smooth' });
        });
    </script>
    <script src="script.js"></script>
</body>
</html>