<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Velvet Bite</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .outline-orange-btn {
            display: inline-block;
            background: transparent;
            color: #ff7b00 !important;
            border: 2px solid #ff7b00;
            padding: 8px 18px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .outline-orange-btn:hover {
            background-color: #ff7b00;
            color: #ffffff !important;
        }

        .menu-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <!-- Navbar Include -->
    <?php include 'navbar.php'; ?>

    <!-- Page Banner -->
    <header class="page-banner menu-banner">
        <h1>Our Exquisite Menu</h1>
        <p>Discover a wide range of mouthwatering street food specialties</p>
    </header>

    <!-- Menu Grid Container -->
    <div class="menu-boxed-container">
        <div class="section-heading-center">
            <h2>Explore Our Specialties</h2>
            <div class="title-underline center-line"></div>
            <p>Handcrafted street food made with authentic recipes and premium ingredients.</p>
        </div>
        
        <div class="menu-grid-full">
            <?php
            $conn = new mysqli("localhost", "root", "", "restaurant_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM menu_items";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $name = htmlspecialchars($row['item_name']);
                    $price = htmlspecialchars($row['price']);
                    $image = htmlspecialchars($row['image_url']);
                    $url_name = urlencode($row['item_name']);

                    echo '
                    <div class="menu-card">
                        <img src="'.$image.'" alt="'.$name.'">
                        <div style="padding: 15px;">
                            <h3>'.$name.'</h3>
                            <div class="menu-card-footer">
                                <p class="price" style="margin:0; color:#ff7b00; font-weight:bold;">'.$price.'</p>
                                <a href="orderdelevery.php?item='.$url_name.'" class="outline-orange-btn">Order Now</a>
                            </div>
                        </div>
                    </div>';
                }
            }
            $conn->close();
            ?>
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