<!-- ============================ Theme Menu ========================= -->
<nav class="theme-main-menu float-right navbar" id="mega-menu-wrapper">
  <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
   </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="navbar-collapse-1">
    <ul class="nav">
      @foreach ($menus['left'] as $menu)
       @if ($menu->is_category_dropdown)
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  {{ $menu->name }}
  <b class="caret"></b>
</a>
<ul class="dropdown-menu">
  @foreach ($categories as $category)
      <li>
          {!! link_to_route('post.category', $category->name, str_replace("category","",$category->slug)) !!}
      </li>
  @endforeach
</ul>
</li>
@else
          <li class="current_page_itemss"> {!! link_to($menu->url, $menu->name) !!}</li>
          @endif
        @endforeach


<li> <a href=""> Online Ders</a></li>
<li><img src="{{ Theme::asset('sifrex::images/lesson.png') }}"></li>
    </ul>
   </div><!-- /.navbar-collapse -->
</nav> <!-- /.theme-main-menu -->







<?php /*


      <li class="dropdown-holder"><a href="index.html" class="tran3s">Home</a>
        <ul class="sub-menu">
          <li><a href="index.html">Home version one</a></li>
          <li><a href="index-2.html">Home version Two</a></li>
          <li><a href="index-3.html">Home video background</a></li>
        </ul>
      </li>
      <li class="dropdown-holder"><a href="#" class="tran3s">COURSES</a>
        <ul class="sub-menu">
          <li><a href="course-2-column.html">Course 2 Column</a></li>
          <li><a href="course-3-column.html">Course 3 Column</a></li>
          <li><a href="course-details.html">Course Details</a></li>
        </ul>
      </li>
      <li class="dropdown-holder"><a href="#" class="tran3s">EVENTS</a>
        <ul class="sub-menu">
          <li><a href="event-list.html">Event List</a></li>
          <li><a href="event-grid.html">Event Grid</a></li>
          <li><a href="event-single.html">Event Single</a></li>
        </ul>
      </li>
      <li class="dropdown-holder"><a href="#" class="tran3s">Pages</a>
        <ul class="sub-menu">
          <li><a href="our-teacher.html">Our teachers</a></li>
          <li><a href="teachers-profile.html">teachers profile</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="404.html">Error page</a></li>
          <li><a href="faq.html">FAQ Page</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="sign-up.html">sign up</a></li>
        </ul>
      </li>
      <li class="dropdown-holder"><a href="#" class="tran3s">PORTFOLIO</a>
        <ul class="sub-menu">
          <li><a href="portfolio-2-column.html">portfolio 2 column</a></li>
          <li><a href="portfolio-3-column.html">portfolio 3 column</a></li>
          <li><a href="portfolio-4-column.html">portfolio 4 column</a></li>
        </ul>
      </li>
      <li class="dropdown-holder"><a href="#" class="tran3s">BLOG</a>
        <ul class="sub-menu">
          <li><a href="blog.html">Blog</a></li>
          <li><a href="blog-details.html">Blog details</a></li>
        </ul>
      </li>
      <li class="dropdown-holder"><a href="#" class="tran3s">SHOP</a>
        <ul class="sub-menu">
          <li><a href="shop.html">Shop Page</a></li>
          <li><a href="shop-single.html">Shop Details</a></li>
        </ul>
      </li>
      <li><a href="contact-us.html" class="tran3s">Contact</a></li>
      

 <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Kapat</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
 @foreach ($menus['left'] as $menu)
                    @if ($menu->is_category_dropdown)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ $menu->name }}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li>
                                        {!! link_to_route('post.category', $category->name, $category->slug) !!}
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    @elseif ($menu->is_search_form)
                        {!! Form::open(['route'=>'post.search', 'class'=>'navbar-form navbar-left', 'method'=>'get']) !!}
                            <div class="input-group">
                                {!! Form::text('q', Request::get('q'), ['class'=>'form-control col-lg-8', 'placeholder'=>'Search']) !!}
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        {!! Form::close() !!}

                    @elseif ($menu->is_login_link)
                        @if (Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('logout') }}">{{ trans('default.logout')}}</a>
                                    </li>
                                    @if (Auth::user()->superuser)
                                        <li class="divider"></li>
                                        <li>
                                            {!! link_to_route('admin.home', 'Admin') !!}
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('login') }}">
                                    {{ trans('default.login')}}
                                </a>
                            </li>
                        @endif

                    @else
                        <li>
                            {!! link_to($menu->url, $menu->name) !!}
                        </li>
                    @endif
                @endforeach

           @foreach ($menus['right'] as $menu)
                    @if ($menu->is_category_dropdown)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ $menu->name }}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li>
                                        {!! link_to_route('post.category', $category->name, $category->slug) !!}
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                         @elseif ($menu->is_login_link)
                        @if (Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('logout') }}">{{trans('default.logout')}}</a>
                                    </li>
                                    @if (Auth::user()->superuser)
                                        <li class="divider"></li>
                                        <li>
                                            {!! link_to_route('admin.home', trans('default.admin')) !!}
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('login') }}">
                                    {{trans('default.login')}}
                                </a>
                            </li>
                        @endif

                    @else
                        <li>
                            {!! link_to($menu->url, $menu->name) !!}
                        </li>
                    @endif
                @endforeach



                          </ul>
                        <a href="#" id="button-registration">Soru Sor</a>

                    </div>
                </nav>*/?>
