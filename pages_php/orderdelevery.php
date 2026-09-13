<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Delivery - Velvet Bite</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Form default hidden rahega, sirf button click par show hoga */
        #order-form-container {
            display: none; 
            padding: 50px 20px;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            margin: 40px auto;
            max-width: 850px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        
        .custom-orange-btn {
            display: inline-block;
            background-color: #ff7b00;
            color: white !important;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 123, 0, 0.4);
        }

        .custom-orange-btn:hover {
            background-color: #e66e00;
            transform: translateY(-2px);
        }

        .order-form-group {
            margin-bottom: 20px;
            text-align: left;
            display: inline-block;
            width: 100%;
            max-width: 480px;
        }

        .order-form-group label {
            color: #ffffff;
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
        }

        .order-form-group input, 
        .order-form-group select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            outline: none;
            box-sizing: border-box;
            font-family: inherit;
        }

        .order-form-group input:focus,
        .order-form-group select:focus {
            border-color: #ff7b00;
            box-shadow: 0 0 8px rgba(255, 123, 0, 0.5);
        }

        /* Dynamic Item Row Styling */
        .item-row {
            display: flex;
            gap: 10px;
            margin-bottom: 12px;
            align-items: center;
        }

        .item-row input[type="text"] {
            flex: 2;
        }

        .item-row input[type="number"] {
            flex: 1;
        }

        .remove-item-btn {
            background-color: #ff3b30;
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.2s;
        }

        .remove-item-btn:hover {
            background-color: #d32f2f;
        }

        .add-more-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s;
        }

        .add-more-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <!-- Navbar Include -->
    <?php include 'navbar.php'; ?>

    <!-- Page Banner -->
    <header class="page-banner delivery-banner">
        <h1>Fast & Fresh Delivery</h1>
        <p>Get your favorite street food delivered hot right to your doorstep</p>
    </header>

    <!-- Delivery Section -->
    <div class="content-section-box">
        <div class="container-grid reverse-flex">
            <div class="text-content">
                <h2>Lightning Fast Doorstep Delivery</h2>
                <div class="title-underline"></div>
                <p>We take pride in our rapid delivery service. Every meal is packed in temperature-controlled boxes to ensure it arrives as fresh and hot as it leaves our kitchen.</p>
                <!-- Button to reveal form -->
                <button onclick="showOrderForm()" class="custom-orange-btn">Order Now <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="image-content">
                <img src="https://images.unsplash.com/photo-1526367790999-0150786686a2?auto=format&fit=crop&w=600&q=80" alt="Delivery Scooter">
            </div>
        </div>
    </div>

    <!-- Order Form Section -->
    <?php
        $selected_item = isset($_GET['item']) ? htmlspecialchars($_GET['item']) : '';
    ?>
    <div class="content-section-box" id="order-form-container">
        <h2 style="color: white; margin-bottom: 10px; font-size: 28px;">Place Your Order</h2>
        <p style="color: #ffffff; margin-bottom: 25px; font-weight: 500;">Select items, quantities, and provide your details below!</p>
        
        <form action="place_order.php" method="POST" style="width: 100%;">
            
            <!-- Dynamic Items Container -->
            <div class="order-form-group" style="max-width: 500px;">
                <label><i class="fa-solid fa-utensils"></i> Your Order Items & Quantities:</label>
                
                <div id="items-list-container">
                    <!-- Pehli row jo menu se item select hoke aayegi ya empty hogi -->
                    <div class="item-row">
                        <input type="text" name="item_name[]" value="<?php echo $selected_item; ?>" placeholder="Item Name (e.g. Burger)" required>
                        <input type="number" name="quantity[]" placeholder="Qty" min="1" value="1" required>
                    </div>
                </div>

                <!-- Add More Items Button with Icon -->
                <button type="button" class="add-more-btn" onclick="addItemRow()">
                    <i class="fa-solid fa-plus-circle"></i> Add Another Item (e.g. Pizza)
                </button>
            </div>
            <br>

            <div class="order-form-group">
                <label>Customer Name:</label>
                <input type="text" name="customer_name" placeholder="Your Name" required>
            </div>
            <br>
            <div class="order-form-group">
                <label>Phone Number:</label>
                <input type="text" name="phone" placeholder="e.g. 03001234567" required>
            </div>
            <br>
            <div class="order-form-group">
                <label>Delivery Address:</label>
                <input type="text" name="address" placeholder="e.g. House #123, Street #4, City" required>
            </div>
            <br>
            <button type="submit" class="custom-orange-btn" style="width: 100%; max-width: 500px; font-size: 16px;">Submit Order</button>
        </form>
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

    <!-- JavaScript for Dynamic Rows & Form Visibility -->
    <script>
        function showOrderForm() {
            var formBox = document.getElementById("order-form-container");
            formBox.style.display = "block";
            formBox.scrollIntoView({ behavior: 'smooth' });
        }

        // Nayi item aur quantity ki row add karne ka function
        function addItemRow() {
            var container = document.getElementById("items-list-container");
            
            var row = document.createElement("div");
            row.className = "item-row";
            
            row.innerHTML = `
                <input type="text" name="item_name[]" placeholder="Item Name (e.g. Pizza)" required>
                <input type="number" name="quantity[]" placeholder="Qty" min="1" value="1" required>
                <button type="button" class="remove-item-btn" onclick="removeItemRow(this)"><i class="fa-solid fa-trash"></i></button>
            `;
            
            container.appendChild(row);
        }

        // Row delete karne ka function
        function removeItemRow(btn) {
            var row = btn.parentElement;
            row.remove();
        }
    </script>

</body>
</html>