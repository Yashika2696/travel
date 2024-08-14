<?php
// Simulating blog posts as an array. Replace this with database calls as needed.
$blog_posts = [
    [
        "title" => "Exploring the Green Wonders of Mauritius",
        "description" => "Discover the breathtaking beauty of Mauritius through our eco-friendly tours and get inspired by the lush landscapes and rich biodiversity.",
        "image" => "images/blog1.jpg",
        "link" => "blog-post1.html"
    ],
    [
        "title" => "The Benefits of Eco-Friendly Travel",
        "description" => "Learn about the advantages of eco-friendly travel and how choosing sustainable options can make a positive impact on the environment.",
        "image" => "images/blog2.jpg",
        "link" => "blog-post2.html"
    ],
    [
        "title" => "Top 5 Hiking Trails in Mauritius",
        "description" => "Explore our top recommendations for hiking trails in Mauritius, each offering unique experiences and stunning views of the island's natural beauty.",
        "image" => "images/blog3.jpg",
        "link" => "blog-post3.html"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Floria Travel</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .blog-section {
            padding: 4rem 1rem;
            background-color: white;
            margin: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .blog-list {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .blog-post {
            border-bottom: 1px solid #ddd;
            padding-bottom: 1rem;
        }

        .blog-post h2 {
            margin: 0;
            color: #4CAF50;
        }

        .blog-post p {
            margin: 0.5rem 0;
            color: #555;
        }

        .blog-post a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .blog-post a:hover {
            text-decoration: underline;
        }

        .blog-post img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body data-page="blog">
    <header>
        <nav class="navbar">
            <div class="logo">Floria Travel</div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="tours.html">Tours & Packages</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="vacancies.html">Vacancies</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="admin.html">Administrator Login</a></li>
                <li><a href="cart.html">Cart</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="blog-section">
            <h1>Our Blog</h1>
            <div class="blog-list">
                <?php foreach ($blog_posts as $post): ?>
                    <article class="blog-post">
                        <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
                        <h2><a href="<?php echo htmlspecialchars($post['link']); ?>"><?php echo htmlspecialchars($post['title']); ?></a></h2>
                        <p><?php echo htmlspecialchars($post['description']); ?></p>
                        <p><a href="<?php echo htmlspecialchars($post['link']); ?>">Read more</a></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Floria Travel. All rights reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
