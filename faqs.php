<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Rehan School</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random/1920x1080/?question,help') no-repeat center center/cover;
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
        
        /* FAQs Section */
        .faqs-section {
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
        
        .faq-categories {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .category-btn {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #f0f0f0;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .category-btn:hover, .category-btn.active {
            background-color: #00a8e8;
            color: #fff;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .faq-item:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .faq-question {
            padding: 20px;
            background-color: #f9f9f9;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #333;
            transition: all 0.3s;
        }
        
        .faq-question:hover {
            background-color: #f0f0f0;
        }
        
        .faq-question i {
            transition: transform 0.3s;
        }
        
        .faq-question.active {
            background-color: #00a8e8;
            color: #fff;
        }
        
        .faq-question.active i {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background-color: #fff;
        }
        
        .faq-answer-content {
            padding: 20px 0;
            color: #666;
        }
        
        /* Ask Question */
        .ask-question {
            padding: 80px 0;
            background-color: #f9f9f9;
            text-align: center;
        }
        
        .ask-content {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .ask-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        
        .ask-content p {
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
            
            .faq-categories {
                flex-wrap: wrap;
            }
            
            .category-btn {
                margin-bottom: 10px;
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
            <h1>Frequently Asked Questions</h1>
            <p>Find answers to common questions about Rehan School</p>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="faqs-section">
        <div class="container">
            <div class="section-title">
                <h2>FAQs</h2>
                <p>Everything you need to know about Rehan School</p>
            </div>
            
            <div class="faq-categories">
                <button class="category-btn active" data-category="all">All</button>
                <button class="category-btn" data-category="admissions">Admissions</button>
                <button class="category-btn" data-category="curriculum">Curriculum</button>
                <button class="category-btn" data-category="facilities">Facilities</button>
                <button class="category-btn" data-category="fees">Fees & Scholarships</button>
            </div>
            
            <div class="faq-container">
                <!-- FAQ Item 1 -->
                <div class="faq-item" data-category="admissions">
                    <div class="faq-question">
                        <span>What is the admission process at Rehan School?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>The admission process at Rehan School involves the following steps:</p>
                            <ol>
                                <li>Submit an online application form</li>
                                <li>Entrance assessment (age-appropriate)</li>
                                <li>Interview with the student and parents</li>
                                <li>Review of previous academic records</li>
                                <li>Offer of admission (if selected)</li>
                                <li>Payment of registration fee to secure the seat</li>
                            </ol>
                            <p>We recommend applying early as seats are limited and fill up quickly.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="faq-item" data-category="curriculum">
                    <div class="faq-question">
                        <span>How is AI integrated into the curriculum?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>AI is integrated into our curriculum in several ways:</p>
                            <ul>
                                <li>Personalized learning paths that adapt to each student's strengths and areas for improvement</li>
                                <li>AI-powered assessment tools that provide immediate feedback</li>
                                <li>Coding and AI literacy courses appropriate for each grade level</li>
                                <li>Project-based learning that incorporates AI tools and concepts</li>
                                <li>AI labs where students can experiment with machine learning models</li>
                            </ul>
                            <p>Our goal is to ensure students are not just consumers of AI technology but understand how it works and can create with it.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item" data-category="facilities">
                    <div class="faq-question">
                        <span>What facilities are available at Rehan School?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Rehan School offers state-of-the-art facilities including:</p>
                            <ul>
                                <li>Modern classrooms with interactive smartboards</li>
                                <li>Dedicated AI and computer labs</li>
                                <li>Science laboratories for physics, chemistry, and biology</li>
                                <li>Library with digital and print resources</li>
                                <li>Sports facilities including basketball court, football field, and indoor games</li>
                                <li>Art and music studios</li>
                                <li>Cafeteria serving nutritious meals</li>
                                <li>Medical room with a qualified nurse</li>
                            </ul>
                            <p>All our facilities are regularly updated to ensure they meet the highest standards of education and safety.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item" data-category="fees">
                    <div class="faq-question">
                        <span>Are scholarships available for students?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Yes, Rehan School offers several scholarship programs:</p>
                            <ul>
                                <li>Merit-based scholarships for academically outstanding students</li>
                                <li>Need-based financial aid for deserving students</li>
                                <li>Sports scholarships for students with exceptional athletic abilities</li>
                                <li>Innovation scholarships for students demonstrating exceptional creativity and problem-solving skills</li>
                            </ul>
                            <p>Scholarship applications are reviewed by a committee, and decisions are based on the specific criteria for each scholarship type. For more information, please contact our admissions office.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="faq-item" data-category="curriculum">
                    <div class="faq-question">
                        <span>What curriculum does Rehan School follow?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Rehan School follows a hybrid curriculum that combines the best elements of national and international educational standards. Our curriculum is designed to:</p>
                            <ul>
                                <li>Meet and exceed the requirements of the national education board</li>
                                <li>Incorporate international best practices in education</li>
                                <li>Focus on STEAM (Science, Technology, Engineering, Arts, and Mathematics)</li>
                                <li>Develop 21st-century skills like critical thinking, creativity, collaboration, and communication</li>
                                <li>Include entrepreneurship and financial literacy</li>
                            </ul>
                            <p>Our curriculum is regularly updated to reflect the latest advancements in education and technology.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="faq-item" data-category="admissions">
                    <div class="faq-question">
                        <span>What is the teacher-to-student ratio at Rehan School?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>At Rehan School, we maintain a low teacher-to-student ratio of 1:15 on average. This ensures:</p>
                            <ul>
                                <li>Personalized attention for each student</li>
                                <li>More effective classroom management</li>
                                <li>Better monitoring of student progress</li>
                                <li>Enhanced learning experiences</li>
                                <li>Stronger teacher-student relationships</li>
                            </ul>
                            <p>We believe that smaller class sizes allow our facilitators to better address the individual needs of each student and create a more engaging learning environment.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 7 -->
                <div class="faq-item" data-category="facilities">
                    <div class="faq-question">
                        <span>Is transportation available for students?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Yes, Rehan School provides transportation services for students. Our transportation system features:</p>
                            <ul>
                                <li>Modern, air-conditioned buses</li>
                                <li>GPS tracking for real-time location monitoring</li>
                                <li>Trained drivers and attendants on each bus</li>
                                <li>Multiple routes covering major areas of the city</li>
                                <li>Safety protocols including regular vehicle maintenance</li>
                            </ul>
                            <p>Transportation fees vary based on the distance from the school. For specific route information and fees, please contact our administration office.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 8 -->
                <div class="faq-item" data-category="fees">
                    <div class="faq-question">
                        <span>What are the fee payment options?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Rehan School offers flexible fee payment options to accommodate parents' preferences:</p>
                            <ul>
                                <li>Annual payment (with a discount)</li>
                                <li>Bi-annual payments (two installments per year)</li>
                                <li>Quarterly payments (four installments per year)</li>
                                <li>Monthly payment plan (available upon request)</li>
                            </ul>
                            <p>Payments can be made through:</p>
                            <ul>
                                <li>Online bank transfer</li>
                                <li>Credit/debit card</li>
                                <li>Direct deposit at our partner banks</li>
                                <li>Cheque payment at the school finance office</li>
                            </ul>
                            <p>For detailed fee structure and payment policies, please refer to our fee schedule or contact the finance department.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ask Question -->
    <section class="ask-question">
        <div class="container">
            <div class="ask-content">
                <h2>Didn't Find Your Answer?</h2>
                <p>If you have any other questions or need more information, feel free to contact us. We're here to help!</p>
                <a href="contact.php" class="btn">Ask a Question</a>
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
        
        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');
                
                // Close all other FAQs
                faqQuestions.forEach(q => {
                    q.classList.remove('active');
                    q.nextElementSibling.style.maxHeight = null;
                });
                
                // Toggle current FAQ
                if (!isActive) {
                    question.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
        
        // FAQ Category Filter
        const categoryBtns = document.querySelectorAll('.category-btn');
        const faqItems = document.querySelectorAll('.faq-item');
        
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.getAttribute('data-category');
                
                // Update active button
                categoryBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Filter FAQs
                faqItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                // Close all open FAQs
                faqQuestions.forEach(q => {
                    q.classList.remove('active');
                    q.nextElementSibling.style.maxHeight = null;
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
