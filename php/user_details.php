<?php
    session_start();
    $quantity_id = isset($_GET['quantity_id']) ? $_GET['quantity_id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="newstyle.css">
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
    <form action="../actions/customer_action.php" method="post">
    <input type="hidden" name="quantity_id" value="<?php echo $quantity_id; ?>">
    
        <label for="fullname">*Fullname</label><br>
        <input type="text" name="fullname" id="fullname"><br>

        <label for="contact">*Contact</label><br>
        <input type="text" name="contact" id="contact" placeholder="09xx xxx xxxxx..."><br> 

        <label for="address">*Address</label><br>
        <textarea id=" address" name="address" rows="2" placeholder="Enter Address..."></textarea><br>

        <!-- <label for="date">*Pickup Date</label><br>
        <input type="date" name="date" id="date"><br> 

        <label for="time">*Pickup Time</label><br>
        <input type="time" name="time" id="time"><br>  -->

        <button type="submit" name="add_customer" id="add_customer">Next</button>
        <button type="reset">Cancel</button>
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