   
        <footer class="footer_area">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="newslatter">
                                <form action="http://premiumlayers.com/demos/educampus/index.html">
                                    <input type="email" placeholder="Email Adresiniz">
                                    <input type="submit" value="">
                                </form>
                                <p>Yeni ders,konu ve gelişmelerden haberdar olmak için bültenimize kayıt olunuz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="footer_widgets">
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">Hakkımızda</h2>
                                    <p>Şifrex , 2010 yılında hayata başlayan öğrencilere pratik ve ücretsiz eğitim sağlamak amacıyla kurulmuş olan bir markadır.</p>
                                    <ul class="footer_social">
                                        <li><a href="http://www.facebook.com/sifrex" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">Yeni Eklenenler</h2>
                                    <ul class="latest_post">
                                        <li>
                                            <img src="{{ Theme::asset('sifrex::img') }}/latest_post_1.jpg" alt="">
                                            <div class="latest_post_txt">
                                                <h4><a href="#">On your mark get set and go now</a></h4>
                                                <p>April 12, 2015</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{ Theme::asset('sifrex::img') }}/latest_post_2.jpg" alt="">
                                            <div class="latest_post_txt">
                                                <h4><a href="#">The ship set ground on the shore of this</a></h4>
                                                <p>April 12, 2015</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{ Theme::asset('sifrex::img') }}/latest_post_3.jpg" alt="">
                                            <div class="latest_post_txt">
                                                <h4><a href="#">This time there's no stopping us from away</a></h4>
                                                <p>April 12, 2015</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">latest tweets</h2>
                                    <ul class="latest_tweet">
                                        <li>Educamus is one of the excellent university template 
                                            <a href="#">http://educampus/universitybest/</a>
                                            <span>1 hours ago</span>
                                        </li>
                                        <li>Educamus is one of the excellent university template 
                                            <a href="#">http://educampus/universitybest/</a>
                                            <span>1 hours ago</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">İletişim</h2>
                                    <ul class="footer_contact">
                                        <li>09 Design Street,Downtown, Sydney, Australia</li>
                                        <li>+01 123 456 78</li>
                                        <li>+01 123 456 78</li>
                                        <li>info@sifrex.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <p>© 2017 Şifrex. All rights reserved</p>
                        </div>
                        <div class="col-sm-8">
                            <nav class="footer_menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery Latest version -->
        <script src="{{ Theme::asset('sifrex::js/vendor/jquery.1.11.1.js') }}"></script>
        
        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <!-- Bootstrap JS -->
        <script src="{{ Theme::asset('sifrex::js/bootstrap.min.js') }}"></script>

        <!-- jQuery Counterup and Waypoints -->
        <script src="{{ Theme::asset('sifrex::js/waypoints.min.js') }}"></script>
        <script src="{{ Theme::asset('sifrex::js/jquery.counterup.min.js') }}"></script>

        <!-- jQuery easing -->
        <script src="{{ Theme::asset('sifrex::js/jquery.easing.1.3.min.js') }}"></script>

        <!-- jQuery owl carousel -->
        <script src="{{ Theme::asset('sifrex::js/owl.carousel.min.js') }}"></script>

        <!-- WOW Animation -->
        <script src="{{ Theme::asset('sifrex::js/wow.min.js') }}"></script>
           
        <!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
            <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->        

        <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
        <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->         

        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->        

        <!-- jQuery main script -->
        <script src="{{ Theme::asset('sifrex::js/main.js') }}"></script>
    </body>


</html>