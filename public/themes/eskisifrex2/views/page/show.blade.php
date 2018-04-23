  @extends('sifrex::layout.blog.fullpage')
  @section('title', $page->title)
@section('meta-subtitle', 'Posted by ' . link_to_route('user.show', $page->user->username, $page->user->username) . ' on ' . date('M d Y', strtotime($page->created_at)))
@section('meta-image', url($page->image))
@section('meta-description', str_limit(strip_tags($page->content), 140))
@section('meta-url', route('page.show', $page->slug))
@section('meta-lang', $page->lang)
@section('content')

            <section class="breadcrumb_area">
            <div class="breadcrumb_top">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_title section-padding">
                            <h2>{{$page->title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb_bottom">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_nav">
                            <div class="col-sm-5">
                                <h2>{{$page->title}}</h2>
                            </div>
                            <div class="col-sm-7">
                                <ul>
                                    <li><a href="/">Anasayfa</a></li>
                                    <li>{{$page->title}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        

            <div class="container">
                <div class="row">
                <div class="section-padding ">
                      {!! $page->content !!}
                      </div>
                </div>
            </div>
     
          
      
        @stop