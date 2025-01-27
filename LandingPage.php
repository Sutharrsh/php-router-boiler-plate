<?php

class LandingPage {
    public function show() {
        // Start of HTML content
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>My Portfolio</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <!-- Navigation Bar -->
            <header>
    <nav>
        <div class="logo">
            <a href="#">My Portfolio</a>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul id="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>


            <!-- Hero Section with Background Image and Glass Effect -->
            <section id="home" class="hero">
                <div class="hero-content">
                    <h1 class="typing">Welcome to My Portfolio</h1>
                    <p class="typing">Hi, I am a passionate Developer, Designer, and Tech Enthusiast.</p>
                    <a href="#contact" class="cta">Get in Touch</a>
                </div>
            </section>

            <!-- About Section -->
            <section id="about" class="section">
                <h2 class="typing">About Me</h2>
                <p class="typing">I specialize in full-stack development and design. I am dedicated to creating amazing experiences through clean code and thoughtful design.</p>
            </section>

            <!-- Projects Section -->
            <section id="projects" class="section">
                <h2 class="typing">Projects</h2>
                <div class="project-grid">
                    <div class="project-card">
                        <h3 class="typing">Project 1</h3>
                        <p class="typing">Description of project 1.</p>
                    </div>
                    <div class="project-card">
                        <h3 class="typing">Project 2</h3>
                        <p class="typing">Description of project 2.</p>
                    </div>
                    <div class="project-card">
                        <h3 class="typing">Project 3</h3>
                        <p class="typing">Description of project 3.</p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="section">
                <h2 class="typing">Contact Me</h2>
                <p class="typing">If you'd like to work together or just want to say hi, feel free to reach out!</p>
                <form action="mailto:someone@example.com" method="post" enctype="text/plain">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit" class="cta">Send Message</button>
                </form>
            </section>

            <!-- Footer -->
            <footer>
                <p class="typing">&copy; 2025 My Portfolio</p>
            </footer>

            <script>
                // Smooth Scroll Functionality
// Smooth Scroll Functionality
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });

        // Close the mobile menu after clicking a link
        if (window.innerWidth <= 1068) {
            var navLinks = document.getElementById('nav-links');
            navLinks.classList.remove('active');
        }
    });
});

// Toggle Mobile Menu (Hamburger)
document.getElementById('mobile-menu').addEventListener('click', function() {
    var navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('active');
});


            </script>
        </body>
        </html>
<?php
    }
}

?>
