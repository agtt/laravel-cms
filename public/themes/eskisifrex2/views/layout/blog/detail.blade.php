
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8" />
    <title>@yield('title', 'Hakk')</title>
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
        $('#tabs-content-bottom').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
        $('.slider-partners.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
            itemWidth: 163,
            itemMargin: 0
        });
        $('#slider-news.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
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
<body>
	<header id="main-header" class="clearfix">
        <div id="header-full" class="clearfix">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" alt="School Fun - WordPress Theme" /></a>
                <aside id="header-content">
                    <form method="post" action="#" id="searchform">
                        <div>
                            <input type="text" name="search" class="input" />
                            <input type="submit" name="submitsearch" class="button" value="Search" />
                        </div>
                    </form>
                    <ul id="nav-header">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Webmail</a></li>
                        <li><a href="#">Student</a></li>
                    </ul>
                    <h3 id="slogan">"Fun. Study. Research. Innovate. Play"</h3>
                </aside>
            </div>
        </div>
         @include('sifrex::layout.blog.menu')
    </header>
    <div id="content-container">
     @yield('content')
    </div>
    <footer id="main-footer" style="background:url(images/img-8.jpg) no-repeat 50% 0;">
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
                <p id="text-copyright">Copyright &copy; 2013. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>