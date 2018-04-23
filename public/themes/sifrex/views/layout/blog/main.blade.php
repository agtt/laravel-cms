<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themazine.com/html/scholars-lms/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2018 07:45:36 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>@yield('title', "")</title>
    @yield('styles')
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ Theme::asset('sifrex::css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ Theme::asset('sifrex::css/responsive.css') }}">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-menu-wrapper">
				<div class="header-wrapper">
					<div class="container">
						<!-- Logo -->
						<div class="logo float-left"><a href="index.html"><img src="images/logo/logo.png" alt="Logo"></a></div>

						<!-- Curt Button -->
						<button class="cart-button float-right">
							<i class="flaticon-cart"></i>
						</button>

						<!-- Search Bar -->
						<div class="search-option float-right">
					   		<button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-search"></i></button>
					   		<form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
					   			<input type="text" placeholder="Arama Yap....">
					   			<button class="p-bg-color"><i class="fa fa-search" aria-hidden="true"></i></button>
					   		</form>
					   </div> <!-- /.search-option -->

						 @include('sifrex::layout.blog.menu')
						
					</div> <!-- /.container -->
				</div>
			</header> <!-- /.theme-menu-wrapper -->

    <!--
    =============================================
      Theme Main Banner
    ==============================================
    -->
    <div id="theme-main-banner" class="banner-one">
      <div data-src="images/home/slide-1.jpg">
        <div class="camera_caption">
          <div class="container">
            <h6 class="wow fadeInUp animated">online ders çalışmanın merkezi</h6>
            <h1 class="wow fadeInUp animated" data-wow-delay="0.3s">YENİ TASARIMIMIZ  <br>İLE KARŞINIZDAYIZ</h1>
            <a href="course-2-column.html" class="tran3s wow fadeInLeft animated hvr-rectangle-out button-one" data-wow-delay="0.499s">DERSLERE GÖZ AT</a>
            <a href="course-2-column.html" class="tran3s wow fadeInRight animated hvr-rectangle-out" data-wow-delay="0.499s">CANLI EĞİTİM</a>
          </div> <!-- /.container -->
        </div> <!-- /.camera_caption -->
      </div>
       <div data-src="images/home/slide-1.jpg">
        <div class="camera_caption">
          <div class="container">
            <h6 class="wow fadeInUp animated">online ders çalışmanın merkezi</h6>
            <h1 class="wow fadeInUp animated" data-wow-delay="0.3s">YENİ TASARIMIMIZ  <br>İLE KARŞINIZDAYIZ</h1>
            <a href="course-2-column.html" class="tran3s wow fadeInLeft animated hvr-rectangle-out button-one" data-wow-delay="0.499s">DERSLERE GÖZ AT</a>
            <a href="course-2-column.html" class="tran3s wow fadeInRight animated hvr-rectangle-out" data-wow-delay="0.499s">CANLI EĞİTİM</a>
          </div> <!-- /.container -->
        </div> <!-- /.camera_caption -->
      </div>
    </div> <!-- /#theme-main-banner -->



    <!--
    =============================================
      Short Feature
    ==============================================
    -->
    <div class="short-feature">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h5><i class="flaticon-student"></i> 20 Million Students <br>Served</h5>
          </div>
          <div class="col-sm-4">
            <h5><i class="flaticon-distance-courses"></i> Over 1000+ Courses <br>for you</h5>
          </div>
          <div class="col-sm-4">
            <h5><i class="flaticon-online-course"></i> Learn anywhere in this <br>world</h5>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.short-feature -->




    <!--
    =============================================
      Find Course Form
    ==============================================
    -->
    <div class="find-course bg-image">
      <div class="opacity color-one">
        <div class="container">
          <div class="theme-title">
            <h2>Find the Best Courses</h2>
            <p>Find your preferred course from our wide range of courses easily, with just a one search here</p>
          </div> <!-- /.theme-title -->

          <form action="#">
            <div class="row">
              <div class="col-md-3 col-xs-6">
                <div class="single-input">
                  <input type="text" placeholder="Course Name">
                </div> <!-- /.single-input -->
              </div> <!-- /.col- -->
              <div class="col-md-3 col-xs-6">
                <div class="single-input">
                  <select class="selectpicker">
                    <option>Course Cateogries</option>
                    <option>Course Demo one</option>
                    <option>Course Demo two</option>
                    <option>Course Demo three</option>
                  </select>
                </div> <!-- /.single-input -->
              </div> <!-- /.col -->
              <div class="col-md-3 col-xs-6">
                <div class="single-input">
                  <select class="selectpicker">
                    <option>Course Level</option>
                    <option>Course Level one</option>
                    <option>Course Level two</option>
                    <option>Course Level three</option>
                  </select>
                </div> <!-- /.single-input -->
              </div> <!-- /.col -->
              <div class="col-md-3 col-xs-6">
                <div class="single-input">
                  <select class="selectpicker">
                    <option>Course Instructors</option>
                    <option>Course Instructors one</option>
                    <option>Course Instructors two</option>
                    <option>Course Instructors three</option>
                  </select>
                </div> <!-- /.single-input -->
              </div> <!-- /.col -->
            </div> <!-- /.row -->
            <button class="p-bg-color hvr-rectangle-out">Search Course</button>
          </form>
        </div> <!-- /.container -->
      </div> <!-- /.opacity -->
    </div> <!-- /.find-course -->




    <!--
    =============================================
      Featured Course
    ==============================================
    -->
    <div class="featured-course">
      <div class="container">
        <div class="theme-title">
          <h2>Our Featured Courses</h2>
          <p>Choose the course you need from our wide range of courses online, start learning today from the best teachers</p>
        </div> <!-- /.theme-title -->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-course-grid">
              <div class="image"><img src="images/course/1.jpg" alt=""></div>
              <div class="text">
                <h6><a href="course-details.html" class="tran3s">Introduction to the PHP Framework with Ajax &amp; Redux</a></h6>
                <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation for intermediate  level courses.</p>
                <ul class="clearfix">
                  <li class="float-left"><img src="images/course/t1.jpg" alt="">Chris</li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 575</li>
                  <li class="float-right"><a href="#" class="tran3s free hvr-float-shadow">Free</a></li>
                </ul>
              </div> <!-- /.text -->
            </div> <!-- /.single-course-grid -->
          </div> <!-- /.col- -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-course-grid">
              <div class="image"><img src="images/course/2.jpg" alt=""></div>
              <div class="text">
                <h6><a href="course-details.html" class="tran3s">Introduction to the Laravel Language with Redux Framework</a></h6>
                <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation for intermediate  level courses.</p>
                <ul class="clearfix">
                  <li class="float-left"><img src="images/course/t2.jpg" alt="">Kate</li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 620</li>
                  <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$29</a></li>
                </ul>
              </div> <!-- /.text -->
            </div> <!-- /.single-course-grid -->
          </div> <!-- /.col- -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-course-grid tranding">
              <div class="image"><img src="images/course/3.jpg" alt=""></div>
              <div class="text">
                <h6><a href="course-details.html" class="tran3s">Essentials of Graphic Designing usingAdobe Photoshop</a></h6>
                <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation for intermediate  level courses.</p>
                <ul class="clearfix">
                  <li class="float-left"><img src="images/course/t3.jpg" alt="">Sarah</li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 1575</li>
                  <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$39</a></li>
                </ul>
              </div> <!-- /.text -->
            </div> <!-- /.single-course-grid -->
          </div> <!-- /.col- -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-course-grid">
              <div class="image"><img src="images/course/4.jpg" alt=""></div>
              <div class="text">
                <h6><a href="course-details.html" class="tran3s">Photography Masterclass: Complete guide to Photography</a></h6>
                <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation for intermediate  level courses.</p>
                <ul class="clearfix">
                  <li class="float-left"><img src="images/course/t4.jpg" alt="">David</li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 195</li>
                  <li class="float-right"><a href="#" class="tran3s hvr-float-shadow free">free</a></li>
                </ul>
              </div> <!-- /.text -->
            </div> <!-- /.single-course-grid -->
          </div> <!-- /.col- -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-course-grid tranding">
              <div class="image"><img src="images/course/5.jpg" alt=""></div>
              <div class="text">
                <h6><a href="course-details.html" class="tran3s">iOS8 App Development with Swift 1 Esential Training</a></h6>
                <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation for intermediate  level courses.</p>
                <ul class="clearfix">
                  <li class="float-left"><img src="images/course/t5.jpg" alt="">Riyad</li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 5575</li>
                  <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$19</a></li>
                </ul>
              </div> <!-- /.text -->
            </div> <!-- /.single-course-grid -->
          </div> <!-- /.col- -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-course-grid">
              <div class="image"><img src="images/course/6.jpg" alt=""></div>
              <div class="text">
                <h6><a href="course-details.html" class="tran3s">Programming for everybody: Getting started with Python</a></h6>
                <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation for intermediate  level courses.</p>
                <ul class="clearfix">
                  <li class="float-left"><img src="images/course/t6.jpg" alt="">Milon</li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 575</li>
                  <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$39</a></li>
                </ul>
              </div> <!-- /.text -->
            </div> <!-- /.single-course-grid -->
          </div> <!-- /.col- -->
        </div> <!-- /.row -->
        <a href="course-3-column.html" class="theme-button hvr-rectangle-out">ALL COURSES</a>
      </div> <!-- /.container -->
    </div> <!-- /.featured-course -->


    <!--
    =============================================
      SignUp Banner
    ==============================================
    -->
    <div class="signUp-banner">
      <div class="count-particles">
          <span class="js-count-particles">--</span>
      </div>
      <div id="particles-js"></div>
      <div class="opacity">
        <div class="container">
          <h2>Ready to take your Skills to the next Level?</h2>
          <p>Start learning the skills that you need, start your free trial today</p>
          <a href="sign-up.html" class="tran3s hvr-float-shadow">Sign Up</a>
        </div> <!-- /.container -->
      </div> <!-- /.opacity -->
    </div> <!-- /.signUp-banner -->


    <!--
    =============================================
      Pricing Plan
    ==============================================
    -->
    <div class="pricing-plan">
      <div class="container">
        <div class="theme-title">
          <h2>Choose the plan you need</h2>
          <p>Pick the plan you ned, we have a wide range of pricing option to suit your needs, get started today</p>
        </div> <!-- /.theme-title -->
        <div class="row">
          <div class="col-md-3 col-xs-6">
            <div class="single-plan-table tran4s">
              <h6>STARTER</h6>
              <strong><sup>$</sup>19<span>/ Month</span></strong>
              <ul>
                <li>Up to 10 Lessons</li>
                <li>Total of 100 hours</li>
                <li>Unlimited Support</li>
                <li>Free online access</li>
              </ul>
              <a href="#" class="tran4s hvr-float-shadow">START NOW</a>
            </div> <!-- /.single-plan-table -->
          </div> <!-- /.col- -->
          <div class="col-md-3 col-xs-6">
            <div class="single-plan-table tran4s">
              <h6>GROWTH</h6>
              <strong><sup>$</sup>29<span>/ Month</span></strong>
              <ul>
                <li>Up to 10 Lessons</li>
                <li>Total of 100 hours</li>
                <li>Unlimited Support</li>
                <li>Free online access</li>
              </ul>
              <a href="#" class="tran4s hvr-float-shadow">START NOW</a>
            </div> <!-- /.single-plan-table -->
          </div> <!-- /.col- -->
          <div class="col-md-3 col-xs-6">
            <div class="single-plan-table tran4s">
              <h6>PREMIUM</h6>
              <strong><sup>$</sup>49<span>/ Month</span></strong>
              <ul>
                <li>Up to 10 Lessons</li>
                <li>Total of 100 hours</li>
                <li>Unlimited Support</li>
                <li>Free online access</li>
              </ul>
              <a href="#" class="tran4s hvr-float-shadow">START NOW</a>
            </div> <!-- /.single-plan-table -->
          </div> <!-- /.col- -->
          <div class="col-md-3 col-xs-6">
            <div class="single-plan-table tran4s">
              <h6>ENTERPRISE</h6>
              <strong><sup>$</sup>79<span>/ Month</span></strong>
              <ul>
                <li>Up to 10 Lessons</li>
                <li>Total of 100 hours</li>
                <li>Unlimited Support</li>
                <li>Free online access</li>
              </ul>
              <a href="#" class="tran4s hvr-float-shadow">START NOW</a>
            </div> <!-- /.single-plan-table -->
          </div> <!-- /.col- -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.pricing-plan -->



    <!--
    =============================================
      Testomonial
    ==============================================
    -->
    <div class="testomonial">
      <div class="container">
        <div class="theme-title">
          <h2>Testomonial</h2>
          <p>What our valuable clients have to say about our courses, tutorials and online classes</p>
        </div> <!-- /.theme-title -->
        <div class="slider-wrapper">
          <div class="row">
            <div class="testimonial-slider">
              <div class="item">
                <div class="item-wrapper">
                  <img src="images/home/c1.jpg" alt="">
                  <h6>Riyad Lawrence</h6>
                  <span>CEO</span>
                  <p>Scholars website is a great way of learning new things, I love their courses.</p>
                </div>
              </div> <!-- /.item -->
              <div class="item">
                <div class="item-wrapper">
                  <img src="images/home/c2.jpg" alt="">
                  <h6>Milon Sayfur</h6>
                  <span>CEO</span>
                  <p>Scholars website is a great way of learning new things, I love their courses.</p>
                </div>
              </div> <!-- /.item -->
            </div> <!-- /.testimonial-slider -->
          </div> <!-- /.row -->
        </div> <!-- /.slider-wrapper -->
      </div> <!-- /.container -->
    </div> <!-- /.testomonial -->



    <!--
    =============================================
      Our Blog
    ==============================================
    -->
    <div class="our-blog">
      <div class="container">
        <div class="theme-title">
          <h2>Latest News</h2>
          <p>Want to keep up with the latest news of Scholars? Check out all the latest news of ours here</p>
        </div> <!-- /.theme-title -->

        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-post">
              <div class="image"><img src="images/blog/1.jpg" alt=""></div>
              <div class="text">
                <h6><a href="blog-details.html" class="tran3s">How one of our students empowering Entrepreneurship.</a></h6>
                <ul class="info clearfix">
                  <li class="float-left"><i class="fa fa-calendar" aria-hidden="true"></i> <a href="#">March 10, 2017</a></li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Michael</a></li>
                  <li class="float-right"><i class="fa fa-heart" aria-hidden="true"></i> <a href="#">50</a></li>
                  <li class="float-right"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="#">10</a></li>
                </ul>
                <p>When Kylia found HEC Paris’ How to Become an Entrepreneur for Social Change course on Coursera, she was working as a Communications Manager for a bank in France and struggling to find meaning in her job</p>
                <a href="blog-details.html" class="tran3s">READ MORE</a>
              </div> <!-- /.text -->
            </div> <!-- /single-post -->
          </div> <!-- /.col- -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-post">
              <div class="image"><img src="images/blog/2.jpg" alt=""></div>
              <div class="text">
                <h6><a href="blog-details.html" class="tran3s">Learner story: How I became a Data Scientist by taking the courses.</a></h6>
                <ul class="info clearfix">
                  <li class="float-left"><i class="fa fa-calendar" aria-hidden="true"></i> <a href="#">March 10, 2017</a></li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Michael</a></li>
                  <li class="float-right"><i class="fa fa-heart" aria-hidden="true"></i> <a href="#">50</a></li>
                  <li class="float-right"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="#">10</a></li>
                </ul>
                <p>When Kylia found HEC Paris’ How to Become an Entrepreneur for Social Change course on Coursera, she was working as a Communications Manager for a bank in France and struggling to find meaning in her job</p>
                <a href="blog-details.html" class="tran3s">READ MORE</a>
              </div> <!-- /.text -->
            </div> <!-- /single-post -->
          </div> <!-- /.col- -->
          <div class="col-md-4 hidden-sm col-xs-12">
            <div class="single-post">
              <div class="image"><img src="images/blog/3.jpg" alt=""></div>
              <div class="text">
                <h6><a href="blog-details.html" class="tran3s">Making the leap from data science to a great professional?</a></h6>
                <ul class="info clearfix">
                  <li class="float-left"><i class="fa fa-calendar" aria-hidden="true"></i> <a href="#">March 10, 2017</a></li>
                  <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Michael</a></li>
                  <li class="float-right"><i class="fa fa-heart" aria-hidden="true"></i> <a href="#">50</a></li>
                  <li class="float-right"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="#">10</a></li>
                </ul>
                <p>When Kylia found HEC Paris’ How to Become an Entrepreneur for Social Change course on Coursera, she was working as a Communications Manager for a bank in France and struggling to find meaning in her job</p>
                <a href="blog-details.html" class="tran3s">READ MORE</a>
              </div> <!-- /.text -->
            </div> <!-- /single-post -->
          </div> <!-- /.col- -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.our-blog -->


    <!--
    =============================================
      Instructor Banner
    ==============================================
    -->
    <div class="instructor-banner clearfix">
      <div class="main-content float-right">
        <div class="wrapper">
          <h4>Become an Instructor</h4>
          <p>Be a part of the world class institution where we make leaders. Make a difference in the world by taking the responsibility. Be different.</p>
          <a href="teachers-profile.html" class="p-bg-color hvr-float-shadow">LEARN MORE</a>
        </div> <!-- /.wrapper -->
      </div> <!-- /.main-content -->
    </div> <!-- /.instructor-banner -->


    <!--
    =============================================
      Partner Logo
    ==============================================
    -->
    <div class="partent-logo-section">
      <div class="container">
        <div id="partner-logo">
          <div class="item"><img src="images/logo/p-1.png" alt="logo"></div>
          <div class="item"><img src="images/logo/p-2.png" alt="logo"></div>
          <div class="item"><img src="images/logo/p-3.png" alt="logo"></div>
          <div class="item"><img src="images/logo/p-4.png" alt="logo"></div>
          <div class="item"><img src="images/logo/p-5.png" alt="logo"></div>
          <div class="item"><img src="images/logo/p-6.png" alt="logo"></div>
        </div>
      </div>
    </div> <!-- /.partent-logo-section -->


      @include('sifrex::layout.blog.footer')
