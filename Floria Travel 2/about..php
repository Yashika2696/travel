<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body data-page="about">
    <?php include 'header.php'; ?>
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
        <section class="hero-about">
            <div class="hero-content">
                <h1>About Floria Travel</h1>
                <p>Discover our mission, values, and the team that makes it all happen.</p>
                <button onclick="scrollToSection('mission')">Our Mission</button>
            </div>
        </section>
        <section id="mission" class="about-section">
            <h2>Our Mission</h2>
            <p>At Floria Travel, we aim to promote sustainable tourism and preserve the natural beauty of Mauritius through eco-friendly activities and community engagement.</p>
        </section>
        <section id="values" class="about-section">
            <h2>Our Values</h2>
            <ul>
                <li>Sustainability: We prioritize eco-friendly practices in all our activities.</li>
                <li>Community: We believe in giving back to the community and involving locals in our initiatives.</li>
                <li>Adventure: We offer unique and adventurous experiences that connect you with nature.</li>
            </ul>
        </section>
        <section id="team" class="about-section">
            <h2>Meet the Team</h2>
            <div class="team-container">
                <div class="team-member">
                    <img src="images/team1.jpg" alt="Yashika Rani Emrit">
                    <h3>Yashika Rani Emrit</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="images/team2.jpg" alt="John Doe">
                    <h3>John Doe</h3>
                    <p>Operations Manager</p>
                </div>
                <div class="team-member">
                    <img src="images/team3.jpg" alt="Jane Smith">
                    <h3>Jane Smith</h3>
                    <p>Community Coordinator</p>
                </div>
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
