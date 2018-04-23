@extends('sifrex::layout.blog.fullpage')
@section('title')
{{$title}}
@endsection
@section('content')
        <div class="theme-inner-banner" style="background: url(images/home/banner-4.jpg) no-repeat center;background-size:cover;">
                <div class="opacity">
                    <div class="container">
                        <h3>Blog</h3>
                        <ul>
                            <li><a href="/">Anasayfa</a></li>
                            <li>/</li>
                            <li>Blog</li>
                        </ul>
                    </div> <!-- /.container -->
                </div> <!-- /.opacity -->
            </div> <!-- /.theme-inner-banner -->




            <!-- 
            =============================================
                Event Grid
            ============================================== 
            -->
            <div class="event-grid">
                <div class="container">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-md-4 col-xs-6">
                            <div class="event-single-item">
                                <div class="image"><img src="images/event/6.jpg" alt=""></div>
                               <!-- {{ Theme::asset('sifrex::img/latest_blog_post_6.jpg') }}-->
                                <div class="text">
                                    <h5><a href="{{ $post->slug }}"" class="tran3s">{{ $post->title }}</a></h5>
                                    <ul>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{ date('d M', strtotime($post->created_at)) }}</li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Silicon Valley, CA</li>
                                    </ul>
                                    <p><!--{{ str_limit(strip_tags($post->content), 100) }}--><</p>
                                </div> <!-- /.text -->
                            </div> <!-- /.event-single-item -->
                        </div> <!-- /.col -->
                        @endforeach

                    </div> <!-- /.row -->

                    {!! $posts->render() !!}
                </div> <!-- /.container -->
            </div> <!-- /.event-grid -->
            

@stop