@extends('admin.layout')

@section('meta-title', 'Yeni Sayfa Ekle')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
              Yeni Sayfa Ekle
            </h1>
        </div>
    </div>
    {!! Form::open(['route' => 'admin.page.store', 'files' => true]) !!}
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Sayfa Başlığı']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('meta_title', null, ['class' => 'form-control', 'placeholder' => 'Meta Başlık']) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('content', null, ['class' => 'wysiwyg']) !!}
                </div>
                  <div class="form-group">
                  {!! Form::label('metadescription', 'Meta Description') !!}
                    {!! Form::text('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Meta Açıklama']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Durum
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('allow_comments', true, true) !!} Yorumlara İzin Ver
                            </label>
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', 'Durum') !!}
                            {!! Form::select('status', Config::get('post_status'), null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('lang', 'Language') !!}
                            {!! Form::select('lang', config('languages'), null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Ana Resim
                    </div>
                    <div class="panel-body">
                        {!! Form::label('image', 'Bir resim seçiniz') !!}
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
