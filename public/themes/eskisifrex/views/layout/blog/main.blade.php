<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', $setting->app_name)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <meta name="description" content="Website Description" />
    <meta name="keywords" content="Website Keywords" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ Theme::asset('sifrex::css/style.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ Theme::asset('sifrex::css/prettyPhoto.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" media="all" href="{{ Theme::asset('sifrex::css/stylemobile.css') }}" />
    @yield('styles')
    <!-- <link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" /> -->
    <script src="{{ Theme::asset('sifrex::js/modernizr.js') }}" type="text/javascript"></script>
    <script src="{{ Theme::asset('sifrex::js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ Theme::asset('sifrex::js/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="{{ Theme::asset('sifrex::js/jquery.flexslider.js') }}" type="text/javascript"></script>
    <script src="{{ Theme::asset('sifrex::js/jquery.prettyPhoto.js') }}" type="text/javascript"></script>
    <script src="{{ Theme::asset('sifrex::js/jquery.retina.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function (){
        $(window).scroll(function () {
            if ($(document).scrollTop() <= 40) {
                $('#header-full').removeClass('small');
                $('.tabs-blur').removeClass('no-blur');
                $('#main-header').removeClass('small');
            } else {
                $('#header-full').addClass('small');
                $('.tabs-blur').addClass('no-blur');
                $('#main-header').addClass('small');
            }
        });
        
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            default_width: 600,
            default_height: 420,
            social_tools: false
        });
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
        });
        $('a[data-rel]').each(function() {
            $(this).attr('rel', $(this).data('rel'));
        });
        $('img[data-retina]').retina({checkIfImageExists: true});
        $(".open-menu").click(function(){
            $("body").addClass("no-move");
        });
        $(".close-menu, .close-menu-big").click(function(){
            $("body").removeClass("no-move");
        });
    });
    </script>
