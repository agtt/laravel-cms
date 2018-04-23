@extends('admin.layout')

@section('meta-title', 'Dersi Düzenle')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{trans('admin.lessonedit')}}
            </h1>
        </div>
    </div>
    {!! Form::model($lesson, ['route' => ['admin.lesson.update', $lesson->id] ,'method' => 'put', 'files' => true]) !!}
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    {!! Form::text('title', null, ['placeholder' => 'Title of the lesson', 'class' => 'form-control']) !!}
                </div>
                 <div class="form-group">
                  {!! Form::label('metatitle', 'Meta Title') !!}
                    {!! Form::text('meta_title', null, ['class' => 'form-control', 'placeholder' => 'Meta Title']) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('content', null, ['class' => 'wysiwyg']) !!}
                </div>
                 <div class="form-group">
                  {!! Form::label('metadescription', 'Meta Description') !!}
                    {!! Form::text('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Meta Description']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tags', 'Etiketler') !!}
                    <input type="text" name="tags" id="tags" class="form-control" placeholder="Etiket Ekle">
                </div>


                <div class="form-group">
                @if($lesson->parent_id == 0)
               <center><h2>Konular</h2></center>
               <ol>
                    @foreach($subjects as $su)
                    <li> <a href="../{{$su->id}}/edit">{{$su->title}}</a> </li>
                    @endforeach
                    </ol>
                @endif
                </div>
            </div>
            <div class="col-lg-3">
               <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Sınav ve Dersler
                        </h3>
                    </div>
                    <div class="panel-body">
                        @foreach ($categories as $category)
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('category_id[]', $category->id, $lesson->categories->contains($category->id)) !!} {{ $category->name }}

                                     @foreach($category->subCategory as $sub)
                               <br><label style="margin-left:10px;">{!! Form::checkbox('category_id[]', $sub->id, $lesson->categories->contains($sub->id)) !!} {{ $sub->name }}</label>
                                @endforeach
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Yayınlama
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <strong>
                                Son Güncellenme
                            </strong>
                            {{ $lesson->updated_at->format('d M Y \a\t H:i:s') }}
                            <div>
                                <a href="/{{$lesson->slug}}" class="btn btn-info btn-xs" target="_blank">
                                    Dersi Görüntüle
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('videoid', 'Video ID') !!}
                            {!! Form::text('videoid', null, ['class' => 'form-control']) !!}
                        </div>
                         <div class="form-group">
                            {!! Form::label('videhost', 'Video Sunucusu') !!}
                            {!! Form::select('hosted', config('video_hosted'),$lesson->hosted, ['class' => 'form-control']) !!}
                        </div>
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('allow_comments') !!} Yorumlara Açık
                            </label>
                        </div>
                                <div class="form-group">
                            {!! Form::label('status', trans('admin.status')) !!}
                            {!! Form::select('status', config('post_status'), null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('is_updated') !!} Güncellenmiş olarak işaretle
                            </label>
                        </div>
                        <div class="form-group">
                            {!! Form::label('created_at', 'Oluşturulma Tarihi') !!}
                            {!! Form::text('created_at', null, ['class'=>'form-control']) !!}
                        </div>
                         <div class="form-group">
                            {!! Form::label('sort', 'Sıralama') !!}
                            {!! Form::text('sort', null, ['class' => 'form-control','placeholder'=>'Konu Sıralama']) !!}
                        </div>
                    </div>
                    <div class="panel-footer clearfix">
                        <a href="{{ route('admin.lesson.delete', $lesson->id) }}" class="text-danger confirm-delete btn btn-link">
                            Dersi Sil
                        </a>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </div>
             
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Ana Görsel
                    </div>
                    <div class="panel-body">
                        {!! Form::label('image', 'Bir resim seçin') !!}
                        <div class="fileUpload">
                            {!! Form::file('image', ['class' => 'upload', 'id' => 'image_file_upload']) !!}
                            <img src="{{ ($lesson->image) ? $lesson->image : '/img/image-placeholder.png' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@stop

@section('scripts')
    <script>
        jQuery(document).ready(function($) {
            $('#tags').magicSuggest({
                cls: 'form-control',
                data: {!! $tags !!},
                @if (count(old('tags')))
                    value: [
                        @foreach (old('tags') as $tag)
                            '{{ $tag }}',
                        @endforeach
                    ]
                @else
                    value: [
                        @foreach ($lesson->tags as $tag)
                            '{{ $tag->name }}',
                        @endforeach
                    ]
                @endif
            });
        });
    </script>
@stop
