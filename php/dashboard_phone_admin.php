<?php
session_start();

include "../classes/admin_class.php";

$admin = new Admin;
$categories = ['phone case', 'earpods', 'others']; // List of categories
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/671d749a6d.js" crossorigin="anonymous"></script>
    <title>Manage Products</title>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-header">
            <i class="fa-solid fa-bars menu-icon" id="menu-icon"></i> <!-- Menu icon -->
            <img class="logo" src="a and k.jpg" alt="A and K Logo">
        </div>
        <ul id="sidebar-menu">
            <li><a href="dashboard_admin.php"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
            <li><a href="dashboard_phone_admin.php"><i class="fa-solid fa-mobile"></i><span>Phone Accessories</span></a></li>
            <li><a href="dashboard_tint_color_admin.php"><i class="fa-solid fa-car"></i><span>Car Tint Color</span></a></li>
            <li><a href="dashboard_order.php"><i class="fa-solid fa-bag-shopping"></i><span>Orders</span></a></li>
            <li><a href="dashboard_reservation.php"><i class="fa-solid fa-book-open"></i><span>Reservation</span></a></li>
            <li><a href="dashboard_manage_user.php"><i class="fa-solid fa-user"></i><span>Manage User</span></a></li>
        </ul>

    </div>
    <div class="content">
        <section class="header">
            <h1>Manage Products</h1><br><br>
        </section>

        <?php
        foreach ($categories as $category) {
            $products = $admin->displayProductByCategory($category); // Get products by category
        ?>

            <section class="product-category">
                <h2><?= ucfirst($category) ?> Products</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($products)) {
                            foreach($products as $product) { ?>
                                <tr>
                                    <td class="text-center"><?= $product['product_name'] ?></td>
                                    <td class="text-center"><?= $product['product_description'] ?></td>
                                    <td class="text-center"><?= $product['product_color'] ?></td>
                                    <td class="text-center"><?= $product['product_price'] ?></td>
                                    <td class="text-center"><?= $product['product_quantity'] ?></td>
                                    <td class="text-center">
                                        <!-- Add your action buttons here -->
                                    </td>
                                </tr>
                            <?php } 
                        } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">No products available in this category.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>

        <?php } // End category loop ?>
    </div>
</div>

<script>
    // js/script.js

    document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.querySelector('.sidebar');
    const menuIcon = document.querySelector('.menu-icon');

    menuIcon.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
        menuIcon.style.right = sidebar.classList.contains('collapsed') ? '10px' : '20px'; // Adjusted for better visibility
    });
});


</script>
</body>
</html>
