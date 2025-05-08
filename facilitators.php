<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitators - Rehan School</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random/1920x1080/?teacher,education') no-repeat center center/cover;
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
        
        /* Team Intro */
        .team-intro {
            padding: 80px 0;
            background-color: #fff;
            text-align: center;
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
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Team Members */
        .team-members {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        
        .team-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .team-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        
        .team-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .team-card:hover .team-image img {
            transform: scale(1.1);
        }
        
        .team-info {
            padding: 20px;
            text-align: center;
        }
        
        .team-info h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: #333;
        }
        
        .team-info p {
            color: #00a8e8;
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        .team-bio {
            color: #666;
            margin-bottom: 20px;
        }
        
        .team-social {
            display: flex;
            justify-content: center;
        }
        
        .team-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background-color: #f0f0f0;
            border-radius: 50%;
            margin: 0 5px;
            color: #333;
            transition: all 0.3s;
        }
        
        .team-social a:hover {
            background-color: #00a8e8;
            color: #fff;
            transform: translateY(-3px);
        }
        
        /* Join Team */
        .join-team {
            padding: 80px 0;
            background-color: #fff;
            text-align: center;
        }
        
        .join-content {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .join-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        
        .join-content p {
            color: #666;
            margin-bottom: 30px;
        }
        
        .btn {
            display: inline-block;
            background-color: #00a8e8;
            color: #fff;
            padding: 12px 30px;
            border-radius: 30px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: #0077b6;
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
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
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
            
            .team-grid {
                grid-template-columns: 1fr;
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
            <h1>Our Facilitators</h1>
            <p>Meet the dedicated team behind Rehan School's success</p>
        </div>
    </section>

    <!-- Team Intro -->
    <section class="team-intro">
        <div class="container">
            <div class="section-title">
                <h2>Our Team</h2>
                <p>At Rehan School, we don't have teachers – we have facilitators who guide, inspire, and empower students to discover their potential. Our team consists of experienced professionals who are passionate about education and committed to nurturing the next generation of leaders.</p>
            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section class="team-members">
        <div class="container">
            <div class="team-grid">
                <?php
                // Fetch facilitators from database
                $sql = "SELECT * FROM facilitators";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $social_media = json_decode($row['social_media'], true);
                ?>
                <div class="team-card">
                    <div class="team-image">
                        <img src="<?php echo !empty($row['image']) ? $row['image'] : 'https://via.placeholder.com/400x500'; ?>" alt="<?php echo $row['name']; ?>">
                    </div>
                    <div class="team-info">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['position']; ?></p>
                        <div class="team-bio">
                            <?php echo $row['bio']; ?>
                        </div>
                        <div class="team-social">
                            <?php if(!empty($row['email'])): ?>
                            <a href="mailto:<?php echo $row['email']; ?>"><i class="fas fa-envelope"></i></a>
                            <?php endif; ?>
                            
                            <?php if(!empty($social_media['twitter'])): ?>
                            <a href="https://twitter.com/<?php echo str_replace('@', '', $social_media['twitter']); ?>"><i class="fab fa-twitter"></i></a>
                            <?php endif; ?>
                            
                            <?php if(!empty($social_media['linkedin'])): ?>
                            <a href="https://linkedin.com/in/<?php echo $social_media['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    // Fallback if no data in database
                ?>
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://via.placeholder.com/400x500" alt="Dr. Ahmed Khan">
                    </div>
                    <div class="team-info">
                        <h3>Dr. Ahmed Khan</h3>
                        <p>Principal</p>
                        <div class="team-bio">
                            Dr. Ahmed Khan has over 20 years of experience in educational leadership and innovation.
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fas fa-envelope"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://via.placeholder.com/400x500" alt="Ms. Fatima Ali">
                    </div>
                    <div class="team-info">
                        <h3>Ms. Fatima Ali</h3>
                        <p>AI Education Specialist</p>
                        <div class="team-bio">
                            Ms. Fatima specializes in integrating AI technologies into educational curriculum.
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fas fa-envelope"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://via.placeholder.com/400x500" alt="Mr. Zain Malik">
                    </div>
                    <div class="team-info">
                        <h3>Mr. Zain Malik</h3>
                        <p>Entrepreneurship Coach</p>
                        <div class="team-bio">
                            Mr. Zain brings real-world business experience to help students develop entrepreneurial skills.
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fas fa-envelope"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Join Team -->
    <section class="join-team">
        <div class="container">
            <div class="join-content">
                <h2>Join Our Team</h2>
                <p>Are you passionate about education and innovation? Do you want to be part of a team that's redefining education for the digital age? We're always looking for talented individuals to join our mission.</p>
                <a href="contact.php" class="btn">Contact Us</a>
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
