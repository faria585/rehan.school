<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum - Rehan School</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random/1920x1080/?classroom,technology') no-repeat center center/cover;
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
        
        /* Curriculum Overview */
        .curriculum-overview {
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
        
        .overview-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 60px;
        }
        
        .overview-text {
            flex: 0 0 60%;
            padding-right: 30px;
        }
        
        .overview-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }
        
        .overview-text p {
            margin-bottom: 20px;
            color: #666;
        }
        
        .overview-image {
            flex: 0 0 40%;
        }
        
        .overview-image img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Curriculum Features */
        .curriculum-features {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }
        
        .feature-item {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background-color: #e6f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #00a8e8;
            margin-bottom: 20px;
        }
        
        .feature-item h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        
        .feature-item p {
            color: #666;
        }
        
        /* Teaching Methodology */
        .teaching-methodology {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .methodology-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .methodology-item {
            flex: 0 0 calc(33.333% - 30px);
            margin-bottom: 40px;
            text-align: center;
        }
        
        .methodology-icon {
            width: 100px;
            height: 100px;
            background-color: #e6f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: #00a8e8;
            margin: 0 auto 20px;
        }
        
        .methodology-item h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        
        .methodology-item p {
            color: #666;
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
            .overview-text, .overview-image {
                flex: 0 0 100%;
            }
            
            .overview-text {
                padding-right: 0;
                margin-bottom: 30px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .methodology-item {
                flex: 0 0 calc(50% - 20px);
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
            
            .methodology-item {
                flex: 0 0 100%;
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
            <h1>Our Innovative Curriculum</h1>
            <p>Preparing students for the future through technology and soft skills integration</p>
        </div>
    </section>

    <!-- Curriculum Overview -->
    <section class="curriculum-overview">
        <div class="container">
            <div class="section-title">
                <h2>Curriculum Overview</h2>
                <p>A comprehensive approach to modern education</p>
            </div>
            <div class="overview-content">
                <div class="overview-text">
                    <h3>Redefining Education for the Digital Age</h3>
                    <p>At Rehan School, we believe in preparing students not just for exams, but for life. Our curriculum is designed to foster critical thinking, problem-solving abilities, and entrepreneurial mindset while ensuring academic excellence.</p>
                    <p>We have carefully crafted a balanced approach that integrates cutting-edge technology with traditional learning methods, ensuring students develop both technical skills and human values.</p>
                    <p>Our curriculum is regularly updated to reflect the latest advancements in education and technology, ensuring our students are always at the forefront of innovation.</p>
                </div>
                <div class="overview-image">
                    <img src="https://source.unsplash.com/random/600x400/?classroom,technology" alt="Rehan School Curriculum">
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum Features -->
    <section class="curriculum-features">
        <div class="container">
            <div class="section-title">
                <h2>Key Features</h2>
                <p>What makes our curriculum unique</p>
            </div>
            <div class="features-grid">
                <?php
                // Fetch curriculum features from database
                $sql = "SELECT * FROM curriculum ORDER BY order_num";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $icon_class = "";
                        switch($row['title']) {
                            case 'Innovative Curriculum':
                                $icon_class = "fa-laptop-code";
                                break;
                            case 'AI-Enabled Education':
                                $icon_class = "fa-robot";
                                break;
                            case 'Holistic Development':
                                $icon_class = "fa-brain";
                                break;
                            case 'Entrepreneurial Focus':
                                $icon_class = "fa-lightbulb";
                                break;
                            default:
                                $icon_class = "fa-graduation-cap";
                        }
                ?>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas <?php echo $icon_class; ?>"></i>
                    </div>
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                </div>
                <?php
                    }
                } else {
                    // Fallback if no data in database
                ?>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Innovative Curriculum</h3>
                    <p>Rehan School integrates cutting-edge technology and soft skills training, preparing students for future challenges.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AI-Enabled Education</h3>
                    <p>As the first AI-enabled school in Pakistan, Rehan School offers advanced learning tools that keep students ahead in the digital age.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Holistic Development</h3>
                    <p>Our comprehensive approach includes modern classrooms, well-equipped labs, and sports facilities to foster overall growth.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Entrepreneurial Focus</h3>
                    <p>Students learn business principles and innovation through practical projects and real-world applications.</p>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Teaching Methodology -->
    <section class="teaching-methodology">
        <div class="container">
            <div class="section-title">
                <h2>Teaching Methodology</h2>
                <p>How we deliver our curriculum</p>
            </div>
            <div class="methodology-container">
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaborative Learning</h3>
                    <p>Students work together on projects, developing teamwork and communication skills while solving complex problems.</p>
                </div>
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-hands-on"></i>
                    </div>
                    <h3>Hands-on Experience</h3>
                    <p>Practical application of concepts through experiments, projects, and real-world scenarios.</p>
                </div>
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Personalized Instruction</h3>
                    <p>AI-powered learning systems adapt to each student's pace and learning style for optimal results.</p>
                </div>
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Project-Based Learning</h3>
                    <p>Students tackle complex projects that require critical thinking and problem-solving skills.</p>
                </div>
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Perspective</h3>
                    <p>Curriculum incorporates international standards and global awareness to prepare students for a connected world.</p>
                </div>
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Continuous Assessment</h3>
                    <p>Regular feedback and assessment help track progress and identify areas for improvement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Our Innovative Curriculum?</h2>
                <p>Join Rehan School and give your child the education they deserve for a successful future.</p>
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
</html>cu
