<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin_style.css">
    <script src="https://kit.fontawesome.com/671d749a6d.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="wrapper">
        <div class="sidebar">
            <h2>Side Bar</h2>
            <ul>
                <li><a href="dashboard_admin.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="dashboard_phone_admin.php"><i class="fa-solid fa-mobile"></i> Phone Accessories</a></li>
                <li><a href="dashboard_tint_color_admin.php"><i class="fa-solid fa-car"></i> Car Tint Color</a></li>
                <li><a href="dashboard_order.php"><i class="fa-solid fa-bag-shopping"></i> Orders</a></li>
                <li><a href="dashboard_reservation.php"><i class="fa-solid fa-book-open"></i> Reservation</a></li>
                <li><a href="dashboard_manage_user.php"><i class="fa-solid fa-user"></i> Manage User</a></li>
            </ul>
        </div>
    </div>

    <main class="main-content">
        <section id="overview">
            <h2>Order's Overview</h2>
            <div class="dashboard-cards">
                <div class="card">
                    <h3>Total Sales</h3>
                    <p>$12,345</p>
                </div>
                <div class="card">
                    <h3>New Orders</h3>
                    <p>25</p>
                </div>
                <div class="card">
                    <h3>Total Customers</h3>
                    <p>523</p>
                </div>
            </div>
        </section>
        <section id="overview">
        <h2>Rservation Overview</h2>
            <div class="dashboard-cards">
                <div class="card">
                    <h3>Total Reserve</h3>
                    <p>50</p>
                </div>
                <div class="card">
                    <h3>New Reserved</h3>
                    <p>25</p>
                </div>
                <div class="card">
                    <h3>Total Customers</h3>
                    <p>56</p>
                </div>
            </div>
        </section>

</body>
</html>
