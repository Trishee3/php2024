<?php
session_start();


include "../classes/customer_class.php";

$customer = new Customer;
$product_details = $customer->displayProductDetails($_GET['product_id']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="customephone_style.css">
</head>
<body>
<header>
      <div class="logo">A and K!</div>
        <nav>
            <ul>
                <li><a href="dashboard_customer.php">Home</a></li>
                <li><a href="dashboard_customer_phone_case.php">Phone Cases</a></li>
                <li><a href="dashboard_avail_color.php">Car Tint</a></li>
                <li><a href="dashboard_about_us.php">About Us</a></li>
                <li><a href="dashboard_contact_is.php">Contact</a></li>
            </ul>
        </nav>
   </header> 
    <section class="product-section">
        <div class="container">
            <div class="product-images">
             <img src="<?= $product_details['main_picture'] ?>" alt="<?= $product_details['product_name'] ?>">
                <div class="thumbnail-row">
                    <img src="<?= $product_details['sub_pic1'] ?>" class="thumbnail" alt="Thumbnail 1">
                    <img src="<?= $product_details['sub_pic2'] ?>" class="thumbnail" alt="Thumbnail 2">
                    <img src="<?= $product_details['sub_pic4'] ?>" class="thumbnail" alt="Thumbnail 3">
                </div>
            </div>

            <div class="product-details">
                <h1><?= $product_details['product_name'] ?></h1>
                <p class="product-price">$<?= $product_details['product_price'] ?></p>
                <p class="product-description"><?= $product_details['product_description'] ?></p>

                <form action="../actions/customer_action.php" method="post">
                <input type="hidden" name="product_id" value="<?= $product_details['product_id']; ?>">

                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1"><br>
                    
                    <button type="submit" name="order" id="order" class="btn">Order</button>
                    <button type="submit" name="reserve" class="btn1">Reserve</button>
                </form>
                <div class="product-meta">
                    <p><strong>Category:</strong><?= $product_details['Category'] ?></p>
                    <p><strong>Availability:</strong><?= $product_details['product_status'] ?></p>
                </div>
            </div>
        </div>
    </section>
    <footer>
       <p>&copy; 2024 A & K. All rights reserved.</p>
       <div class="footer-links">
           <a href="#privacy">Privacy Policy</a>
           <a href="#terms">Terms of Service</a>
           <a href="#contact">Contact Us</a>
       </div>
   </footer>
</body>
</html>