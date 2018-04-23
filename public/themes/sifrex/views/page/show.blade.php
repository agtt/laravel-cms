  @extends('sifrex::layout.blog.fullpage')
  @section('title', $page->title)
@section('meta-subtitle', 'Posted by ' . link_to_route('user.show', $page->user->username, $page->user->username) . ' on ' . date('M d Y', strtotime($page->created_at)))
@section('meta-image', url($page->image))
@section('meta-description', str_limit(strip_tags($page->content), 140))
@section('meta-url', route('page.show', $page->slug))
@section('meta-lang', $page->lang)
@section('content')



<div class="theme-inner-banner" style="background: url(images/home/banner-1.jpg) no-repeat center;background-size:cover;">
                <div class="opacity">
                    <div class="container">
                        <h3>{{$page->title}}</h3>
                        <ul>
                            <li><a href="index.html">Anasayfa</a></li>
                            <li>/</li>
                            <li>{{$page->title}}</li>
                        </ul>
                    </div> <!-- /.container -->
                </div> <!-- /.opacity -->
            </div> <!-- /.theme-inner-banner -->


            
            <!-- 
            =============================================
                About Us Text
            ============================================== 
            -->
                <div class="container">
                    <div class="row">
                        {!! $page->content !!}
                        </div> <!-- /.about-top-text -->
                    </div> <!-- /.row -->
       
      
        @stop