<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables to avoid errors
    $name = $email = $message = "";
    $name_err = $email_err = $message_err = "";
    $success_msg = $error_msg = "";

    // Retrieve and sanitize form inputs
    if (empty($_POST['name'])) {
        $name_err = "Full Name is required.";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $email_err = "Email Address is required.";
    } else {
        $email = htmlspecialchars($_POST['email']);
        // Validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        }
    }

    if (empty($_POST['message'])) {
        $message_err = "Message is required.";
    } else {
        $message = htmlspecialchars($_POST['message']);
    }

    // If no errors, send email
    if (empty($name_err) && empty($email_err) && empty($message_err)) {
        // Set recipient email address (change to your email)
        $to = "your-email@example.com";
        $subject = "Contact Form Submission from $name";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message\n";

        if (mail($to, $subject, $body, $headers)) {
            $success_msg = "Your message has been sent successfully.";
        } else {
            $error_msg = "Failed to send your message. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .contact-section {
            padding: 4rem 1rem;
            background-color: white;
            margin: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-form h1 {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            display: block;
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 1rem;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .map {
            margin-top: 2rem;
            border: 0;
            width: 100%;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body data-page="contact">
    <header>
        <nav class="navbar">
            <div class="logo">Floria Travel</div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="tours.html">Tours & Packages</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="vacancies.html">Vacancies</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="admin.html">Administrator Login</a></li>
                <li><a href="cart.html">Cart</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contact-section">
            <div class="contact-form">
                <h1>Contact Us</h1>
                <?php
                if (!empty($success_msg)) {
                    echo "<p class='success'>$success_msg</p>";
                }
                if (!empty($error_msg)) {
                    echo "<p class='error'>$error_msg</p>";
                }
                ?>
                <form action="contact.php" method="post">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? '', ENT_QUOTES); ?>">
                    <span class="error"><?php echo $name_err; ?></span>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? '', ENT_QUOTES); ?>">
                    <span class="error"><?php echo $email_err; ?></span>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5"><?php echo htmlspecialchars($message ?? '', ENT_QUOTES); ?></textarea>
                    <span class="error"><?php echo $message_err; ?></span>

                    <button type="submit">Send Message</button>
                </form>
            </div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2326364065726!2d-122.08220368468422!3d37.42199977982505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb7d2d3fcf8d1%3A0x6b8b1b8d5b06b54!2sGoogleplex!5e0!3m2!1sen!2sus!4v1636396387931!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Floria Travel. All rights reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
