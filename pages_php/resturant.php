<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant - Velvet Bite</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Har section ka apna bilkul alag aur khula hua box */
        .restaurant-main-wrapper {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
            background: transparent; /* Baray container ka background khatam kar diya hai */
        }

        .container-grid {
            background: rgba(0, 0, 0, 0.9);
            border-radius: 14px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.5);
            display: flex;
            gap: 40px;
            align-items: center;
            margin-bottom: 50px; /* Dono boxes ke darmiyan khubsurat fasla */
            border: 1px solid rgba(255, 123, 0, 0.3);
            transition: all 0.4s ease-in-out;
        }
        
        /* Box par hover karne par strong orange neon glow */
        .container-grid:hover {
            border-color: #ff7b00ce;
            box-shadow: 0 0 30px rgba(255, 123, 0, 0.7);
            transform: translateY(-3px);
        }

        .text-content {
            flex: 1;
            text-align: left;
        }
        .text-content h2 {
            color: #fff;
            font-size: 28px;
            margin-bottom: 10px;
        }
        .text-content p {
            color: #ddd;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        /* Images par strong orange neon glow aur zoom effect */
        .image-content {
            flex: 1;
            overflow: hidden;
            border-radius: 10px;
            border: 2px solid rgba(255, 123, 0, 0.2);
            transition: all 0.4s ease;
        }
        .image-content:hover {
            border-color: #ff7b00e6;
            box-shadow: 0 0 25px rgba(255, 123, 0, 0.8);
        }
        .image-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
            transition: transform 0.4s ease;
        }
        .image-content img:hover {
            transform: scale(1.08);
        }

        .page-link-btn {
            display: inline-block;
            background-color: #ff7b00d0;
            color: white !important;
            padding: 10px 22px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 123, 0, 0.4);
        }
        .page-link-btn:hover {
            background-color: #e66f00d8;
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(255, 123, 0, 0.8);
        }
        
        /* Gallery Grid ke images par bhi neon glow effect */
        .restaurant-gallery {
            max-width: 1100px;
            margin: 0 auto 60px auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 0 20px;
        }
        .gallery-card {
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.4);
            height: 220px;
            border: 2px solid rgba(255, 123, 0, 0.3);
            transition: all 0.4s ease;
        }
        .gallery-card:hover {
            border-color: #ff7b00e9;
            box-shadow: 0 0 25px rgba(255, 123, 0, 0.8);
            transform: translateY(-3px);
        }
        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .gallery-card img:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .container-grid {
                flex-direction: column;
            }
            .restaurant-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar Include -->
    <?php include 'navbar.php'; ?>

    <!-- Page Banner -->
    <header class="page-banner restaurant-banner">
        <h1>Our Restaurant Experience</h1>
        <p>Step inside our cozy ambiance and enjoy top-tier dining</p>
    </header>

    <!-- Main Wrapper jo dono boxes ko alag aur khula rakhega -->
    <div class="restaurant-main-wrapper">

        <!-- Box 1: Welcome to Velvet Bite Lounge -->
        <div class="container-grid">
            <div class="text-content">
                <h2>Welcome to Velvet Bite Lounge</h2>
                <div class="title-underline" style="width: 50px; height: 3px; background: #ff7b00; margin-bottom: 15px;"></div>
                <p>Our restaurant offers a modern yet warm atmosphere designed for family dinners, friendly gatherings, and romantic dates. Experience premium hospitality paired with exceptional food quality.</p>
                <a href="booktable.php" class="page-link-btn">Book a Table <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="image-content">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=80" alt="Restaurant Interior">
            </div>
        </div>

        <!-- Box 2: About Our Restaurant (Bilkul Alag Box) -->
        <div class="container-grid" style="flex-direction: row-reverse;">
            <div class="text-content">
                <h2>About Our Restaurant</h2>
                <div class="title-underline" style="width: 50px; height: 3px; background: #ff7b00; margin-bottom: 15px;"></div>
                <p>Welcome to Velvet Bite, where street food meets culinary excellence. We pride ourselves on serving the freshest burgers, hot-baked pizzas, and mouth-watering wraps crafted from authentic recipes and premium ingredients.</p>
                <p>Our kitchen is driven by passion, aiming to give you a cozy dining experience and flavors that linger long after your last bite.</p>
            </div>
            <div class="image-content">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=600&q=80" alt="Dining Area">
            </div>
        </div>

    </div>

    <!-- Section 3: A Glimpse Inside Velvet Bite (Gallery Grid) -->
    <div style="text-align: center; color: white; margin-bottom: 20px;">
        <h2 style="font-size: 26px; color: #fff;">A Glimpse Inside Velvet Bite</h2>
        <p style="color: #aaa; font-size: 14px;">Explore our ambient seating and vibrant dining spaces</p>
    </div>
    <div class="restaurant-gallery">
        <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=600&q=80" alt="Ambiance 1">
        </div>
        <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1543007630-9710e4a00a20?auto=format&fit=crop&w=600&q=80" alt="Ambiance 2">
        </div>
        <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=80" alt="Ambiance 3">
        </div>
    </div>

    <!-- Contact Us Section -->
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

</body>
</html>