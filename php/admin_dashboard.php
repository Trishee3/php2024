<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin-styles.css">
</head>
<style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body and Font */
body {
    font-family: Arial, sans-serif;
    display: flex;
    background-color: pink;
}

/* Sidebar */
.sidebar {
    background-color: #333;
    color: #fff;
    width: 250px;
    padding: 20px;
    height: 100vh;
}

.sidebar h2 {
    font-size: 1.5em;
    margin-bottom: 20px;
}

.sidebar nav ul {
    list-style: none;
}

.sidebar nav ul li {
    margin-bottom: 10px;
}

.sidebar nav ul li a {
    color: #fff;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.sidebar nav ul li a:hover {
    background-color: #555;
}

/* Main Content */
.main-content {
    flex-grow: 1;
    padding: 20px;
    background-color: #f9f9f9;
}

.main-content h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.dashboard-cards {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.card {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    flex-grow: 1;
    text-align: center;
}

.card h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.card p {
    font-size: 1.2em;
}

/* Tables */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table thead {
    background-color: #333;
    color: #fff;
}

table thead th {
    padding: 10px;
    text-align: left;
}

table tbody tr {
    background-color: #fff;
    border-bottom: 1px solid #ddd;
}

table tbody tr td {
    padding: 10px;
}

table tbody tr td button {
    background-color: #f90;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    margin-right: 5px;
    border-radius: 5px;
}

/* Forms (for adding/editing products/services) */
.form-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-popup h2 {
    margin-bottom: 20px;
}

.form-popup input, .form-popup textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.form-popup button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

</style>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <h2>Admin Dashboard</h2>
        <nav>
            <ul>
                <li><a href="#overview">Overview</a></li>
                <li><a href="#manage-products">Manage Phone Cases</a></li>
                <li><a href="#manage-services">Manage Car Tinting</a></li>
                <li><a href="#orders">Orders</a></li>
                <li><a href="#users">Reservation</a></li>
                <li><a href="#reports">Users</a></li>
                <li><a href="#settings">Reports</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        <section id="overview">
            <h2>Overview</h2>
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
                    <h3>Total Users</h3>
                    <p>523</p>
                </div>
            </div>
        </section>

        <section id="manage-products">
            <h2>Manage Phone Cases</h2>
            <button onclick="openProductForm()">Add New Product</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Phone Case 1</td>
                        <td>$19.99</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <!-- Add more product rows as needed -->
                </tbody>
            </table>
        </section>

        <section id="manage-services">
            <h2>Manage Car Tinting</h2>
            <button onclick="openServiceForm()">Add New Service</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Standard Tint Package</td>
                        <td>$149.99</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <!-- Add more service rows as needed -->
                </tbody>
            </table>
        </section>
        
        <!-- Other sections like Orders, Users, Reports, Settings can be implemented similarly -->

    </main>

    <script src="admin-script.js">
        // Open and Close Product Form
function openProductForm() {
    document.getElementById('product-form').style.display = 'block';
}

function closeProductForm() {
    document.getElementById('product-form').style.display = 'none';
}

// Open and Close Service Form
function openServiceForm() {
    document.getElementById('service-form').style.display = 'block';
}

function closeServiceForm() {
    document.getElementById('service-form').style.display = 'none';
}

    </script>
</body>
</html>
