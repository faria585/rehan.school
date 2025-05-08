<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rehan School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 10px;
        }
        
        .nav-menu {
            display: flex;
        }
        
        .nav-menu li {
            margin-left: 20px;
            position: relative;
        }
        
        .nav-menu a {
            color: #333;
            font-weight: 500;
            padding: 10px 0;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: #00a8e8;
        }
        
        .mobile-menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Page Banner */
        .page-banner {
            height: 40vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random/1920x1080/?contact,office') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            margin-top: 80px;
        }
        
        .page-banner h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .page-banner p {
            font-size: 1.2rem;
            max-width: 700px;
        }
        
        /* Contact Info */
        .contact-info {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #00a8e8;
        }
        
        .section-title p {
            color: #666;
            font-size: 1.2rem;
        }
        
        .info-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .info-box {
            flex: 0 0 calc(33.333% - 30px);
            margin-bottom: 40px;
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .info-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .info-icon {
            width: 70px;
            height: 70px;
            background-color: #e6f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #00a8e8;
            margin: 0 auto 20px;
        }
        
        .info-box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        
        .info-box p {
            color: #666;
        }
        
        /* Contact Form */
        .contact-form {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .form-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .form-image {
            flex: 0 0 40%;
            background: url('https://source.unsplash.com/random/600x800/?school,education') no-repeat center center/cover;
        }
        
        .form-content {
            flex: 0 0 60%;
            padding: 50px;
        }
        
        .form-content h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-control:focus {
            border-color: #00a8e8;
            outline: none;
        }
        
        textarea.form-control {
            height: 150px;
            resize: vertical;
        }
        
        .btn {
            display: inline-block;
            background-color: #00a8e8;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: #0077b6;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Map Section */
        .map-section {
            height: 400px;
            background-color: #f0f0f0;
        }
        
        .map-section iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        
        /* Footer */
        footer {
            background-color: #222;
            color: #fff;
            padding: 60px 0 20px;
        }
        
        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .footer-col {
            flex: 0 0 calc(25% - 30px);
            margin-bottom: 30px;
        }
        
        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #00a8e8;
        }
        
        .footer-col p {
            margin-bottom: 15px;
            color: #bbb;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #bbb;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #00a8e8;
        }
        
        .social-links {
            display: flex;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #333;
            border-radius: 50%;
            margin-right: 10px;
            color: #fff;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: #00a8e8;
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            margin-top: 30px;
            color: #bbb;
        }
        
        /* Alert Messages */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .info-box {
                flex: 0 0 calc(50% - 20px);
            }
            
            .form-image {
                display: none;
            }
            
            .form-content {
                flex: 0 0 100%;
            }
            
            .footer-col {
                flex: 0 0 calc(50% - 20px);
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                padding: 15px;
            }
            
            .nav-menu {
                position: fixed;
                top: 80px;
                left: -100%;
                background-color: #fff;
                width: 100%;
                height: calc(100vh - 80px);
                flex-direction: column;
                align-items: center;
                padding-top: 30px;
                transition: all 0.5s;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-menu li {
                margin: 15px 0;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .page-banner h1 {
                font-size: 2.5rem;
            }
            
            .info-box {
                flex: 0 0 100%;
            }
            
            .form-content {
                padding: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .footer-col {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="https://via.placeholder.com/150x50/00a8e8/ffffff?text=REHAN+SCHOOL" alt="Rehan School Logo">
            </div>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="curriculum.php">Curriculum</a></li>
                <li><a href="facilitators.php">Facilitators</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="faqs.php">FAQs</a></li>
            </ul>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch with us for any inquiries or to schedule a visit</p>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="contact-info">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>We'd love to hear from you</p>
            </div>
            <div class="info-container">
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Our Location</h3>
                    <p>123 Education Street</p>
                    <p>Karachi, Pakistan</p>
                </div>
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Phone Number</h3>
                    <p>+92 123 456 7890</p>
                    <p>+92 098 765 4321</p>
                </div>
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Address</h3>
                    <p>info@rehanschool.net</p>
                    <p>admissions@rehanschool.net</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form">
        <div class="container">
            <div class="form-container">
                <div class="form-image"></div>
                <div class="form-content">
                    <h2>Send Us a Message</h2>
                    
                    <?php
                    // Process form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        
                        // Basic validation
                        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                            echo '<div class="alert alert-danger">Please fill in all fields.</div>';
                        } else {
                            // Insert into database
                            $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("ssss", $name, $email, $subject, $message);
                            
                            if ($stmt->execute()) {
                                echo '<div class="alert alert-success">Your message has been sent successfully. We will get back to you soon!</div>';
                            } else {
                                echo '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
                            }
                            
                            $stmt->close();
                        }
                    }
                    ?>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462118.02491053584!2d66.75459371440882!3d25.19298776272136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1651234567890!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>About Rehan School</h3>
                    <p>Rehan School is an AI-enabled educational institution focused on developing future leaders through innovative curriculum and entrepreneurial skills training.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="curriculum.php">Curriculum</a></li>
                        <li><a href="facilitators.php">Facilitators</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Resources</h3>
                    <ul class="footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Education Street, Karachi, Pakistan</p>
                    <p><i class="fas fa-phone"></i> +92 123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> info@rehanschool.net</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Rehan School. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.querySelector('i').classList.toggle('fa-bars');
            mobileMenuBtn.querySelector('i').classList.toggle('fa-times');
        });
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Form Validation
        const contactForm = document.querySelector('form');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                if (name === '' || email === '' || subject === '' || message === '') {
                    e.preventDefault();
                    alert('Please fill in all fields');
                }
            });
        }
        
        // Page Redirection
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
