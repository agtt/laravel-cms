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