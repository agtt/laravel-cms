
    <div class="col-md-9 col-sm-10 nav_area">
                            <nav class="main_menu">
                                <div class="navbar-collapse collapse"> 
                                    <ul class="nav navbar-nav navbar-right">
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
                        @else
                                        <li class="current_page_itemss"> {!! link_to($menu->url, $menu->name) !!}</li>
                                        @endif
                                      @endforeach

                                    </ul>                                                     
                                </div>
                            </nav>
                            <form action="" class="header_search hidden-xs">
                                <input type="text" placeholder="Search">
                                <input type="submit" value="">
                            </form>
                        </div>


<?php /*

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