</head>
<body class="home">
    <header id="main-header" class="clearfix">
        <div id="header-full" class="clearfix">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a href="/" id="logo"><img src="{{ $setting->logo }}" data-retina="{{ Theme::asset('sifrex::img/logo-retina.png') }}" alt="{{$setting->app_name}}" /></a>
                <aside id="header-content">
                    <form method="post" action="#" id="searchform">
                        <div>
                            <input type="text" name="search" class="input" />
                            <input type="submit" name="submitsearch" class="button" value="Search" />
                        </div>
                    </form>
                    <ul id="nav-header">
                        <li><a href="#">{{trans('default.login')}}</a></li>
                        <li><a href="#">Webmail</a></li>
                        <li><a href="#">Student</a></li>
                    </ul>
                    <h3 id="slogan">@yield('slogan','" Eğitim, yoksullar için bir sermaye,
zenginler için bir faizdir "')</h3>
                </aside>
            </div>
        </div>
        @include(''.$theme.'::layout.blog.menu')
       
    </header>
    <div id="slideshow-tabs">
        <div id="panel-tabs" class="clearfix">
            <ul class="nav-tabs-slideshow">
                <li><a href="#panel-1"><strong>Study with Fun</strong><br />
                    <span>Study Hard. Play Hard</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-2"><strong>Career Development</strong><br />
                    <span>We prepare you to wild world</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-3"><strong>Research Center</strong><br />
                    <span>Discovery &amp; Innovation</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-4"><strong>Newsroom</strong><br />
                    <span>Latest campus news update</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-5"><strong>Events</strong><br />
                    <span>Schedule of our activity</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="ui-tabs-panel" id="panel-1" style="background:url({{ Theme::asset('sifrex::img/slide-1.jpg') }}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{ Theme::asset('sifrex::img/slide-1.jpg') }}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <article>
                    <h2>Reach your Next Lavel Career</h2>
                    <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique.</p>
                    <a href="#" class="button-more-slide">Learn More</a>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-2" style="background:url({{ Theme::asset('sifrex::img/slide-2.jpg') }}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{ Theme::asset('sifrex::img/slide-2.jpg') }}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <article>
                    <ul class="nav-slider-left">
                        <li><a href="#">Student Life</a></li>
                        <li><a href="#">Accomodation</a></li>
                        <li><a href="#">Academic Calendar</a></li>
                        <li><a href="#">Alumni</a></li>
                        <li><a href="#">Blackboard</a></li>
                        <li><a href="#">Postgraduate</a></li>
                        <li><a href="#">Domestic Graduate</a></li>
                    </ul>
                    <ul class="nav-slider-right">
                        <li><a href="#">Human Resources</a></li>
                        <li><a href="#">Teaching Gateway</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">IT Services</a></li>
                        <li><a href="#">Award</a></li>
                        <li><a href="#">Student Connection</a></li>
                        <li><a href="#">Research</a></li>
                    </ul>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-3" style="background:url({{ Theme::asset('sifrex::img/slide-3.jpg') }}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{ Theme::asset('sifrex::img/slide-3.jpg') }}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <article>
                    <h2>Never Ending Innovation</h2>
                    <p>Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar felis vel arcu elementum dignissim.</p>
                    <a href="#" class="button-more-slide">Labs &amp; Library</a>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-4" style="background:url({{ Theme::asset('sifrex::img/slide-4.jpg') }}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{ Theme::asset('sifrex::img/slide-4.jpg') }}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <div class="slider-tabs flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slider-tabs-content">
                                <h3><a href="#">Alumni launch our brand new website today</a></h3>
                                <time datetime="2013-11-30">November 30, 3013</time>
                                <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique. Lorem ipsum dolor sit amet pallentesque</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <h3><a href="#">We are Opening WordPress new Faculty</a></h3>
                                <time datetime="2013-11-18">November 18, 3013</time>
                                <p>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </li>
                        <li>
                             <div class="slider-tabs-content">
                                <h3><a href="#">Alumni launch our brand new website today</a></h3>
                                 <time datetime="2013-11-18">November 18, 3013</time>
                                 <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique. Lorem ipsum dolor sit amet pallentesque</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <h3><a href="#">Alumni launch our brand new website today</a></h3>
                                <time datetime="2013-11-30">November 30, 3013</time>
                                <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique. Lorem ipsum dolor sit amet pallentesque</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-5" style="background:url({{ Theme::asset('sifrex::img/slide-5.jpg') }}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{ Theme::asset('sifrex::img/slide-5.jpg') }}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <div class="slider-tabs event flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content-container">
        <div id="content" class="clearfix">
            <?php /*<div id="banner-homepage">
                <a href="#"><img src="{{ Theme::asset('sifrex::img/img-2.jpg') }}" alt="" /></a>
            </div>*/?>
            <div id="main-content">
                <article id="intro">
                    <h1>EĞİTİM MERKEZİMİZE HOŞGELDİNİZ</h1>
                    <figure><img src="{{ Theme::asset('sifrex::img/img-3.jpg') }}" alt="Welcome to Student Fun University" /></figure>
                    <p>Morbi fringilla mauris est, ac cursus tellus tristique eget. Maecenas rhoncus lacus quis mollis euismod. Pellentesque mollis molestie sapien, eget sodales dui porta at. Aenean augue massa, facilisis ac semper vel, tristique in nulla. Suspendisse potenti.</p>
                    <a href="/hakkimizda" class="more-intro">Devamı için tıklayınız</a>
                </article>
                <div id="sidebar-homepage-left" class="sidebar-homepage">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Son Yazılar</h3>
                                <ul class="menu news-sidebar"> 
                                @foreach($blogs as $blog)         
                                    <li class="clearfix">
                                        <img src="{{ Theme::asset('sifrex::img/img-4.jpg') }}" data-retina="images/img-4-retina.jpg" alt="{{$blog->title}}" class="imgframe alignleft" />
                                        <h4><a href="#">{{$blog->title}}</a></h4>
                                        <span class="date-news">{{$blog->created_at}}</span>
                                    </li>
                                  @endforeach
                                </ul>
                                <a href="/blog" class="button-more">Devamı için tıklayınız</a>
                        </div>
                    </aside>
                </div>
                <div id="sidebar-homepage-middle" class="sidebar-homepage">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Son Videolar</h3>
                                <ul class="enu news-sidebar"> 
                                   @foreach($blogs as $video)          
                                 <li class="clearfix">
                                        <img src="{{ Theme::asset('sifrex::img/img-4.jpg') }}" data-retina="images/img-4-retina.jpg" alt="{{$blog->title}}" class="imgframe alignleft" />
                                        <h4><a href="#">{{$video->title}}</a></h4>
                                        <span class="date-news">{{$video->created_at}}</span>
                                    </li>
                                    @endforeach
                              
                                </ul>
                                <a href="/videos" class="button-more">Devamı için tıklayınız</a>
                        </div>
                    </aside>
                </div>
            </div>
            <div id="sidebar-homepage-right" class="sidebar-homepage">
                <ul id="nav-sidebar" class="clearfix">
                    <li><a href="#" class="clearfix">
                        <figure><img src="images/icon-sidebar-1.png" alt="Contact Us" /></figure>
                        <strong class="title-nav-sidebar">Contact Us Now</strong>
                        <strong>Phone:</strong> +62 384856, +62 5456789 <strong>Fax:</strong> +62 45677896
                        </a></li>
                    <li><a href="#" class="clearfix">
                        <figure><img src="images/icon-sidebar-2.png" alt="Location" /></figure>
                        <strong class="title-nav-sidebar">Location</strong>
                        Click here to get direction to our campus location by bus or train
                        </a></li>
                    <li><a href="#" class="clearfix">
                        <figure><img src="images/icon-sidebar-3.png" alt="Location" /></figure>
                        <strong class="title-nav-sidebar">Live Chat</strong>
                        Talk with our Customer Service or our student and alumni
                        </a></li>
                    <li><a href="#" class="clearfix">
                        <figure><img src="images/icon-sidebar-4.png" alt="Library and Research" /></figure>
                        <strong class="title-nav-sidebar">Library and Research</strong>
                        Talk with our Customer Service or our student and alumni
                        </a></li>
                     <li><a href="#" class="clearfix">
                        <figure><img src="images/icon-sidebar-5.png" alt="Library and Research" /></figure>
                        <strong class="title-nav-sidebar">Faculty Department</strong>
                        From Politic, Nuclear and Graphic Design, we have everything.
                        </a></li>
                </ul>
                <aside id="gw_gallery-5" class="widget-container widget_gw_gallery">
                <div class="widget-wrapper clearfix">
                    <h3 class="widget-title">Photo Gallery</h3>  
                    <script type="text/javascript">
                        jQuery(document).ready(function($){
                            $("#gw_gallery-5-slide").flexslider({
                                animation: "slide",
                                animationLoop: false,
                                pauseOnAction: true
                            });
                        });
                    </script>
                    <div id="gw_gallery-5-slide" class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slides-image">
                                    <a href="images/img-9-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-9.jpg" alt="Beauty in Green"  data-retina="images/img-9-retina.jpg" /></a>
                                </div>
                                <h4><a href="images/img-9-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Things you can bring on Library</a></h4>
                            </li>
                            <li>
                                <div class="slides-image">
                                    <a href="images/img-10-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-10.jpg" alt="Choose your future jobs correctly"  data-retina="images/img-10-retina.jpg" /></a>
                                </div>
                                <h4><a href="images/img-10-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Choose your future jobs correctly</a></h4>
                            </li>
                            <li>
                                <div class="slides-image">
                                    <a href="images/img-11-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-11.jpg" alt="Choose your future jobs correctly"  data-retina="images/img-11-retina.jpg" /></a>
                                </div>
                                <h4><a href="images/img-11-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Battle of code in the midnight to get King of Code</a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            </div>
            <article id="intro-principal" class="static-page">
                <h3 id="title-principal"><strong>Prof. Jane Applegate Phd. -</strong> Principal of School Fun</h3>
                <figure>
                    <img src="{{ Theme::asset('sifrex::img/img-12.png') }}" data-retina="images/img-12-retina.png" alt="Prof. Jane Applegate Phd." />
                </figure>
                <div id="content-principal">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ornare, ipsum quis aliquam lobortis, felis sapien rutrum risus, posuere ultrices quam nisi nec nulla. Vestibulum ipsum diam, congue in nunc et, placerat faucibus nunc. Proin consectetur mauris quis tincidunt faucibus. Suspendisse lobortis blandit aliquet. Cras a luctus orci. Aenean pretium venenatis gravida. Morbi varius erat erat, vitae sollicitudin tortor ornare tincidunt.</p>
                    <p>Morbi scelerisque magna ac elit accumsan fringilla. Vivamus enim massa, egestas quis viverra ut, adipiscing eget metus. Etiam neque orci, cursus vitae sem in, rhoncus vestibulum dolor.</p>
                    <p><a href="#" class="more-intro">- Learn More</a></p>
                </div>
            </article>
        </div>
    </div>
    <footer id="main-footer" style="background:url({{ Theme::asset('sifrex::img/img-8.jpg') }}) no-repeat 50% 0;">
        <div id="blur-top">
            <a href="#" id="link-back-top">Back to Top</a>
        </div>
        <div id="slogan-footer">
            <h4>Leading Together <span>for</span> Brighter Future</h4>
        </div>
        <div id="footer-content" class="clearfix">
            <div id="footer-container">
                <div id="sidebar-footer-left" class="sidebar-footer">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Quick Navigation</h3>
                            <ul>
                                <li><a href="#">Research, Library and Publication</a></li>
                                <li><a href="#">Alumni Center</a></li>
                                <li><a href="#">Academic Community</a></li>
                                <li><a href="#">Extra Curricullum and Student Event</a></li>
                                <li><a href="#">Newsroom, Article and Event</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div id="sidebar-footer-middle" class="sidebar-footer">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Campus Location</h3>       
                            <article class="text-widget ">
                               <iframe class="map-area" src="http://maps.google.com/?ie=UTF8&amp;ll=37.055177,-95.668945&amp;spn=11.79095,12.150879&amp;t=m&amp;z=6&amp;output=embed"></iframe><br />                                   </article>
                        </div>
                    </aside>
                </div>
                <article id="footer-address" class="clearfix">
                    <h3 id="title-footer-address"><span>Contact School Fun</span></h3>
                    <p><strong>You can contact us via our hotline phone +62 4567 88987 and the Medical Campus is +62 4567 5446</strong></p>
                    <p>Vivamus enim massa, egestas quis viverra ut, adipiscing eget metus. Etiam neque orci, cursus vitae sem in, rhoncus vestibulum dolor.</p>
                    <ul id="list-social" class="clearfix">
                        <li id="icon-facebook"><a href="#">Facebook</a></li>
                        <li id="icon-twitter"><a href="#">Twitter</a></li>
                        <li id="icon-gplus"><a href="#">Google Plus</a></li>
                        <li id="icon-linkedin"><a href="#">Linkedin</a></li>
                        <li id="icon-youtube"><a href="#">Youtube</a></li>
                        <li id="icon-flickr" class="last"><a href="#">Flickr</a></li>
                    </ul>
                </article>
            </div>
        </div>
        <div id="footer-copyright">
            <div id="footer-copyright-content" class="clearfix">
                <a href="#" id="logo-footer"><img src="images/logo-footer.png" data-retina="images/logo-footer-retina.png" alt="School Fun - University" /></a>
                <p id="text-address">P Sherman, 42 Wallaby Way, Australia</p>
                <ul id="nav-footer" class="clearfix">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <p id="text-copyright">Copyright &copy; {{ $setting->app_name }} {{ date('Y') }}</p>
            </div>
        </div>
    </footer>
</body>
</html>