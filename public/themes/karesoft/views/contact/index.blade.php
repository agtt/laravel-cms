@extends('karesoft::layout.blog.main')
@section('content')
@section('meta-title',trans('contact.title'))

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif

  <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Bizimle iletişime geçmek için aşağıdaki form doldurabilirsiniz.</p>


{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label(trans('contact.name')) !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>trans('contact.name'))) !!}
</div>

<div class="form-group">
    {!! Form::label(trans('contact.email')) !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>trans('contact.email'))) !!}
</div>
<div class="form-group">
    {!! Form::label(trans('contact.subject')) !!}
    {!! Form::text('title', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>trans('contact.subject'))) !!}
</div>
<div class="form-group">
    {!! Form::label(trans('contact.message')) !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>trans('contact.message'))) !!}
</div>

<div class="form-group">
    {!! Form::submit(trans('contact.post'), 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

              
    <hr>

@endsection