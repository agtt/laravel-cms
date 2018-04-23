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
        <title>@yield('title', "")</title>
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
 
       @yield('content')
        
           @include('sifrex::layout.blog.footer')