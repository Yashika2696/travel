<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours & Packages - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body data-page="tours">
    <?php include 'header.php'; ?>
    <main>
        <section class="hero-tours">
            <div class="hero-content">
                <h1>Explore Our Tours & Packages</h1>
                <p>Discover eco-friendly adventures tailored for you.</p>
                <button onclick="scrollToSection('packages')">View Packages</button>
            </div>
        </section>
        <section id="packages" class="package-section">
            <h2>Our Eco-Friendly Packages</h2>
            <div class="packages-container">
                <div class="package-card">
                    <img src="images/package1.jpg" alt="Package 1">
                    <h3>Island Exploration</h3>
                    <p>Join us for a comprehensive tour of Mauritius' most beautiful and hidden spots.</p>
                    <button onclick="addToCart('Island Exploration')">Add to Cart</button>
                </div>
                <div class="package-card">
                    <img src="images/package2.jpg" alt="Package 2">
                    <h3>Mountain Hikes</h3>
                    <p>Experience the breathtaking views and challenging trails of our guided mountain hikes.</p>
                    <button onclick="addToCart('Mountain Hikes')">Add to Cart</button>
                </div>
                <div class="package-card">
                    <img src="images/package3.jpg" alt="Package 3">
                    <h3>Yoga Retreats</h3>
                    <p>Relax and rejuvenate with our tranquil yoga retreats in stunning natural settings.</p>
                    <button onclick="addToCart('Yoga Retreats')">Add to Cart</button>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>
