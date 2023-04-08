<?php 
session_start();

	include("connection2.php");
	include("functions2.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en"><plasmo-csui id="merlinExt-selectContextBtn"></plasmo-csui><merlin-component id="merlin-text-summarizer" class="merlin text-summarizer"></merlin-component><plasmo-csui id="merlinExt-merlinGUI"></plasmo-csui><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial | DesignMediaX</title>
    <link rel="stylesheet" href="style102.css">
    <link rel="stylesheet" href="boxicons-2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body id="home">

    <div class="scroll-up-btn">
        <i class="bx bx-up-arrow-alt bx-sm"></i>
    </div>
    <div class="showcase">
       

   <header>
      <nav>
         <div class="logo">
            Team Minor
         </div>
         
         <i class="fas fa-bars"></i>
         
         <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
           
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>
      </header>

       <!-- Showcase content Section -->
       <div class="showcase-content">
           <h1>One Stop Finance  <br>Strategy <span>&amp; Solution</span></h1>
           <p>We provide one-stop financial infrastructure solution that will help low-income households and small business owners access financial resources and support services. </p>
           <a href="#" class="btn btn-left">EXPLORE MORE</a>
           <a href="#" class="btn btn-right">GET IN TOUCH</a>
       </div>
    </div>

    <!-- Services / Goal Section  -->

    <section id="services" class="bg-light py-3">
        <div class="wrapper">
            <div class="items">
                <div class="item">
                    <i class="bx bxs-badge-dollar bx-lg"></i>
                    <h3>Loan Distribution</h3>
                    <p>We will partner with local organizations 
                    and community groups to identify potential 
                    program participants. Loans will be distributed 
                    based on the specific needs and creditworthiness
                    of the borrowers.                                                                                                                                                           </p>
<p></p>
                </div>
                <div class="item">
                    <i class="bx bxs-building-house bx-lg"></i>
                    <h3>Repayment</h3>
                    <p>Our repayment system will be designed to ensure timely and consistent payments. Borrowers will be required to make regular payments, and we will provide support and guidance to help them stay on track. We will also establish a credit reporting system to help borrowers build their credit scores and access larger loans in future.</p>

<p></p>
                </div>
                <div class="item">
                    <i class="bx bxs-credit-card-front bx-lg"></i>
                    <h3>Support Services</h3>
                    <p>Our microfinance program will provide support services to borrowers to help them succeed. We will offer financial management training and business planning support to help borrowers develop the skills they need to succeed. In addition, our one-stop financial infrastructure solution will provide access to information on government grants and other support services that may be available.
</p>
                </div>
               
            </div>
            <div id="goal" class="goal">
                <div class="goal-img">
                    <img src="./123456789.jpg" alt="Image description">
                </div>
                <div class="goal-text">
                    <a href="#">Our Target Population</a>
                    <h2>Microfunding <br>and Loans</h2>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Low-income individuals and families</h3>
                            <p> The microfinance programs would be designed to support poverty victims <br>including those on low-incomes who may struggle to access traditional forms of finance.
</p>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Young adults</h3>
                            <p>Provide financial support to young adults. <br>Financial support to help them transition into the workforce.
</p>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Women</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Nam ipsa vero accusantium enim culpa iure aspernatur ?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio py-3">
        <h3 class="text-center">Company Portfolio</h3>
        <h2 class="text-center">Our Latest <span class="text-secondary">Case Studies</span> </h2>
        <p class="text-center">We help you see the world differently, discover opportunities you may never have <br> imagined and achieve results that bridge what is with what can be</p>
        <div class="owl-carousel">
            <div class="item"><img src="./images/photo2.jpg"></div>
            <div class="item"><img src="./images/photo3.jpg"></div>
            <div class="item"><img src="./images/photo4.jpg"></div>
            <div class="item"><img src="./images/photo5.jpg"></div>
            <div class="item"><img src="./images/photo6.jpg"></div>
            <div class="item"><img src="./images/photo7.jpg"></div>
            <div class="item"><img src="./images/photo8.jpg"></div>
            <div class="item"><img src="./images/photo9.jpg"></div>
            <div class="item"><img src="./images/photo10.jpg"></div>
            <div class="item"><img src="./images/photo11.jpg"></div>
            <div class="item"><img src="./images/photo12.jpg"></div>
            <div class="item"><img src="./images/photo13.jpg"></div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="teams" class="teams bg-light py-3">
        <h3 class="text-center">We are there for you</h3>
        <h2 class="text-center">Meet Our <span class="text-secondary">Professional Team</span></h2>
        <p class="text-center">We help you see the world differently, discover opportunities you may never have <br> imagined and achieve results that bridge what is with what can be</p>
        <div class="wrapper">
            <div class="card-items">
                <div class="card">
                    <div class="card-header">
                        <img src="./bhomik.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Bhomik Jain</h3>
                        <h4>Team Leader</h4>
                        <ul>
                            <li><a href="#"><i class="bx bxl-twitter bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest-alt bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./lavya.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Lavya Punjabi</h3>
                        <h4>Team member</h4>
                        <ul>
                            <li><a href="#"><i class="bx bxl-twitter bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest-alt bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./arav1.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Aarav Sharma</h3>
                        <h4>Team Member</h4>
                        <ul>
                            <li><a href="#"><i class="bx bxl-twitter bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest-alt bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                

        </div>
    </div></section>
    
    <!-- Blog Section -->
    <section id="blog" class="blog py-3">
        <div class="wrapper">
            <div class="header">
                <span></span>
                <h4>Business Blog</h4>
            </div>
            <div class="blog-info">
                <h2>Read Our <span class="text-secondary">Latest Insights</span></h2>
                <a href="#">view all</a>
            </div>
            <div class="blog-card">
                <div class="card">
                    <div class="card-header">
                        <img src="/images/blog1.jpg">
                    </div>
                    <div class="card-body">
                        <span class="tag tag-yellow">Business</span>
                        <h4>Contactless Payments' <br> Time has come</h4>
                        <div class="footer">
                            <small>April 7, 2022 / 5 comments</small>
                            <a href="#"><i class="bx bx-right-arrow-alt bx-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="/images/blog2.jpg">
                    </div>
                    <div class="card-body">
                        <span class="tag tag-purple">Finance</span>
                        <h4>The Future of Retail: <br> Europe's Ecosystems</h4>
                        <div class="footer">
                            <small>April 11, 2022 / 20 comments</small>
                            <a href="#"><i class="bx bx-right-arrow-alt bx-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="/images/blog3.jpg">
                    </div>
                    <div class="card-body">
                        <span class="tag tag-pink">Marketiing</span>
                        <h4>Digital Transformation <br> Roadmap: Enablers</h4>
                        <div class="footer">
                            <small>April 30, 2022 / 10 comments</small>
                            <a href="#"><i class="bx bx-right-arrow-alt bx-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="contact" class="contact bg-secondary py-3">
        <h2 class="text-center">Subscribe To Our Newsletter</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,<br> quam asperiores qui illum tenetur atque.</p>
        <div class="wrapper">
            <form class="text-center">
                <input type="email" name="email" id="email" placeholder="Enter Email Address">
                <button class="button">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-bottom py-3 text-center">
        <p>Copyright © 2022 by FintechGiants. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="app.js"></script>











</body></html>