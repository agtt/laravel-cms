  @extends('sifrex::layout.blog.fullpage')
  @section('title', $page->title)
@section('meta-subtitle', 'Posted by ' . link_to_route('user.show', $page->user->username, $page->user->username) . ' on ' . date('M d Y', strtotime($page->created_at)))
@section('meta-image', url($page->image))
@section('meta-description', str_limit(strip_tags($page->content), 140))
@section('meta-url', route('page.show', $page->slug))
@section('meta-lang', $page->lang)
@section('content')
     <div id="full-width">
                <div id="breadcrumbs" class="clearfix">
                    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.html" itemprop="url" class="icon-home">
                            <span itemprop="title">Anasayfa</span>
                        </a> <span class="arrow">&gt;</span>
                    </div>  
                    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="#" itemprop="url">
                            <span itemprop="title">Sayfalar</span>
                        </a> <span class="arrow">&gt;</span>
                    </div>  
                    
                    <span class="last-breadcrumbs">
                        {{$page->title}}
                    </span>
                </div>
                <article class="static-page">
                    <h1 id="main-title">{{$page->title}}</h1>
                    <?php /*<img src="{{ Theme::asset('sifrex::img/img-12.png') }}" alt="" class="alignleft" />*/?>
                    {!! $page->content !!}
            </div>
          
      
        @stop