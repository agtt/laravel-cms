@extends('admin.layout')

@section('meta-title', 'Yeni Video Ekle')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{trans('admin.addvideo')}}
            </h1>
        </div>
    </div>
    {!! Form::open(['route' => 'admin.video.store', 'files' => true]) !!}
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Video Başlık']) !!}
                </div>
                 <div class="form-group">
                    {!! Form::text('meta_title', null, ['class' => 'form-control', 'placeholder' => 'Meta Başlık']) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('content', null, ['class' => 'wysiwyg']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Meta Açıklama']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tags', trans('admin.tags')) !!}
                    <input type="text" name="tags" id="tags" class="form-control" placeholder="{{trans('admin.addtag')}}">
                </div>
            </div>
            <div class="col-lg-3">

           <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{trans('admin.categories')}}
                        </h3>
                    </div>
                       <div class="panel-body">
                  @foreach ($categories as $category)
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('category_id[]', $category->id) !!} {{ $category->name }}
                                </label>
                                @foreach($category->subCategory as $sub)
                               <br><label style="margin-left:15px;"> {!! Form::checkbox('category_id[]', $sub->id) !!} {{ $sub->name }}</label>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{trans('admin.status')}}
                        </h3>
                    </div>
                    <div class="panel-body">
                         <div class="form-group">
                            {!! Form::label('videoid', 'Video ID') !!}
                            {!! Form::text('videoid', null, ['class' => 'form-control']) !!}
                        </div>
                         <div class="form-group">
                            {!! Form::label('videhost', 'Video Hosted') !!}
                            {!! Form::select('hosted', config('video_hosted'),null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('allow_comments', true, true) !!} {{trans('admin.allowcomments')}}
                            </label>
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', trans('admin.status')) !!}
                            {!! Form::select('status', config('post_status'), null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('lang', trans('admin.language')) !!}
                            {!! Form::select('lang', config('languages'), null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        {!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                
                <div class="panel panel-info">
                    <div class="panel-heading">
                        {{trans('admin.mainimage')}}
                    </div>
                    <div class="panel-body">
                        {!! Form::label('image', trans('admin.selectimage')) !!}
                        <div class="fileUpload">
                            {!! Form::file('image', ['class' => 'upload', 'id' => 'image_file_upload']) !!}
                            <img src="/img/image-placeholder.png" alt="">
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
                data: {!!$tags!!},
                @if (count(old('tags')))
                    value: [
                        @foreach (old('tags') as $tag)
                            '{{$tag}}',
                        @endforeach
                    ]
                @endif
            });
        });
    </script>
@stop
