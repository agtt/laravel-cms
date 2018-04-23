@extends('admin.layout')

@section('meta-title', 'Video İzle')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{trans('admin.videoedit')}}
            </h1>
        </div>
    </div>
    {!! Form::model($video, ['route' => ['admin.video.update', $video->id] ,'method' => 'put', 'files' => true]) !!}
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    {!! Form::text('title', null, ['placeholder' => 'Title of the video', 'class' => 'form-control']) !!}
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
                    {!! Form::label('tags', 'Tags') !!}
                    <input type="text" name="tags" id="tags" class="form-control" placeholder="Add tags">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Publish
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <strong>
                                Last Modified on
                            </strong>
                            {{ $video->updated_at->format('d M Y \a\t H:i:s') }}
                            <div>
                                <a href="" class="btn btn-info btn-xs" target="_blank">
                                    View video
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('videoid', 'Video ID') !!}
                            {!! Form::text('videoid', null, ['class' => 'form-control']) !!}
                        </div>
                         <div class="form-group">
                            {!! Form::label('videhost', 'Video Hosted') !!}
                            {!! Form::select('hosted', config('video_hosted'),$video->hosted, ['class' => 'form-control']) !!}
                        </div>
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('allow_comments') !!} Allow Comments
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('is_updated') !!} Mark video as updated
                            </label>
                        </div>
                        <div class="form-group">
                            {!! Form::label('created_at', 'Date of Creation') !!}
                            {!! Form::text('created_at', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="panel-footer clearfix">
                        <a href="{{ route('admin.video.delete', $video->id) }}" class="text-danger confirm-delete btn btn-link">
                            Delete video
                        </a>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Kategoriler
                        </h3>
                    </div>
                     <div class="panel-body">
                        @foreach ($categories as $category)
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('category_id[]', $category->id, $video->categories->contains($category->id)) !!} {{ $category->name }}

                                     @foreach($category->subCategory as $sub)
                               <br><label style="margin-left:10px;">{!! Form::checkbox('category_id[]', $sub->id, $video->categories->contains($sub->id)) !!} {{ $sub->name }}</label>
                                @endforeach
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Main Image
                    </div>
                    <div class="panel-body">
                        {!! Form::label('image', 'Select an Image') !!}
                        <div class="fileUpload">
                            {!! Form::file('image', ['class' => 'upload', 'id' => 'image_file_upload']) !!}
                            <img src="{{ ($video->image) ? $video->image : '/img/image-placeholder.png' }}">
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
                        @foreach ($video->tags as $tag)
                            '{{ $tag->name }}',
                        @endforeach
                    ]
                @endif
            });
        });
    </script>
@stop
