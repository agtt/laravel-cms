@extends('sifrex::layout.blog.fullpage')
@section('title')
{{$title}}
@endsection
@section('content')


<!-- 
      =============================================
        Theme Inner Banner
      ============================================== 
      -->

      <div class="theme-inner-banner" style="background: url(images/home/banner-2.jpg) no-repeat center;background-size:cover;">
        <div class="opacity">
          <div class="container">
            <h3>{{$title}}</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li>/</li>
              <li>{{$title}}</li>
            </ul>
          </div> <!-- /.container -->
        </div> <!-- /.opacity -->
      </div> <!-- /.theme-inner-banner -->


      
      <!-- 
      =============================================
        Featured Course 3 Column
      ============================================== 
      -->
      <div class="feature-course-3-column">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-xs-12 float-right featured-course">
              <ul class="course-menu">
                <li><a href="" class="tran3s active">New</a></li>
                <li><a href="" class="tran3s">Trending</a></li>
                <li><a href="" class="tran3s">Popular</a></li>
                <li><a href="" class="tran3s">Best-Selling</a></li>
                <li><a href="" class="tran3s">Most Rated</a></li>
              </ul>

              <div class="row">
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid">
                    <div class="image"><img src="images/course/7.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to PHP language with Ajax &amp; Redux</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t1.jpg" alt="">Chris</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 575</li>
                        <li class="float-right"><a href="#" class="tran3s free hvr-float-shadow">Free</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid tranding">
                    <div class="image"><img src="images/course/8.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to DJango Ling with Remax options</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t2.jpg" alt="">Kate</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 620</li>
                        <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$29</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid">
                    <div class="image"><img src="images/course/9.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to DJango Ling with Remax options</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t3.jpg" alt="">Sarah</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 1575</li>
                        <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$39</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid">
                    <div class="image"><img src="images/course/7.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to PHP language with Ajax &amp; Redux</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t1.jpg" alt="">Chris</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 575</li>
                        <li class="float-right"><a href="#" class="tran3s free hvr-float-shadow">Free</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid tranding">
                    <div class="image"><img src="images/course/8.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to DJango Ling with Remax options</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t2.jpg" alt="">Kate</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 620</li>
                        <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$29</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid">
                    <div class="image"><img src="images/course/9.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to DJango Ling with Remax options</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t3.jpg" alt="">Sarah</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 1575</li>
                        <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$39</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid">
                    <div class="image"><img src="images/course/7.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to PHP language with Ajax &amp; Redux</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t1.jpg" alt="">Chris</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 575</li>
                        <li class="float-right"><a href="#" class="tran3s free hvr-float-shadow">Free</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid tranding">
                    <div class="image"><img src="images/course/8.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to DJango Ling with Remax options</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t2.jpg" alt="">Kate</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 620</li>
                        <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$29</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-sm-6">
                  <div class="single-course-grid">
                    <div class="image"><img src="images/course/9.jpg" alt=""></div>
                    <div class="text">
                      <h6><a href="course-details.html" class="tran3s">Introduction to DJango Ling with Remax options</a></h6>
                      <p>In this course, you will learn the of PHP Framework and Ajax. This course will build your foundation.</p>
                      <ul class="clearfix">
                        <li class="float-left"><img src="images/course/t3.jpg" alt="">Sarah</li>
                        <li class="float-left"><i class="fa fa-user" aria-hidden="true"></i> 1575</li>
                        <li class="float-right"><a href="#" class="tran3s hvr-float-shadow">$39</a></li>
                      </ul>
                    </div> <!-- /.text -->
                  </div> <!-- /.single-course-grid -->
                </div> <!-- /.col- -->
              </div> <!-- /.row -->

              <ul class="course-pagination">
                <li><a href="" class="tran3s active">1</a></li>
                <li><a href="" class="tran3s">2</a></li>
                <li><a href="" class="tran3s">3</a></li>
                <li><a href="" class="tran3s">Next</a></li>
              </ul>
            </div> <!-- /.featured-course -->

            <div class="col-md-3 col-sm-6 col-xs-12 course-sidebar">
              <form action="#" class="course-sidebar-search">
                <input type="text" placeholder="Search Course...">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>

              <div class="course-sidebar-list">
                <h6>Topics</h6>
                <ul>
                  <li><a href="" class="tran3s">Web Design</a></li>
                  <li><a href="" class="tran3s">Web Development</a></li>
                  <li><a href="" class="tran3s">Data Science</a></li>
                  <li><a href="" class="tran3s">Mathematics & Stats</a></li>
                  <li><a href="" class="tran3s">Robotics</a></li>
                  <li><a href="" class="tran3s">Digital Marketing</a></li>
                  <li><a href="" class="tran3s">Android Basics</a></li>
                  <li><a href="" class="tran3s">Machine Learning</a></li>
                  <li><a href="" class="tran3s">Artificial Intelligence</a></li>
                </ul>
              </div>
              <div class="course-sidebar-list">
                <h6>Software</h6>
                <ul>
                  <li><a href="" class="tran3s">Photoshop</a></li>
                  <li><a href="" class="tran3s">Illustrator</a></li>
                  <li><a href="" class="tran3s">HTML</a></li>
                  <li><a href="" class="tran3s">CSS</a></li>
                  <li><a href="" class="tran3s">Java Script</a></li>
                  <li><a href="" class="tran3s">DJango</a></li>
                  <li><a href="" class="tran3s">Apple</a></li>
                  <li><a href="" class="tran3s">Microsoft</a></li>
                  <li><a href="" class="tran3s">Ubuntu</a></li>
                </ul>
              </div>
              <div class="course-sidebar-list">
                <h6>Level</h6>
                <ul>
                  <li><a href="" class="tran3s">Beginner</a></li>
                  <li><a href="" class="tran3s">Intermediate</a></li>
                  <li><a href="" class="tran3s">Advanced</a></li>
                  <li><a href="" class="tran3s">Expert</a></li>
                </ul>
              </div>
            </div> <!-- /.course-sidebar -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->
      </div> <!-- /.feature-course-3-column -->






      

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



