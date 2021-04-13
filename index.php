<?php
	require("top.php");
	$currentyear=date("Y")-2005;
	
	$startday = new DateTime('2020-11-04');
	$today = new DateTime();
	$days  = $today->diff($startday)->format('%a');

	$studentcount = 3000 + $days*2;
	
?>

 <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>The more hearts we teach...,<br>The more hearts we touch.....</h1>
      <h2>commerce SOLUTIONS, Come Towards Success</h2>
      <a href="" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about comsol final.jpg" class="img-fluid" alt="commerce solution indore">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Commerce Solutions is an institute for CA, CS, 11th and 12th standard students established since 2005.</h3>
            <p class="font-italic">
              At Commerce Solutions our aim is not only to help its Students in Scoring a higher percentage in the examination 
			  of Commerce Subjects, but it also aims to expand the knowledge and concept base of the subject so that students 
			  can learn to apply them in real-life situations. We provide -:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Simplified and advanced notes and study material.</li>
              <li><i class="icofont-check-circled"></i> Weekly tests to check your progress.</li>
              <li><i class="icofont-check-circled"></i> Commerce Solutions is an extraordinary platform for commerce students, which is unmatchable with any other coaching centre in Indore</li>
            </ul>
            <p>
              
            </p>
            <a href="about" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
	
	
	<!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
	  
		<div class="section-title">
          <h2>Courses</h2>
          <p>List of courses we offer</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Business Studies</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Statistics</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-line-chart-line" style="color: #e80368;"></i>
              <h3><a href="">Economics</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-calculator-line" style="color: #e361ff;"></i>
              <h3><a href="">Accountancy</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Macro Economics</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Micro Economics</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Accounting for GST</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-percent-line" style="color: #4233ff;"></i>
              <h3><a href="">Mathematics</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-money-dollar-circle-line" style="color: #b2904f;"></i>
              <h3><a href="">Finance</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-bank-line" style="color: #b20969;"></i>
              <h3><a href="">Management</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-briefcase-4-line" style="color: #ff5828;"></i>
              <h3><a href="">Marketing</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-run-line" style="color: #29cc61;"></i>
              <h3><a href="">Enterpreneurship</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
	
	
	
	 <!-- ======= Counter Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
	  
		<div class="section-title">
          <h2>We have got</h2>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $currentyear;?></span>
            <p>Years of experience</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">64</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $studentcount;?></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1</span>
            <p>Trainer</p>
          </div>

        </div>

      </div>
    </section><!-- End Counter Section -->
	
	 <!-- ======= Results Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Results</h2>
          <p>Our Previous Results</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/palash result.jpg" class="img-fluid" alt=""> 
              <div class="member-content">
                <h4>Palash Hassanandani</h4>
                <span>95% CBSE Board</span>
                <p>
                  Palash Hassanandani a brilliant student of 2017 batch obtained 95% in CBSE 12th Board
                </p>
            <!--    <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/karamdeep chhabra result.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Karamdeep Chhabra</h4>
                <span>90% CBSE Board</span>
                <p>
                  Karamdeep Chhabra one of our brilliant student of 2017 batch obtained 90% in CBSE 12th Board
                </p>
            <!--    <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>  -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/ammar bagwala result.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Ammar Bagwala</h4>
                <span>92% CBSE Board</span>
                <p>
                  Ammar Bagwala one of our brilliant student of 2017 batch obtained 92% in CBSE 12th Board
                </p>
            <!--    <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Results Section -->
	
	
	<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/safaan.jpg" class="testimonial-img" alt="">
              <h3>Safaan Hashmi</h3>
              <h4>Class 12th Mathematics 2017 Batch</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
				Commerce Solutions is actually a hub providing knowledge to each student who connects with it. The environment of the institute is amicable, and teachers are very helpful, 
				who always motivate us to perform better. <!--Here you not only learn the things, but the faculty also makes you understand the concept behind it.
				thankful to all the staff and Niraj sir for making our future better -->
                
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/daarab.jpg" class="testimonial-img" alt="">
              <h3>Daaraab Shaikh</h3>
              <h4>Student of class 11th Batch 2018</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Really great place to study their. Teachers are very polite and always try to make environment happy.
				 One of the best coaching institute for Commerce in Indore.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/ammar.jpg" class="testimonial-img" alt="">
              <h3>Ammar Bagwala</h3>
              <h4>Class 12th Commerce 2017 Batch</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
				Commerce Solutions is the best institute to learn and enhance knowledge. There is a very 
				friendly environment which helps us to clear our doubts without any hesitation. Especially the teachers are especially cooperative and motivate us for studies.  I highly recommend you go and visit to experience the best
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/palash.jpg" class="testimonial-img" alt="">
              <h3>Palash Hassanandani</h3>
              <h4>Class 12th Commerce 2017 Batch</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
				  Very nice faculty. Everything is taught logically in an interesting way. Enjoying studies and able to memorise everything quickly through the notes provided. I would recommend everyone to come here and atleast take 
				  a trial and I guarantee you will love it .
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Ajay Kumar</h3>
              <h4>Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  During the pandemic and lockdown it was amazing taking online classes from you, the way of teaching is amazing. 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
		  
		<!--  <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>NEW 1</h3>
              <h4>Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
		  
		  
		  <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>NEW 2</h3>
              <h4>Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Testimonials Section -->

	
   </main>
   
<?php
	require("footer.php");
?>   
