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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $conn->real_escape_string($_POST['full-name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    
    // Insert member details into database
    $sql = "INSERT INTO members (full_name, email, phone) VALUES ('$fullName', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        $message = 'Thank you for joining us!';
    } else {
        $message = 'Error: ' . $conn->error;
    }
}

// Fetch membership fee from the database
$sql = "SELECT fee FROM membership_fee LIMIT 1";
$result = $conn->query($sql);
$membershipFee = $result->fetch_assoc()['fee'] ?? '50'; // Default to 50 if no result

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body data-page="membership">
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
        <section class="membership-section">
            <h1>Membership Options</h1>
            <div class="membership-info">
                <h2>Become a Member</h2>
                <p>Join our green community and enjoy exclusive benefits, including access to special events, guided hikes, and yoga retreats.</p>
                <p><strong>Membership Fee:</strong> <span id="membership-fee">$<?php echo htmlspecialchars($membershipFee); ?></span> per year</p>
                <p>Fill out the form below to become a member and contribute to our efforts in preserving the beautiful nature of Mauritius.</p>
                
                <form id="membership-form" method="post">
                    <label for="full-name">Full Name:</label>
                    <input type="text" id="full-name" name="full-name" required>
                    
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                    
                    <button type="submit">Sign Up</button>
                </form>

                <?php if (isset($message)) : ?>
                    <p><?php echo htmlspecialchars($message); ?></p>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Floria Travel. All rights reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
