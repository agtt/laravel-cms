@extends('sifrex::layout.blog.fullpage')
@section('title')
{{$title}}
@endsection
@section('content')
  <div id="main-content">
                <div id="breadcrumbs" class="clearfix">
                    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.html" itemprop="url" class="icon-home">
                            <span itemprop="title">Home</span>
                        </a> <span class="arrow">&gt;</span>
                    </div>  
                    <span class="last-breadcrumbs">
                        Yeni Haber
                    </span>
                </div>
        
                <div class="news-group clearfix">
                <?php $i=0;?>
                  @foreach ($posts as $post)
                    <article class="news-container static-page <?php echo ($i%2 ? 'last':'');?>">
                        <figure>
                            <img src="{{ Theme::asset('sifrex::img/img-23.jpg') }}" data-retina="images/img-23-retina.jpg" alt="" />
                        </figure>
                        <header>
                            <p><a href="#" rel="category tag">, <a href="#" rel="category tag">{!! link_to_route('user.show', $post->user->username, $post->user->username) !!} </a></p>
                            <h2 class="title-news"><a href="#">{{ $post->title }}</a></h2>
                            <time datetime="2013-11-26">{{ date('M d Y', strtotime($post->created_at)) }}</time>

                        </header>
                        <p>{{ str_limit(strip_tags($post->content), 250) }}</p>
                    </article>
                   <?php $i++;?>
                  @endforeach
                      <div class="row">
                    <div class="col-md-12 text-center">
                        {!! $posts->render() !!}
                    </div>
                </div>
                </div>
            </div>


    <div id="sidebar">
                <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
                        <h3 class="widget-title">Kategoriler</h3>
                        <ul>
                      @foreach($categories as $category)
                            <li><a href="{{$category->slug}}">{{$category->name}}</a></li>
                           
                            @endforeach
                        </ul>
                    </div>
                </aside>

          
            </div>
@stop