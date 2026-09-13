<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="sub-page-nav">
    <ul class="nav-links-left">
        <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
        <li><a href="menu.php" class="<?php echo ($current_page == 'menu.php') ? 'active' : ''; ?>">Menu</a></li>
        <li><a href="restaurant.php" class="<?php echo ($current_page == 'restaurant.php') ? 'active' : ''; ?>">Restaurant</a></li>
        <li><a href="orderdelevery.php" class="<?php echo ($current_page == 'orderdelevery.php') ? 'active' : ''; ?>">Order Delivery</a></li>
        <li><a href="book_table.php" class="<?php echo ($current_page == 'book_table.php') ? 'active' : ''; ?>">Book Table</a></li>
    </ul>
    <div class="nav-auth-right">
        <a href="#" class="login-nav-btn">Login</a>
        <a href="#" class="signup-nav-btn">Sign Up</a>
    </div>
</nav>