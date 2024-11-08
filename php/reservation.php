<?php
session_start();
$quantity_id = isset($_GET['quantity_id']) ? $_GET['quantity_id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="newstyle3.css">
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
            <form action="../actions/customer_action.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="quantity_id" value="<?php echo $quantity_id; ?>">

                <label for="fullname">*Fullname</label>
                <input type="text" name="fullname" id="fullname">

                <label for="gcash-number">GCash Mobile Number: <b>09705399259</b></label>
                <label for="downpayment">Input Downpayment Amount:</label>
                <input type="text" id="gcash-number" name="gcash-number">

                <label for="downpayment">Downpayment Proof</label>
                <input type="file" id="proof" name="proof">
                
                <button type="submit" name="payment">Proceed to Checkout</button>
            </form> 
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