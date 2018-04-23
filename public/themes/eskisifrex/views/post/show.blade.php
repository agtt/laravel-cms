  @extends('sifrex::layout.blog.fullpage')

@section('meta-title', $post->title)
@section('meta-subtitle', 'Posted by ' . link_to_route('user.show', $post->user->username, $post->user->username) . ' on ' . date('M d Y', strtotime($post->created_at)))
@if ($post->image)
    @section('meta-image', url($post->image))
@endif
@section('meta-description', str_limit(strip_tags($post->content), 140))
@section('meta-url', route('post.show', $post->slug))
@section('meta-lang', $post->lang)
@section('meta-keywords', $keywords)


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
                        {{$post->title}}
                    </span>
                </div>
                <article class="static-page">
                    <h1 id="main-title">{{$post->title}}</h1>
                    <?php /*<img src="{{ Theme::asset('sifrex::img/img-12.png') }}" alt="" class="alignleft" />*/?>
                    {!! $post->content !!}



                     <hr>
                @include('sifrex::widgets.post_bottom_scripts')

                @if ($post->allow_comments)
                    <hr>
                    @include('sifrex::widgets.disqus')
                @endif




                  @if ($post->created_at < $post->updated_at)
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <em><small>Son güncellenme :  {{ $post->updated_at->format('M d Y') }}</small></em>
                            </div>
                        </div>
                    @endif

<br>
 @foreach ($post->tags as $tag)
                                {!! link_to_route('tag.show', '#' . $tag->name, $tag->slug) !!}
                            @endforeach
            </div>
          
@stop