<?php /*
      <!-- Modal -->
<div id="myModal{{$sub->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$sub->title}}</h4>
      </div>
      <div class="modal-body">
        <p>{!!$sub->content!!}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>*/?>  @if(count($subjects)> 0)

        <div class="container" style="margin-top:10px">
<div id="menu">
<div class="panel list-group">

 @foreach($subjects as $key => $sub)
 <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sm{{$key}}" data-parent="#menu">
 <b>Ünite :{{$sub['sort']}}</b> {{$sub['title']}} 
 <span class="label label-info">@if(array_key_exists("subtitle",$sub)) {{count($sub['subtitle'])}} @endif Konu</span> 
 <span class="pull-right">
 <i class="fa fa-book"></i> <i class="glyphicon glyphicon-play-circle"></i> <i class="glyphicon glyphicon-pencil"></i> </span></a>


  <div id="sm{{$key}}" class="sublinks collapse">
            @if(array_key_exists("subtitle",$sub))
              <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>{{$sub['title']}}</a>
            @foreach($sub['subtitle'] as $k => $sb)
               <a class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> {{$sb}}</a>
                @endforeach
                 @endif
 </div>
@endforeach
</div>
</div>

    
</div>







     
        <?php /*

  <table class="table table-hover ">
    <thead>
      <tr>
        <th>Ders Başlıkları</th>
        <th>Toplam Konu</th>
        <th>Başla</th>
        <th>Test Çöz</th>
      </tr>
    </thead>
    <tbody><?php //echo "<pre>"; echo print_r($subjects); echo "</pre>";?>
     @foreach($subjects as $key => $sub)
         <tr>
        <td><a data-toggle="collapse" data-target="#sm{{$key}}"  href="#oku"><b>Ünite :{{$sub['sort']}}</b> {{$sub['title']}}</a>
         <div id="sm{{$key}}" class="sublinks collapse">
         <b>Konular</b>
            <ol>
            @if(array_key_exists("subtitle",$sub))
            <li>{{$sub['title']}}</li>
            @foreach($sub['subtitle'] as $k => $sb)
                <li>{{$sb}}</li>
                @endforeach
                 @endif
            </ol>
 </div>
        </td>
        <td>@if(array_key_exists("subtitle",$sub)) {{count($sub['subtitle'])}} @endif</td>       
        <td><a href="{{$sub['slug']}}"><i class="fa fa-book" aria-hidden="true"></i></a></td>
        <td>Yakında</td>      
      </tr>

      @endforeach
   
    </tbody>
  </table>
*/?>
@endif

     <section class="our_courses_area section-padding course-page">
            <div class="container">
                <div class="row all_our_courses">

                @foreach($categories as $cat)
                    <div class="col-md-4 col-sm-6">
                        <div class="single_our_course">
                            <div class="sing_course_thumb">
                                <img src="{{ Theme::asset('sifrex::img/single_course_thumb_1.png') }}" alt="">
                            </div>
                            <div class="sing_course_txt">
                                <img src="{{ Theme::asset('sifrex::img/icon_course_1.png')}}" alt="" class="course_icon">
                                <h2>{{$cat->name}}</h2>
                                <p>Till the one day when the lady met this fellow and they knew it was much more than &nbsp;{{$cat->description}}</p>
                                <a href="/{{$cat->slug}}">Hemen Başla <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                   @endforeach
               
                </div>
                <div class="row">
                    <div class="view_all_course">
                        <a href="#" class="rm_btn">Tüm eğitimleri görüntüle</a>
                    </div>
                </div>
      
            </div>
        </section>



@if(count($subjects) > 0)
   
@endif









@stop