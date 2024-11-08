

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce: Phone Cases & Car Tinting</title>
    <link rel="stylesheet" href="styles.css">
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
    line-height: 1.6;
    color: #333;
    background-color: pink;
}

/* Header */
header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

header .logo {
    font-size: 1.5em;
}

header nav ul {
    list-style: none;
    display: flex;
   
}

header nav ul li {
    margin-right: 40px;
    align-items: center;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}
header nav ul li a{
    justify-content: center;
}

header .search-cart {
    display: flex;
    align-items: center;
}

header .search-cart input {
    padding: 5px;
    margin-right: 10px;
}

header .search-cart a {
    color: #fff;
    margin-right: 10px;
    text-decoration: none;
}

/* Hero Section */
#hero {
    background-image: url('hero.jpg');
    background-size: cover;
    background-position: center;
    padding: 100px 20px;
    text-align: center;
    color: #fff;
}

#hero h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}

#hero p {
    font-size: 1.2em;
    margin-bottom: 20px;
}

#hero button {
    background-color: #f90;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 1em;
    margin-right: 10px;
}

/* Product Grid */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    padding: 20px;
}

.product-card {
    background-color: #f9f9f9;
    padding: 20px;
    text-align: center;
    border: 1px solid #ddd;
}

.product-card img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.product-card h3 {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.product-card p {
    font-size: 1em;
    margin-bottom: 10px;
}

.product-card button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

/* Service List */
.service-list {
    padding: 20px;
}

.service-item {
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    text-align: center;
}

.service-item h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.service-item p {
    font-size: 1em;
    margin-bottom: 10px;
}

.service-item button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

/* Footer */
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

footer .newsletter {
    margin-top: 10px;
}

footer .newsletter input {
    padding: 5px;
    margin-right: 10px;
}

footer .newsletter button {
    background-color: #f90;
    color: #fff;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
}

/* Popup */
.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
}

.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    position: relative;
    width: 300px;
}

.popup-content .close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.2em;
    cursor: pointer;
}

.popup-content form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
}

.popup-content form button {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: black;
}
/* Carousel Container */
.carousel-container {
    position: relative;
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
}

.carousel {
    display: flex;
    transition: transform 0.5s ease;
}

.product-card {
    min-width: 100%;
    box-sizing: border-box;
}

.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    z-index: 1;
}

.carousel-btn.prev {
    left: 0;
}

.carousel-btn.next {
    right: 0;
}

</style>
<body>

    <!-- Header -->
    <header>
        <div class="logo">A and K!</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#phone-cases">Phone Cases</a></li>
                <li><a href="#car-tinting">Car Tinting</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="search-cart">
            <input type="text" placeholder="Search...">
            <a href="#cart">Cart</a>
            <button onclick="openLoginPopup()">Login</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Welcome to MyShop</h1>
            <p>Order the best phone cases and reserve your car tint today!</p>
            <button onclick="location.href='#phone-cases'">Shop Phone Cases</button>
            <button onclick="location.href='#car-tinting'">Reserve Car Tinting</button>
        </div>
    </section>

    <!-- Featured Phone Cases -->
    <section id="phone-cases">
    <h2>Popular Phone Cases</h2>
    <div class="carousel-container">
        <button class="carousel-btn prev" onclick="prevSlide()">&#10094;</button>
        <div class="carousel">
            <!-- Example Product Slide -->
            <div class="product-card">
                <img src="case1.jpg" alt="Phone Case 1">
                <h3>Phone Case 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <!-- Add more product cards as needed -->
            <div class="product-card">
                <img src="case2.jpg" alt="Phone Case 2">
                <h3>Phone Case 2</h3>
                <p>$24.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="case3.jpg" alt="Phone Case 3">
                <h3>Phone Case 3</h3>
                <p>$29.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
        <button class="carousel-btn next" onclick="nextSlide()">&#10095;</button>
    </div>
</section>

    <!-- Car Tinting Services -->
    <section id="car-tinting">
        <h2>Car Tinting Services</h2>
        <div class="service-list">
            <div class="service-item">
                <h3>Standard Tint Package</h3>
                <p>Includes 50% tint for all windows.</p>
                <p>$149.99</p>
                <button>Book Now</button>
            </div>
            <!-- Add more service items as needed -->
        </div>
    </section>

    <!-- Shopping Cart -->
    <section id="cart">
        <h2>Shopping Cart</h2>
        <p>Your cart is currently empty.</p>
        <!-- Implement cart functionality as needed -->
    </section>

    <!-- Login Popup -->
    <div id="login-popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeLoginPopup()">&times;</span>
            <h2>Login</h2>
            <form>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p><a href="#">Forgot your password?</a></p>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MyShop. All rights reserved.</p>
        <div class="footer-links">
            <a href="#privacy">Privacy Policy</a>
            <a href="#terms">Terms of Service</a>
            <a href="#contact">Contact Us</a>
        </div>
        <div class="newsletter">
            <p>Subscribe to our newsletter</p>
            <input type="email" placeholder="Enter your email">
            <button>Subscribe</button>
        </div>
    </footer>

    <script src="script.js">
        // Open Login Popup
function openLoginPopup() {
    document.getElementById('login-popup').style.display = 'flex';
}

// Close Login Popup
function closeLoginPopup() {
    document.getElementById('login-popup').style.display = 'none';
}
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel .product-card');
    const totalSlides = slides.length;

    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }

    const offset = -currentSlide * 100; // Shift to the current slide
    document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

// Auto slide (optional)
setInterval(() => {
    nextSlide();
}, 3000); // Change every 3 seconds


    </script>
</body>
</html>
