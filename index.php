<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Where Leaders Are Made, Not Born</title>
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
        
        /* Hero Section */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random/1920x1080/?classroom') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            padding-top: 70px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: 400;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
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
        
        /* Features Section */
        .features {
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
            color: #00a8e8;
            font-size: 1.2rem;
        }
        
        .features-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .feature-box {
            flex: 0 0 calc(33.333% - 30px);
            margin-bottom: 40px;
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background-color: #e6f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #00a8e8;
        }
        
        .feature-box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        
        .feature-box p {
            color: #666;
        }
        
        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #00a8e8, #0077b6);
            color: #fff;
            padding: 60px 0;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        
        .stat-item {
            padding: 20px;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .stat-text {
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Testimonials Section */
        .testimonials {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .testimonials-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .testimonial-box {
            flex: 0 0 calc(33.333% - 30px);
            margin-bottom: 40px;
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .testimonial-box:before {
            content: '\201C';
            font-size: 80px;
            position: absolute;
            top: 20px;
            left: 20px;
            color: #e6f7ff;
            font-family: Georgia, serif;
            z-index: 0;
        }
        
        .testimonial-content {
            position: relative;
            z-index: 1;
        }
        
        .testimonial-text {
            margin-bottom: 20px;
            font-style: italic;
            color: #555;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }
        
        .author-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: #777;
            font-size: 0.9rem;
        }
        
        /* Articles Section */
        .articles {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .articles-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .article-box {
            flex: 0 0 calc(33.333% - 30px);
            margin-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .article-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .article-img {
            height: 200px;
            overflow: hidden;
        }
        
        .article-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .article-box:hover .article-img img {
            transform: scale(1.1);
        }
        
        .article-content {
            padding: 20px;
            background-color: #fff;
        }
        
        .article-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        
        .article-content p {
            color: #666;
            margin-bottom: 15px;
        }
        
        .article-meta {
            display: flex;
            justify-content: space-between;
            color: #999;
            font-size: 0.9rem;
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
            .feature-box, .testimonial-box, .article-box {
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
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero h2 {
                font-size: 1.5rem;
            }
            
            .feature-box, .testimonial-box, .article-box {
                flex: 0 0 100%;
            }
            
            .stats-container {
                flex-wrap: wrap;
            }
            
            .stat-item {
                flex: 0 0 50%;
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .footer-col {
                flex: 0 0 100%;
            }
            
            .stat-item {
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Rehan School</h1>
            <h2>Where Leaders Are Made, Not Born</h2>
            <p>Creating Leaders and Problem-Solvers of Tomorrow</p>
            <a href="contact.php" class="btn">Enroll Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <p>Reasons to choose Rehan School</p>
                <h2>What Makes <span style="color: #00a8e8;">Rehan School</span> Unique?</h2>
            </div>
            <div class="features-container">
                <?php
                // Fetch curriculum features from database
                $sql = "SELECT * FROM curriculum ORDER BY order_num LIMIT 3";
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
                <div class="feature-box">
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
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Innovative Curriculum</h3>
                    <p>Rehan School integrates cutting-edge technology and soft skills training, preparing students for future challenges.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AI-Enabled Education</h3>
                    <p>As the first AI-enabled school in Pakistan, Rehan School offers advanced learning tools that keep students ahead in the digital age.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Holistic Development</h3>
                    <p>Our comprehensive approach includes modern classrooms, well-equipped labs, and sports facilities to foster overall growth.</p>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <div class="stat-text">Expert Facilitators</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-text">Students Enrolled</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">3</div>
                    <div class="stat-text">Campuses</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-text">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What People Say</h2>
                <p>Testimonials from our community</p>
            </div>
            <div class="testimonials-container">
                <?php
                // Fetch testimonials from database
                $sql = "SELECT * FROM testimonials LIMIT 3";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                <div class="testimonial-box">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            <?php echo $row['content']; ?>
                        </div>
                        <div class="testimonial-author">
                            <img src="<?php echo !empty($row['image']) ? $row['image'] : 'https://via.placeholder.com/50x50'; ?>" alt="<?php echo $row['name']; ?>">
                            <div class="author-info">
                                <h4><?php echo $row['name']; ?></h4>
                                <p><?php echo $row['position']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    // Fallback if no data in database
                ?>
                <div class="testimonial-box">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            Rehan School has transformed my child's approach to learning. The AI-enabled education is truly revolutionary!
                        </div>
                        <div class="testimonial-author">
                            <img src="https://via.placeholder.com/50x50" alt="Aisha Mahmood">
                            <div class="author-info">
                                <h4>Aisha Mahmood</h4>
                                <p>Parent</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            The curriculum at Rehan School is years ahead of traditional educational institutions in Pakistan.
                        </div>
                        <div class="testimonial-author">
                            <img src="https://via.placeholder.com/50x50" alt="Hassan Ahmed">
                            <div class="author-info">
                                <h4>Hassan Ahmed</h4>
                                <p>Education Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            The entrepreneurial skills I learned at Rehan School helped me launch my own startup at just 19 years old.
                        </div>
                        <div class="testimonial-author">
                            <img src="https://via.placeholder.com/50x50" alt="Sana Khalid">
                            <div class="author-info">
                                <h4>Sana Khalid</h4>
                                <p>Former Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="articles">
        <div class="container">
            <div class="section-title">
                <h2>Latest Articles</h2>
                <p>News and updates from Rehan School</p>
            </div>
            <div class="articles-container">
                <?php
                // Fetch articles from database
                $sql = "SELECT * FROM articles WHERE is_published = 1 ORDER BY created_at DESC LIMIT 3";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $date = date('M d, Y', strtotime($row['created_at']));
                ?>
                <div class="article-box">
                    <div class="article-img">
                        <img src="<?php echo !empty($row['image']) ? $row['image'] : 'https://via.placeholder.com/400x200'; ?>" alt="<?php echo $row['title']; ?>">
                    </div>
                    <div class="article-content">
                        <h3><?php echo $row['title']; ?></h3>
                        <p><?php echo substr($row['content'], 0, 100) . '...'; ?></p>
                        <div class="article-meta">
                            <span><i class="far fa-calendar"></i> <?php echo $date; ?></span>
                            <span><i class="far fa-user"></i> <?php echo $row['author']; ?></span>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    // Fallback if no data in database
                ?>
                <div class="article-box">
                    <div class="article-img">
                        <img src="https://via.placeholder.com/400x200" alt="Rehan School Wins Innovation Award">
                    </div>
                    <div class="article-content">
                        <h3>Rehan School Wins Innovation Award</h3>
                        <p>We are proud to announce that Rehan School has been recognized with the National Education Innovation Award...</p>
                        <div class="article-meta">
                            <span><i class="far fa-calendar"></i> May 15, 2023</span>
                            <span><i class="far fa-user"></i> Admin Team</span>
                        </div>
                    </div>
                </div>
                <div class="article-box">
                    <div class="article-img">
                        <img src="https://via.placeholder.com/400x200" alt="New AI Lab Launched">
                    </div>
                    <div class="article-content">
                        <h3>New AI Lab Launched</h3>
                        <p>Rehan School has inaugurated a state-of-the-art AI laboratory equipped with the latest technology...</p>
                        <div class="article-meta">
                            <span><i class="far fa-calendar"></i> Apr 28, 2023</span>
                            <span><i class="far fa-user"></i> Tech Department</span>
                        </div>
                    </div>
                </div>
                <div class="article-box">
                    <div class="article-img">
                        <img src="https://via.placeholder.com/400x200" alt="Student Entrepreneurs Showcase">
                    </div>
                    <div class="article-content">
                        <h3>Student Entrepreneurs Showcase</h3>
                        <p>Our annual Entrepreneurship Fair showcased incredible business ideas from students as young as 12 years old...</p>
                        <div class="article-meta">
                            <span><i class="far fa-calendar"></i> Mar 10, 2023</span>
                            <span><i class="far fa-user"></i> Business Faculty</span>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
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
        
        // Stats Counter Animation
        const statNumbers = document.querySelectorAll('.stat-number');
        
        const countUp = () => {
            statNumbers.forEach(stat => {
                const target = parseInt(stat.textContent);
                const count = +stat.innerText.replace(/\D/g, '');
                const speed = 200;
                const inc = target / speed;
                
                if (count < target) {
                    stat.innerText = Math.ceil(count + inc) + (stat.innerText.includes('+') ? '+' : '');
                    setTimeout(countUp, 1);
                } else {
                    stat.innerText = target + (stat.innerText.includes('+') ? '+' : '');
                }
            });
        };
        
        // Trigger counter when stats section is in viewport
        const statsSection = document.querySelector('.stats');
        
        const checkScroll = () => {
            const triggerBottom = window.innerHeight / 5 * 4;
            const statsSectionTop = statsSection.getBoundingClientRect().top;
            
            if (statsSectionTop < triggerBottom) {
                countUp();
                window.removeEventListener('scroll', checkScroll);
            }
        };
        
        window.addEventListener('scroll', checkScroll);
        
        // Page Redirection
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
