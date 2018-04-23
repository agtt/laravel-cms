  @extends('sifrex::layout.blog.fullpage')
@section('title',$post->title)
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


    <div class="theme-inner-banner" style="background: url(images/home/banner-5.jpg) no-repeat center;background-size:cover;">
                <div class="opacity">
                    <div class="container">
                        <h3>{{$post->title}}</h3>
                        <ul>
                            <li><a href="/">Anasayfa</a></li>
                            <li>/</li>
                            <li>{{$post->title}}</li>
                        </ul>
                    </div> <!-- /.container -->
                </div> <!-- /.opacity -->
            </div> <!-- /.theme-inner-banner -->


            <!-- 
            =============================================
                Blog Details
            ============================================== 
            -->
            <div class="theme-details-page blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12 theme-large-sidebar">
                            <div class="title">
                                <span>{{ $post->created_at->format('M d Y') }}</span>
                                <h4>{{$post->title}}</h4>
                                <ul>
                                    <li>by şifrex</li>
                                    <li>|</li>
                                    <li>Business</li>
                                </ul>
                            </div> <!-- /.title -->
                            {!! $post->content !!}
                         
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

                     @foreach ($post->tags as $tag)
                                {!! link_to_route('tag.show', '#' . $tag->name, $tag->slug) !!}
                            @endforeach

                            <div class="share-option clearfix">
                                <ul class="float-left clearfix">
                                    <li><a href="" class="tran3s">Planning</a></li>
                                    <li><a href="" class="tran3s">Strategy</a></li>
                                    <li><a href="" class="tran3s">Market</a></li>
                                </ul>
                                <ul class="float-right">
                                    <li>SHARE</li>
                                    <li><a href="" class="tran3s"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                    <li><a href="" class="tran3s"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                    <li><a href="" class="tran3s"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                    <li><a href="" class="tran3s"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> <!-- /.share-option -->

                            <div class="author-text clearfix">
                                <img src="images/blog/11.jpg" alt="" class="float-left">
                                <div class="text float-left">
                                    <span>YAZAR</span>
                                    <h5>Şifrex</h5>
                                    <p>Kurucu </p>
                                </div>
                            </div> <!-- /.author-text -->

                            <div class="comment-section">
                                <h5>2 Comments</h5>

                                <div class="single-comment clearfix">
                                    <img src="images/blog/12.jpg" alt="" class="float-left">
                                    <div class="comment float-left">
                                        <h6>Victor Rudloff</h6>
                                        <span>February 20, 2017 at 11 AM</span>
                                        <p>This week’s economic data include U.S. personal income and spending. India and Australia will report on fourth-quarter GDP. </p>
                                        <button class="tran3s">Reply</button>
                                    </div> <!-- /.comment -->
                                </div> <!-- /.single-comment -->
                                <div class="single-comment clearfix reply-comment">
                                    <img src="images/blog/13.jpg" alt="" class="float-left">
                                    <div class="comment float-left">
                                        <h6>Victor Rudloff</h6>
                                        <span>February 20, 2017 at 11 AM</span>
                                        <p>This week’s economic data include U.S. personal income and spending.India and Australia. </p>
                                        <button class="tran3s">Reply</button>
                                    </div> <!-- /.comment -->
                                </div> <!-- /.single-comment -->
                                <div class="single-comment clearfix">
                                    <img src="images/blog/14.jpg" alt="" class="float-left">
                                    <div class="comment float-left">
                                        <h6>Victor Rudloff</h6>
                                        <span>February 20, 2017 at 11 AM</span>
                                        <p>This week’s economic data include U.S. personal income and spending. India and Australia will report on fourth-quarter GDP. </p>
                                        <button class="tran3s">Reply</button>
                                    </div> <!-- /.comment -->
                                </div> <!-- /.single-comment -->
                            </div> <!-- /.comment-section -->

                            <div class="leave-reply-area">
                                <h5>Leave a Reply</h5>
                                <p>Your email address will not be published. Required Fields  *</p>

                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" placeholder="ADINIZ *">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="email" placeholder="EMAİL ADRESİNİZ *">
                                        </div>
                                    </div>
                                    <textarea placeholder="YORUMUNUZ"></textarea>
                                    <button class="tran3s hvr-float-shadow">Yorum Gönder</button>
                                </form>
                            </div> <!-- /.leave-reply-area -->
                        </div> <!-- /.theme-large-sidebar -->

                        <div class="col-md-3 col-sm-6 col-xs-12 theme-sidebar">
                            <form action="#" class="sidebar-search">
                                <input type="text" placeholder="Arama...">
                                <button class="s-color-bg tran3s"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                            <div class="sidebar-recent-post">
                                <h5>Yeni Yazılar</h5>
                                <ul>
                                    <li class="clearfix">
                                        <img src="images/blog/7.jpg" alt="" class="float-left">
                                        <div class="post float-left">
                                            <a href="#" class="tran3s">How to Increase Your Values</a>
                                            <span>February 27, 2017</span>
                                        </div> <!-- /.post -->
                                    </li>
                                    <li class="clearfix">
                                        <img src="images/blog/8.jpg" alt="" class="float-left">
                                        <div class="post float-left">
                                            <a href="#" class="tran3s">How to Increase Your Values</a>
                                            <span>February 27, 2017</span>
                                        </div> <!-- /.post -->
                                    </li>
                                    <li class="clearfix">
                                        <img src="images/blog/9.jpg" alt="" class="float-left">
                                        <div class="post float-left">
                                            <a href="#" class="tran3s">How to Increase Your Values</a>
                                            <span>February 27, 2017</span>
                                        </div> <!-- /.post -->
                                    </li>
                                </ul>
                            </div> <!-- /.sidebar-recent-post -->
                            <div class="sidebar-categories">
                                <h5>Categories</h5>
                                <ul>
                                    <li><a href="" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Planning</a></li>
                                    <li><a href="" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Research</a></li>
                                    <li><a href="" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Taxation</a></li>
                                    <li><a href="" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Stock</a></li>
                                    <li><a href="" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Investment</a></li>
                                </ul>
                            </div> <!-- /.sidebar-categories -->

                            <!--
                            <div class="sidebar-archive">
                                <h5>Archive</h5>
                                <select class="selectpicker" name="category">
                                    <option>Select Month</option>
                                    <option>January</option>
                                    <option>February </option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>--> <!-- /.sidebar-archive -->
                           <!-- <div class="sidebar-tags">
                                <h5>Tags</h5>
                                <ul class="clearfix">
                                    <li><a href="" class="tran3s">Planning</a></li>
                                    <li><a href="" class="tran3s">Strategy</a></li>
                                    <li><a href="" class="tran3s">Market</a></li>
                                    <li><a href="" class="tran3s">Planning</a></li>
                                    <li><a href="" class="tran3s">Research</a></li>
                                    <li><a href="" class="tran3s">Planning</a></li>
                                    <li><a href="" class="tran3s">Strategy</a></li>
                                    <li><a href="" class="tran3s">Market</a></li>
                                </ul>
                            </div>--> <!-- /.sidebar-tags -->
                        </div> <!-- /.theme-sidebar -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.theme-details-page -->


@stop