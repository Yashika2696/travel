document.addEventListener('DOMContentLoaded', () => {
    // Determine the current page
    const currentPage = document.body.getAttribute('data-page');

    if (currentPage === 'index') {
        // Home Page Scripts
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        document.querySelector('.hero button').addEventListener('click', () => {
            alert('Join us in exploring the green wonders of Mauritius!');
        });

    } else if (currentPage === 'about') {
        // About Us Page Scripts
        // Add any dynamic behavior or animations specific to the About Us page

    } else if (currentPage === 'tours') {
        // Tours & Packages Page Scripts
        document.querySelectorAll('.tour-category').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');
                document.querySelectorAll('.tour-package').forEach(package => {
                    package.style.display = package.getAttribute('data-category') === category ? 'block' : 'none';
                });
            });
        });

        // Define scrollToSection and addToCart functions if needed
        window.scrollToSection = function(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        };
        
        window.addToCart = function(packageName) {
            alert(packageName + " has been added to your cart!");
        };

    } else if (currentPage === 'blog') {
        // Blog Page Scripts
        document.querySelector('#search-input').addEventListener('input', (event) => {
            const searchTerm = event.target.value.toLowerCase();
            document.querySelectorAll('.blog-post').forEach(post => {
                const title = post.querySelector('h2').textContent.toLowerCase();
                post.style.display = title.includes(searchTerm) ? 'block' : 'none';
            });
        });

    } else if (currentPage === 'testimonials') {
        // Testimonials Page Scripts
        // Example: Slider or carousel for testimonials

    } else if (currentPage === 'vacancies') {
        // Vacancies Page Scripts
        document.querySelectorAll('.vacancy-type').forEach(button => {
            button.addEventListener('click', () => {
                const type = button.getAttribute('data-type');
                document.querySelectorAll('.vacancy-item').forEach(item => {
                    item.style.display = item.getAttribute('data-type') === type ? 'block' : 'none';
                });
            });
        });

    } else if (currentPage === 'membership') {
        // Membership Page Scripts
        document.querySelector('#membership-form').addEventListener('submit', (event) => {
            const name = document.querySelector('#name').value;
            if (!name) {
                event.preventDefault();
                alert('Please enter your name.');
            }
        });

    } else if (currentPage === 'package') {
        // Package Page Scripts
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const packagePrice = parseFloat(button.getAttribute('data-price'));
                const cartTotal = document.querySelector('#cart-total');
                cartTotal.textContent = (parseFloat(cartTotal.textContent) + packagePrice).toFixed(2);
            });
        });

    } else if (currentPage === 'contact') {
        // Contact Page Scripts
        document.querySelector('#contact-form').addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent actual form submission for demonstration
            alert('Your message has been sent!');
            // Handle form submission via AJAX or similar method
        });

    } else if (currentPage === 'admin') {
        // Admin Page Scripts
        document.querySelector('#admin-form').addEventListener('submit', (event) => {
            const packageName = document.querySelector('#package-name').value;
            if (!packageName) {
                event.preventDefault();
                alert('Please enter the package name.');
            }
        });

    }
});
