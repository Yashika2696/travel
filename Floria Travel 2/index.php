<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floria Travel - Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body data-page="index">
    <?php
    // Include header and database configuration
    include 'header.php';
    include 'connection.php'; 

    // Fetch testimonials
    $testimonials = [];
    $stmt = $pdo->query('SELECT * FROM testimonials');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $testimonials[] = $row;
    }
    ?>
    <header>
        <nav class="navbar">
            <div class="logo">Floria Travel</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="tours.php">Tours & Packages</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="vacancies.php">Vacancies</a></li>
                <li><a href="membership.php">Sign Up</a></li>
                <li><a href="admin.php">Administrator Login</a></li>
                <li><a href="package.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to Floria Travel</h1>
                <p>Your gateway to eco-friendly tourism in Mauritius.</p>
                <button onclick="scrollToSection('about')">Learn More</button>
            </div>
        </section>
        <section id="about" class="about-section">
            <h2>About Us</h2>
            <p>Floria Travel is dedicated to promoting sustainable tourism and preserving the natural beauty of Mauritius.</p>
        </section>
        <section id="testimonials" class="testimonial-section">
            <h2>Testimonials</h2>
            <div class="testimonials-container">
                <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial-card">
                    <p>"<?php echo htmlspecialchars($testimonial['testimonial']); ?>"</p>
                    <h4>- <?php echo htmlspecialchars($testimonial['name']); ?></h4>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Floria Travel. All rights reserved.</p>
    </footer>
    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>
