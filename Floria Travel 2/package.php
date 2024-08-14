<?php
session_start();

// Initialize cart if not already done
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle package addition to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['package_id']) && isset($_POST['price'])) {
    $packageId = $_POST['package_id'];
    $price = $_POST['price'];

    $_SESSION['cart'][] = ['id' => $packageId, 'price' => $price];
    echo '<script>alert("Package added to cart!");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body data-page="package">
    <header>
        <nav class="navbar">
            <div class="logo">Floria Travel</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="packages.php">Tours & Packages</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="vacancies.php">Vacancies</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="admin.php">Administrator Login</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="packages-section">
            <h1>Our Eco-Friendly Packages</h1>
            <div class="packages-list">
                <article class="package-card">
                    <img src="images/package1.jpg" alt="Package 1">
                    <h2>Nature Exploration</h2>
                    <p>Explore the pristine nature of Mauritius with our guided tours through lush forests and serene landscapes.</p>
                    <p><strong>Price:</strong> $120 per person</p>
                    <form method="POST" action="packages.php">
                        <input type="hidden" name="package_id" value="1">
                        <input type="hidden" name="price" value="120">
                        <button type="submit" class="add-to-cart">Add to Cart</button>
                    </form>
                </article>
                <article class="package-card">
                    <img src="images/package2.jpg" alt="Package 2">
                    <h2>Yoga Retreat</h2>
                    <p>Relax and rejuvenate with our yoga retreats in picturesque locations, including guided sessions and healthy meals.</p>
                    <p><strong>Price:</strong> $250 per person</p>
                    <form method="POST" action="packages.php">
                        <input type="hidden" name="package_id" value="2">
                        <input type="hidden" name="price" value="250">
                        <button type="submit" class="add-to-cart">Add to Cart</button>
                    </form>
                </article>
                <article class="package-card">
                    <img src="images/package3.jpg" alt="Package 3">
                    <h2>Eco Adventure</h2>
                    <p>Join us for an exciting eco-adventure, including hiking, bird-watching, and learning about local conservation efforts.</p>
                    <p><strong>Price:</strong> $150 per person</p>
                    <form method="POST" action="packages.php">
                        <input type="hidden" name="package_id" value="3">
                        <input type="hidden" name="price" value="150">
                        <button type="submit" class="add-to-cart">Add to Cart</button>
                    </form>
                </article>
                <!-- Add more packages as needed -->
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Floria Travel. All rights reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
