<?php
session_start();

include "../classes/customer_class.php";

$customer = new Customer;
$categories = ['phone case', 'earpods', 'others']; // List of categories

// Check if a category is selected via the query parameter
$selectedCategory = isset($_GET['category']) ? strtolower(trim($_GET['category'])) : 'phone case';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="phonecase2_style.css">
</head>
<style>
    footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

footer .footer-links {
    margin-bottom: 10px;
}

footer .footer-links a {
    color: #fff;
    text-decoration: none;
    margin-right: 10px;
}

</style>
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
    <section class="nav-section">
        <div class="navigation">
            <nav>
                <ul>
                    <li><a href="?category=phone case">Phone Case</a></li>
                    <li><a href="?category=earpods">Earpods</a></li>
                    <li><a href="?category=others">Others</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <?php
        // Only display products if a category is selected
        if ($selectedCategory && in_array($selectedCategory, $categories)) {
            // Fetch products for the selected category only
            $products = $customer->displayProductByCategoryCustomer($selectedCategory); 
    ?>
    <section class="product-section">
        <h2><?= ucfirst($selectedCategory) ?> Featured Products</h2> <!-- Updated to reflect the category name -->
        <div class="product-grid">
            <?php
                // Check if there are products in this category
                if (!empty($products)) {
                    foreach ($products as $product) {
                        ?>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="<?= $product['main_picture'] ?>" alt="<?= $product['product_name'] ?>">
                            </div>
                            <div class="product-details">
                                <p class="badge"><?= $product['product_name'] ?></p>
                                <h4 class="card-title"><?= $product['product_description'] ?></h4>
                                <a href="details_customer1.php?product_id=<?= $product['product_id'] ?>" class="btn btn-warning btn-sm" title="See Details">See Details</a>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>No products available in this category.</p>"; // Message for empty categories
                }
            ?>
        </div>
    </section>
    <?php
        } else {
            echo "<p>Please select a category to view products.</p>";
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

</body>
</html>
