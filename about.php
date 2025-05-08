<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Rehan School</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random/1920x1080/?school,education') no-repeat center center/cover;
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
        
        /* About Section */
        .about-section {
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
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 60px;
        }
        
        .about-text {
            flex: 0 0 60%;
            padding-right: 30px;
        }
        
        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }
        
        .about-text p {
            margin-bottom: 20px;
            color: #666;
        }
        
        .about-image {
            flex: 0 0 40%;
        }
        
        .about-image img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Mission Vision */
        .mission-vision {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .mission-vision-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .mission-box, .vision-box {
            flex: 0 0 calc(50% - 20px);
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .mission-box:hover, .vision-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .mission-box h3, .vision-box h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
            position: relative;
            padding-bottom: 15px;
        }
        
        .mission-box h3:after, .vision-box h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #00a8e8;
        }
        
        .mission-box p, .vision-box p {
            color: #666;
        }
        
        /* Timeline */
        .timeline-section {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #f0f0f0;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12px;
            background-color: #fff;
            border: 4px solid #00a8e8;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-item.left {
            left: 0;
        }
        
        .timeline-item.right {
            left: 50%;
        }
        
        .timeline-item.right::after {
            left: -12px;
        }
        
        .timeline-content {
            padding: 20px 30px;
            background-color: #f9f9f9;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .timeline-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }
        
        .timeline-content p {
            color: #666;
        }
        
        .timeline-date {
            color: #00a8e8;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #00a8e8, #0077b6);
            color: #fff;
            text-align: center;
        }
        
        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta-content p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn {
            display: inline-block;
            background-color: #fff;
            color: #00a8e8;
            padding: 12px 30px;
            border-radius: 30px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: #f9f9f9;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
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
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-text, .about-image {
                flex: 0 0 100%;
            }
            
            .about-text {
                padding-right: 0;
                margin-bottom: 30px;
            }
            
            .mission-box, .vision-box {
                flex: 0 0 100%;
                margin-bottom: 30px;
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
            
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item.right {
                left: 0;
            }
            
            .timeline-item.left::after, .timeline-item.right::after {
                left: 18px;
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
            <h1>About Rehan School</h1>
            <p>Learn about our journey, mission, and vision</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Story</h2>
                <p>The journey of Rehan School</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Pioneering AI-Enabled Education in Pakistan</h3>
                    <p>Rehan School was founded in 2015 with a vision to revolutionize education in Pakistan. We recognized the need for an educational system that prepares students not just for exams, but for the challenges of the rapidly evolving digital world.</p>
                    <p>As the first AI-enabled school in Pakistan, we have integrated cutting-edge technology with traditional learning methods to create a unique educational experience. Our approach focuses on developing critical thinking, problem-solving abilities, and entrepreneurial mindset while ensuring academic excellence.</p>
                    <p>Over the years, we have grown from a single campus to multiple locations across the country, impacting thousands of students and setting new standards for education in Pakistan.</p>
                </div>
                <div class="about-image">
                    <img src="https://source.unsplash.com/random/600x400/?school,building" alt="Rehan School Building">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Vision -->
    <section class="mission-vision">
        <div class="container">
            <div class="mission-vision-container">
                <div class="mission-box">
                    <h3>Our Mission</h3>
                    <p>To provide an innovative, technology-driven educational experience that empowers students to become leaders, problem-solvers, and entrepreneurs of tomorrow.</p>
                    <p>We are committed to nurturing each student's unique talents and abilities, fostering a love for learning, and instilling values that will guide them throughout their lives.</p>
                    <p>Through our AI-enabled curriculum and holistic approach, we aim to prepare students for success in a rapidly changing world, equipping them with the skills, knowledge, and mindset needed to thrive in the digital age.</p>
                </div>
                <div class="vision-box">
                    <h3>Our Vision</h3>
                    <p>To be the leading educational institution in Pakistan, recognized globally for our innovative approach to education and the success of our students.</p>
                    <p>We envision a future where our graduates are at the forefront of technological innovation, business leadership, and social change, making significant contributions to their communities and the world.</p>
                    <p>We strive to set new standards for education in Pakistan, inspiring other institutions to adopt forward-thinking approaches that prepare students for the challenges and opportunities of the 21st century.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Journey</h2>
                <p>Key milestones in our history</p>
            </div>
            <div class="timeline">
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <div class="timeline-date">2015</div>
                        <h3>Foundation</h3>
                        <p>Rehan School was established with a vision to revolutionize education in Pakistan.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <div class="timeline-date">2016</div>
                        <h3>First AI Lab</h3>
                        <p>Launched Pakistan's first AI laboratory in a school, setting a new standard for educational technology.</p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <div class="timeline-date">2018</div>
                        <h3>Expansion</h3>
                        <p>Opened our second campus to accommodate growing demand for our innovative educational approach.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <div class="timeline-date">2020</div>
                        <h3>Digital Transformation</h3>
                        <p>Successfully transitioned to hybrid learning during the global pandemic, showcasing our technological adaptability.</p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <div class="timeline-date">2022</div>
                        <h3>National Recognition</h3>
                        <p>Received the National Education Innovation Award for our AI-integrated curriculum.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <div class="timeline-date">2023</div>
                        <h3>Third Campus</h3>
                        <p>Expanded to our third location, continuing our mission to provide innovative education across Pakistan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Join the Rehan School Family</h2>
                <p>Be part of our journey in revolutionizing education in Pakistan.</p>
                <a href="contact.php" class="btn">Contact Us Today</a>
            </div>
        </div>
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
        
        // Page Redirection
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
