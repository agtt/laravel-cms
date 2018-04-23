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

        <section class="breadcrumb_area">
            <div class="breadcrumb_top">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_title section-padding">
                            <h2>{{$post->title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb_bottom">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_nav">
                            <div class="col-sm-5">
                                <h2>{{$post->title}}</h2>
                            </div>
                            <div class="col-sm-7">
                                <ul>
                                    <li><a href="/">Anasayfa</a></li>
                                    <li>{{$post->title}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="single_post_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single_blog_post_box">
                            <div class="blog_post_photo">
                                <img src="img/latest_news_post_1.jpg" alt="">
                                <div class="blog_post_date_caption">
                                    <span>08 Apr</span>
                                </div>
                            </div>
                            <div class="blog_post_txt">
                                <div class="blog_post_heading">
                                    <h2><a href="single-post.html">{{$post->title}}</a></h2>
                                    <p>Posted By : Admin</p>
                                </div>
                                <div class="blog_post_content">
                                    <p>   {!! $post->content !!}
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
            

                                    </p>
                                </div>
                                <div class="blog_post_footer">
                                    <ul>
                                        <li><i class="pe-7s-comment"></i>11 Comments</li>
                                        <li><i class="pe-7s-like"></i>13 Likes</li>
                                        <li><i class="pe-7s-look"></i>19 Viewers</li>
                                        <li class="blog_post_footer_right_item"><i class="pe-7s-ticket"></i>University, courses, college</li>
                                    </ul>
                                </div>


                



                            </div>
                        </div>
                        
                        <div class="single_post_author_area">
                            <div class="col-md-3">
                                <div class="author_photo">
                                    <img src="img/author_photo.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 fix_p_l">
                                <div class="author_details">
                                    <h2>Faf Maxwell</h2>
                                    <p>He's a demon on wheels. Here's the story of a man named Brady who was busy with three boys of his own. Texas tea. Maybe you and me were never meant to be. But baby think of me once in awhile. I'm at WKRP in Cincinnati.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_post_comment_area">
                            <h2>3 Comments</h2>
                            <ul class="coments">
                                <li>
                                    <div class="col-md-2 fix_p">
                                        <div class="com_author_photo">
                                            <img src="img/comment_photo_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="comment_details">
                                            <h3>Martin Guptil</h3>
                                            <h4>April 10, 2015</h4>
                                            <p>So lets make the most of this beautiful day. Since we're together. It's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet</p>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="col-md-2 fix_p">
                                                <div class="com_author_photo">
                                                    <img src="img/comment_photo_2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="comment_details">
                                                    <h3>Merina pois</h3>
                                                    <h4>April 9, 2015</h4>
                                                    <p>Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</p>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="col-md-2 fix_p">
                                        <div class="com_author_photo">
                                            <img src="img/comment_photo_3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="comment_details">
                                            <h3>David Anderson</h3>
                                            <h4>April 9, 2015</h4>
                                            <p>We finally got a piece of the pie. Then one day he was shootin' at some food and up through the ground came a bubblin' crude.</p>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="comment_form">
                                <h2>Leave A Comment</h2>
                                <form action="http://premiumlayers.com/demos/educampus/single-post.html">
                                    <div class="row">
                                        <div class="col-md-6 fix_p_r">
                                            <input type="text" placeholder="Your Name *" >
                                        </div>
                                        <div class="col-md-6 fix_p_r">
                                            <input type="text" placeholder="Your E-Mail *" >
                                        </div>
                                        <div class="col-md-6 fix_p_r">
                                            <input type="text" placeholder="Phone" >
                                        </div>
                                        <div class="col-md-6 fix_p_r">
                                            <input type="text" placeholder="Subject" >
                                        </div>
                                        <div class="col-md-12 fix_p_r">
                                            <textarea name="" cols="30" rows="10" placeholder="Message"></textarea>
                                            <input type="submit" value="Post Comment">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-7">
                        <aside>
                            <div class="right_sidebar">
                                <div class="all_right_widgets">
                                    <div class="sing_right_widget">
                                        <div class="sing_right_widg_content">
                                            <form action="#">
                                                <input type="text" placeholder="Search">
                                                <input type="submit" value="">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="sing_right_widget">
                                        <h2>Latest News</h2>
                                        <div class="sing_right_widg_content">
                                            <ul class="lat_news_right">
                                                <li>
                                                    <img src="img/right_lat_news_1.jpg" alt="">
                                                    <div class="lat_news_right_con">
                                                        <h3><a href="single-post.html">Mister we could use a man like Herbert</a></h3>
                                                        <h4>April 19, 2015</h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="img/right_lat_news_2.jpg" alt="">
                                                    <div class="lat_news_right_con">
                                                        <h3><a href="single-post.html">e know Flipper lives in a world full of wonder</a></h3>
                                                        <h4>April 12, 2015</h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="img/right_lat_news_3.jpg" alt="">
                                                    <div class="lat_news_right_con">
                                                        <h3><a href="single-post.html">very best to make the others comfortable</a></h3>
                                                        <h4>April 12, 2015</h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sing_right_widget">
                                        <h2>Upcoming Events</h2>
                                        <div class="sing_right_widg_content">
                                            <div class="upcoming_events_right fix_m_r">
                                                <div class="col-sm-4 col-xs-6 fix_p_l">
                                                    <img src="img/right_upcoming_event_1.jpg" alt="">
                                                </div>
                                                <div class="col-sm-4 col-xs-6 fix_p_l">
                                                    <img src="img/right_upcoming_event_2.jpg" alt="">
                                                </div>
                                                <div class="col-sm-4 col-xs-6 fix_p_l">
                                                    <img src="img/right_upcoming_event_3.jpg" alt="">
                                                </div>
                                                <div class="col-sm-4 col-xs-6 fix_p_l">
                                                    <img src="img/right_upcoming_event_4.jpg" alt="">
                                                </div>
                                                <div class="col-sm-4 col-xs-6 fix_p_l">
                                                    <img src="img/right_upcoming_event_5.jpg" alt="">
                                                </div>
                                                <div class="col-sm-4 col-xs-6 fix_p_l">
                                                    <img src="img/right_upcoming_event_6.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sing_right_widget">
                                        <h2>Connect With Us</h2>
                                        <div class="sing_right_widg_content">
                                            <div class="social_share_logo_right fix_m_r">
                                                <div class="col-md-4 col-sm-4 fix_p_l">
                                                    <div class="single_social_share">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <span class="counter">5169</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 fix_p_l">
                                                    <div class="single_social_share">
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <span class="counter">3210</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 fix_p_l">
                                                    <div class="single_social_share">
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                        <span class="counter">2012</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sing_right_widget">
                                        <h2>Categories</h2>
                                        <div class="sing_right_widg_content">
                                            <ul class="category_right">
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Architecture  (23)</a></li>
                                                <li class="current-cat"><a href="#"><i class="fa fa-angle-right"></i>Biology  (16)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Chemistry  (09)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Computer Science  (05)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>English Lit  (15)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Psychology  (11)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sing_right_widget">
                                        <h2>Popular Tags</h2>
                                        <div class="sing_right_widg_content">
                                            <ul class="popular_tag_right">
                                                <li><a href="#">Amazing</a></li>
                                                <li><a href="#">Clean</a></li>
                                                <li><a href="#">Multipurpose</a></li>
                                                <li><a href="#">Envato</a></li>
                                                <li><a href="#">Responsiveness</a></li>
                                                <li><a href="#">IOS</a></li>
                                                <li><a href="#">Creative</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Wordpress</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

@stop