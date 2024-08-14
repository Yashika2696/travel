<?php
// Database connection
$host = 'localhost';
$dbname = 'floria_travel';
$username = 'root'; // Change to your database username
$password = ''; // Change to your database password

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Fetch vacancies from the database
$sql = 'SELECT * FROM vacancies';
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancies - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body data-page="vacancies">
    <header>
        <nav class="navbar">
            <div class="logo">Floria Travel</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="tours.php">Tours & Packages</a></li>
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
        <section class="vacancies-section">
            <h1>Current Vacancies</h1>
            <div class="vacancy-list">
                <?php
                if ($result->num_rows > 0) {
                    // Output each vacancy
                    while ($row = $result->fetch_assoc()) {
                        echo '<article class="vacancy-card">';
                        echo '<h2>' . htmlspecialchars($row['position']) . '</h2>';
                        echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                        echo '<p><strong>Responsibilities:</strong> ' . htmlspecialchars($row['responsibilities']) . '</p>';
                        echo '<p><strong>Requirements:</strong> ' . htmlspecialchars($row['requirements']) . '</p>';
                        echo '<a href="apply.php?position=' . urlencode($row['position']) . '" class="apply-button">Apply Now</a>';
                        echo '</article>';
                    }
                } else {
                    echo '<p>No current vacancies available.</p>';
                }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Floria Travel. All rights reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>

<?php
$conn->close();
?>
