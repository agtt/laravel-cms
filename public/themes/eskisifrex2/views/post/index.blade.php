@extends('sifrex::layout.blog.fullpage')
@section('title')
{{$title}}
@endsection
@section('content')
   <section class="breadcrumb_area">
            <div class="breadcrumb_top">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_title section-padding">
                            <h2>{{$title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb_bottom">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_nav">
                            <div class="col-sm-5">
                                <h2>{{$title}}</h2>
                            </div>
                            <div class="col-sm-7">
                                <ul>
                                    <li><a href="/">Anasayfa</a></li>
                                    <li>{{$title}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        



<section class="latest_blog_post_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="all_latest_blog_post">

                    @foreach ($posts as $post)
                        <div class="col-md-4 col-sm-6">
                            <div class="single_blog_post_box">
                                <div class="blog_post_photo">
                                    <img src="{{ Theme::asset('sifrex::img/latest_blog_post_6.jpg') }}" alt="">
                                    <div class="blog_post_date_caption">
                                        <span>{{ date('d M', strtotime($post->created_at)) }}</span>
                                    </div>
                                </div>
                                <div class="blog_post_txt">
                                    <div class="blog_post_heading">
                                        <h2><a href="/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                        <p>Posted By : {!! link_to_route('user.show', $post->user->username, $post->user->username) !!}</p>
                                    </div>
                                    <div class="blog_post_content">
                                        <p>{{ str_limit(strip_tags($post->content), 250) }} </p>
                                       <?php /* <ul>
                                            <li><i class="pe-7s-comment"></i>7 Comments</li>
                                            <li><i class="pe-7s-like"></i>10 Likes</li>
                                        </ul>*/?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                      

                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-12 text-center">
                        {!! $posts->render() !!}
                    </div>
                </div>
            </div>
        </section>


        <?php /*

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
            */?>


@stop