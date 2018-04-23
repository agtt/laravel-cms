<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', $setting->app_name)</title>
        @yield('styles')

        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href="{{ Theme::asset('sifrex::fonts/Lato-Medium.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ Theme::asset('sifrex::fonts/Lato-Heavy.css') }}" rel='stylesheet' type='text/css'>

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="{{ Theme::asset('sifrex::css/bootstrap.min.css') }}">

        <!-- Font awesome css -->
        <link rel="stylesheet" href="{{ Theme::asset('sifrex::css/font-awesome.min.css') }}">

        <!-- Stroke Font Icon css -->
        <link rel="stylesheet" href="{{ Theme::asset('sifrex::css/pe-icon-7-stroke.css') }}">

        <!-- Animate css -->
        <link rel="stylesheet" href="{{ Theme::asset('sifrex::css/animate.css') }}">

        <!-- Owl carousel 2 css -->
        <link rel="stylesheet" href="{{ Theme::asset('sifrex::css/owl.carousel.css') }}">

        <!-- Custom css -->
        <link rel="stylesheet" href="{{ Theme::asset('sifrex::style.css') }}">
        <link rel="stylesheet" href="{{ Theme::asset('sifrex::css/responsive.css') }}">

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.html">
        <link rel="shortcut icon" type="image/png" href="img/fav-icon.html"/>  

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- This Template Is Fully Coded By Linkon Miyan from rexord.com -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div id="preloader">
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        </div>
        
        

        <header class="header_area">
            <div class="container">
                <div class="header_content">
                    <div class="row">
                        <div class="col-md-3 col-sm-2">
                            <div class="logo">
                                <a href="/"><img src="{{ Theme::asset('sifrex::img') }}/icon_cap.png" alt="">Sifrex<span>.com</span></a>
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                             
                            </div>
                        </div>                                    
                  @include('sifrex::layout.blog.menu')
                    </div>
                </div>
            </div>
        </header>

      
      <?php /*  

      <section class="key_to_success_area">
            <div class="container">
                <div class="row">
                    <div class="key_to_success">
                        <div class="col-md-7">
                            <div class="key2seccess_txt">
                                <h2>Eğitimde lider marka</h2>
                                <p>Eğitim, yoksullar için bir sermaye,
zenginler için bir faizdir</p>
                                <a href="#" class="rm_btn">Hemen Başla</a>
                                <a href="#" class="rm_btn">Bilgi Al</a>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-sm hidden-xs">
                            <div class="key2seccess_photo">
                                <img src="{{ Theme::asset('sifrex::img') }}/header_bottom_photo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        */?>
        <section class="our_courses_area section-padding">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                        <div class="section_heading">
                            <h1>Eğitimlerimiz</h1>
                            <p>Tüm eğitimlerimiz ücretsizdir ve ücretsiz kalacaktır.</p>
                        </div>
                    </div>
                </div>
                <div class="row all_our_courses">
                    <div class="col-md-4 col-sm-6">
                        <div class="single_our_course">
                            <div class="sing_course_thumb">
                                <img src="{{ Theme::asset('sifrex::img') }}/single_course_thumb_1.png" alt="">
                            </div>
                            <div class="sing_course_txt">
                                <img src="{{ Theme::asset('sifrex::img') }}/icon_course_1.png" alt="" class="course_icon">
                                <h2>Hafıza Teknikleri</h2>
                                <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                                <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single_our_course">
                            <div class="sing_course_thumb">
                                <img src="{{ Theme::asset('sifrex::img') }}/single_course_thumb_2.png" alt="">
                            </div>
                            <div class="sing_course_txt">
                                <img src="{{ Theme::asset('sifrex::img') }}/icon_course_2.png" alt="" class="course_icon">
                                <h2>Konu Anlatımları</h2>
                                <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                                <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single_our_course">
                            <div class="sing_course_thumb">
                                <img src="{{ Theme::asset('sifrex::img') }}/single_course_thumb_3.png" alt="">
                            </div>
                            <div class="sing_course_txt">
                                <img src="{{ Theme::asset('sifrex::img') }}/icon_course_3.png" alt="" class="course_icon">
                                <h2>advance mathematics</h2>
                                <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                                <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single_our_course">
                            <div class="sing_course_thumb">
                                <img src="{{ Theme::asset('sifrex::img') }}/single_course_thumb_4.png" alt="">
                            </div>
                            <div class="sing_course_txt">
                                <img src="{{ Theme::asset('sifrex::img') }}/icon_course_4.png" alt="" class="course_icon">
                                <h2>micro biology</h2>
                                <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                                <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single_our_course">
                            <div class="sing_course_thumb">
                                <img src="{{ Theme::asset('sifrex::img') }}/single_course_thumb_5.png" alt="">
                            </div>
                            <div class="sing_course_txt">
                                <img src="{{ Theme::asset('sifrex::img') }}/icon_course_5.png" alt="" class="course_icon">
                                <h2>global economic</h2>
                                <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                                <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single_our_course">
                            <div class="sing_course_thumb">
                                <img src="{{ Theme::asset('sifrex::img') }}/single_course_thumb_6.png" alt="">
                            </div>
                            <div class="sing_course_txt">
                                <img src="{{ Theme::asset('sifrex::img') }}/icon_course_6.png" alt="" class="course_icon">
                                <h2>computer science</h2>
                                <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                                <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="search_courses_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h1>Hızlı Ders Ara</h1>
                            <p>Seçimlerinizi daraltarak eğitimlerinizi hemen bulun</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="course_search">
                            <form action="http://premiumlayers.com/demos/educampus/index.html">
                                <select name="">
                                    <option value="">Eğitimler</option>
                                    <option value="">Political Science</option>
                                    <option value="">Literature</option>
                                    <option value="">Advance Mathematics</option>
                                    <option value="">Micro Biology</option>
                                    <option value="">Global Economic</option>
                                    <option value="">Computer Science</option>
                                </select>
                                <select name="">
                                    <option value="">Duration</option>
                                    <option value="">3 Yr</option>
                                    <option value="">4 Yr</option>
                                </select>
                                <select name="">
                                    <option value="">Level</option>
                                    <option value="">Bachelor's Degree</option>
                                    <option value="">Master’s Degree</option>
                                </select>
                                <select name="">
                                    <option value="">Location</option>
                                    <option value="">Texas</option>
                                    <option value="">New York</option>
                                </select>
                                <input type="text" placeholder="Kelime">
                                <input type="submit" value="Ara">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
   
        <section class="latest_courses_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h1>Yeni Eğitimlerimiz</h1>
                            <p>Son eklenen dersler/konular</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all_latest_course">
                        <div class="single_latest_courses">
                            <div class="sing_lat_course_photo">
                                <img src="{{ Theme::asset('sifrex::img') }}/latest_course_1.jpg" alt="">
                            </div>
                            <div class="sing_lat_course_txt">
                                <h3>LITERATURE</h3>
                                <h2>Social courses</h2>
                                <p>Here's the story of a lovely lady who was bringing up three very lovely girls.</p>
                                <ul>
                                    <li><i class="fa fa-calendar"></i>Course duration : <span>3 Yr</span></li>
                                    <li><i class="fa fa-graduation-cap"></i>Degree Level : <span>Master’s Degree</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_latest_courses">
                            <div class="sing_lat_course_photo">
                                <img src="{{ Theme::asset('sifrex::img') }}/latest_course_2.jpg" alt="">
                            </div>
                            <div class="sing_lat_course_txt">
                                <h3>management</h3>
                                <h2>Banking courses</h2>
                                <p>Here's the story of a lovely lady who was bringing up three very lovely girls.</p>
                                <ul>
                                    <li><i class="fa fa-calendar"></i>Course duration : <span>3 Yr</span></li>
                                    <li><i class="fa fa-graduation-cap"></i>Degree Level : <span>Master’s Degree</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_latest_courses">
                            <div class="sing_lat_course_photo">
                                <img src="{{ Theme::asset('sifrex::img') }}/latest_course_3.jpg" alt="">
                            </div>
                            <div class="sing_lat_course_txt">
                                <h3>art</h3>
                                <h2>Dance courses</h2>
                                <p>Here's the story of a lovely lady who was bringing up three very lovely girls.</p>
                                <ul>
                                    <li><i class="fa fa-calendar"></i>Course duration : <span>3 Yr</span></li>
                                    <li><i class="fa fa-graduation-cap"></i>Degree Level : <span>Master’s Degree</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
      
    
     
     @include('sifrex::layout.blog.footer')