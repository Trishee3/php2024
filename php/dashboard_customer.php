<?php
session_start();

include "../classes/customer_class.php";

$customer = new Customer;
$categories = ['phone case', 'earpods', 'others']; // List of categories
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer's dashboard</title>
</head>
<link rel="stylesheet" href="customer_style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<style>
    .swiper-slide {
    display: flex;
    justify-content: center;
}

.card-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card-link {
    background-color: #FAE7B4; /* Melon color */
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    width: 100%; /* Responsive width */
    max-width: 300px; /* Max width for larger screens */
}

.card-link:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
}

.card-image {
    width: 100%;
    height: 200px; /* Fixed height for uniformity */
    object-fit: cover;
    border-radius: 10px 10px 0 0; /* Rounded corners on top */
}

.badge {
    color: #fff;
    padding: 8px 12px; /* Optional: You can adjust padding as needed */
    background:  #8A2BE2; /* Brand color */
    border-radius: 50px;
    margin: 10px 0;
    font-weight: 600;
    display: inline-block; /* Ensures the badge adjusts to content width */
    white-space: nowrap; /* Prevents text from wrapping */
}

.card-title {
    font-size: 1.2rem;
    color: #333;
    font-weight: 500;
    text-align: center; /* Center title */
}

.material-symbols-rounded {
    font-size: 20px;
    color: #5372F0;
    margin-top: 10px; /* Spacing for button */
    border: none;
    background:  #8A2BE2; /* Brand color */
    border-radius: 5px;
    color: white;
}
.card-link button:hover {
    background-color: #6f1e91; /* Slightly darker shade for hover */
}

</style>
<body>
   <header>
      <div class="logo">A and K!</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="dashboard_customer_phone_case.php">Phone Cases</a></li>
                <li><a href="dashboard_avail_color.php">Car Tint</a></li>
                <li><a href="dashboard_about_us.php">About Us</a></li>
                <li><a href="dashboard_contact_is.php">Contact</a></li>
            </ul>
        </nav>
   </header> 
   <section id="f_sec">
        <img class="sec_img" src="a and k.jpg" alt="A and K Logo">
        <div class="f_sec_content">
           <p> <h2><i>Welcome to A & K<br>
            we offer the best of everything</i>
           </h2><p>
        </div>
   </section>
   <?php
        foreach ($categories as $category) {
            $products = $customer->displayProductByCategoryCustomer($category); 
        ?>
        <section class="product-category">
            <h2><?= ucfirst($category) ?> Products</h2>
            <div class="container swiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($products as $product) {
                        ?>
                        <div class="swiper-slide card-item">
                            <a class="card-link">
                                <img src="<?= $product['main_picture'] ?>" alt="<?= $product['product_name'] ?>" class="card-image">
                                <p class="badge"><?= $product['product_name'] ?></p>
                                <h4 class="card-title"><?= $product['product_description'] ?></h4>
                                <button class="material-symbols-rounded">See Details</button>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div> 
                <div class="swiper-pagination"></div> 
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <?php
        }
    ?>
   <footer>
       <p>&copy; 2024 A & K. All rights reserved.</p>
       <div class="footer-links">
           <a href="#privacy">Privacy Policy</a>
           <a href="#terms">Terms of Service</a>
           <a href="#contact">Contact Us</a>
       </div>
   </footer>

   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script>
       const swiper = new Swiper('.swiper', {
           slidesPerView: 5,
           spaceBetween: 30,
           pagination: {
               el: '.swiper-pagination',
               clickable: true,
           },
           navigation: {
               nextEl: '.swiper-button-next',
               prevEl: '.swiper-button-prev',
           },
       });
      
   </script>
</body>
</html>
