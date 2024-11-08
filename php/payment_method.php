<?php
    session_start();
    $order_id = isset($_GET['order_id']) ? $_GET['order_id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Payment Method</title>
    <link rel="stylesheet" href="newstyle2.css"> <!-- Link to your CSS file -->
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
    
    <main>
        <h1>Select Your Payment Method</h1>
        <form action="../actions/customer_action.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
            <div class="payment-methods">
                <div class="method">
                    <input type="radio" id="credit-card" name="payment-method" value="credit-card" checked>
                    <label for="credit-card">Cash on Delivery</label>
                </div>
                <div class="method">
                    <input type="radio" id="gcash" name="payment-method" value="gcash">
                    <label for="gcash">Online</label>
                </div>
            </div>

            <div id="payment-details">
                <div class="form-group" id="gcash-details" style="display: none;">
                    <label for="gcash-number">GCash Mobile Number: <b>09705399259</b></label>

                    <label for="downpayment">Payment Proof</label>
                    <input type="file" id="proof" name="proof">
                </div>
              
            <button type="submit" name="placepayment">Proceed to Checkout</button>
        </form>
    </main>

    <footer>
       <p>&copy; 2024 A & K. All rights reserved.</p>
       <div class="footer-links">
           <a href="#privacy">Privacy Policy</a>
           <a href="#terms">Terms of Service</a>
           <a href="#contact">Contact Us</a>
       </div>
   </footer>

   <script>
    const paymentMethods = document.querySelectorAll('input[name="payment-method"]');
    const gcashDetails = document.getElementById('gcash-details');
    const proofInput = document.getElementById('proof');
    const form = document.querySelector('form');

    // Hide or show payment details based on selected payment method
    paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
            // Hide the GCash details section initially
            gcashDetails.style.display = 'none';
            proofInput.removeAttribute('required');

            // Show the relevant section based on selected payment method
            if (this.value === 'gcash') {
                gcashDetails.style.display = 'block';
                proofInput.setAttribute('required', 'required');
            }
        });
    });

    // Initialize the correct display state on page load
    if (document.querySelector('input[name="payment-method"]:checked').value === 'gcash') {
        gcashDetails.style.display = 'block';
        proofInput.setAttribute('required', 'required');
    } else {
        gcashDetails.style.display = 'none';
        proofInput.removeAttribute('required');
    }

    // Form submission validation
    form.addEventListener('submit', function(event) {
        const selectedPaymentMethod = document.querySelector('input[name="payment-method"]:checked').value;

        if (selectedPaymentMethod === 'gcash') {
            const gcashNumber = document.getElementById('gcash-number').value;
            const proofFile = proofInput.files.length;

            if (!gcashNumber || proofFile === 0) {
                event.preventDefault(); // Prevent form submission
                alert('Please fill in all required fields for GCash payment.');
            }
        }
    });
</script>




</body>
</html>
