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
                        <div class="logo float-left"><a href="/"><img src="images/logo.png" alt="Logo"></a></div>

                        <!-- Curt Button -->
                        <button class="cart-button float-right">
                            <i class="flaticon-cart"></i>
                        </button>

                        <!-- Search Bar -->
                        <div class="search-option float-right">
                            <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-search"></i></button>
                            <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Search....">
                                <button class="p-bg-color"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                       </div> <!-- /.search-option -->

                         @include('sifrex::layout.blog.menu')
                        
                    </div> <!-- /.container -->
                </div>
            </header> <!-- /.theme-menu-wrapper -->


   
    <!--
    =============================================
      Content
    ==============================================
    -->
    @yield("content","")
 

      @include('sifrex::layout.blog.footer')
