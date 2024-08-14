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

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle Add Package
    if (isset($_POST['add-package'])) {
        $name = $_POST['package-name'];
        $description = $_POST['package-description'];
        $price = $_POST['package-price'];
        $image = $_POST['package-image'];

        $stmt = $conn->prepare('INSERT INTO packages (name, description, price, image) VALUES (?, ?, ?, ?)');
        $stmt->bind_param('ssis', $name, $description, $price, $image);
        if ($stmt->execute()) {
            echo '<p>Package added successfully!</p>';
        } else {
            echo '<p>Error adding package: ' . $stmt->error . '</p>';
        }
        $stmt->close();
    }

    // Handle Add Event
    if (isset($_POST['add-event'])) {
        $name = $_POST['event-name'];
        $date = $_POST['event-date'];
        $description = $_POST['event-description'];

        $stmt = $conn->prepare('INSERT INTO events (name, date, description) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $name, $date, $description);
        if ($stmt->execute()) {
            echo '<p>Event added successfully!</p>';
        } else {
            echo '<p>Error adding event: ' . $stmt->error . '</p>';
        }
        $stmt->close();
    }

    // Handle Update Membership Fee
    if (isset($_POST['update-fee'])) {
        $fee = $_POST['membership-fee'];

        $stmt = $conn->prepare('UPDATE settings SET membership_fee = ? WHERE id = 1');
        $stmt->bind_param('d', $fee);
        if ($stmt->execute()) {
            echo '<p>Membership fee updated successfully!</p>';
        } else {
            echo '<p>Error updating fee: ' . $stmt->error . '</p>';
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body data-page="admin">
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
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="admin-dashboard">
            <h1>Administrator Dashboard</h1>
            <div class="admin-panel">
                <!-- Add New Package Form -->
                <div class="admin-card">
                    <h2>Add New Package</h2>
                    <form id="add-package-form" method="POST" action="admin.php">
                        <label for="package-name">Package Name:</label>
                        <input type="text" id="package-name" name="package-name" required>
                        <label for="package-description">Description:</label>
                        <textarea id="package-description" name="package-description" rows="4" required></textarea>
                        <label for="package-price">Price:</label>
                        <input type="number" id="package-price" name="package-price" step="0.01" required>
                        <label for="package-image">Image URL:</label>
                        <input type="url" id="package-image" name="package-image" required>
                        <button type="submit" name="add-package">Add Package</button>
                    </form>
                </div>

                <!-- Add New Event Form -->
                <div class="admin-card">
                    <h2>Add New Event</h2>
                    <form id="add-event-form" method="POST" action="admin.php">
                        <label for="event-name">Event Name:</label>
                        <input type="text" id="event-name" name="event-name" required>
                        <label for="event-date">Date:</label>
                        <input type="date" id="event-date" name="event-date" required>
                        <label for="event-description">Description:</label>
                        <textarea id="event-description" name="event-description" rows="4" required></textarea>
                        <button type="submit" name="add-event">Add Event</button>
                    </form>
                </div>

                <!-- Monitor Viewer Logins -->
                <div class="admin-card">
                    <h2>Monitor Viewer Logins</h2>
                    <div id="viewer-logins">
                        <?php
                        // Display Viewer Logins
                        // This file should handle retrieving and displaying viewer logins
                        include 'view-logins.php';
                        ?>
                    </div>
                </div>

                <!-- Manage Membership Fees -->
                <div class="admin-card">
                    <h2>Manage Membership Fees</h2>
                    <form id="manage-fees-form" method="POST" action="admin.php">
                        <label for="membership-fee">Membership Fee:</label>
                        <input type="number" id="membership-fee" name="membership-fee" step="0.01" required>
                        <button type="submit" name="update-fee">Update Fee</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Floria Travel. All rights reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
