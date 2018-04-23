  @extends('sifrex::layout.blog.fullpage')
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
 <h2>Bizimle iletişime geçmek için aşağıdaki form doldurabilirsiniz.</h2>
           
{!! Form::open(array('route' => 'contact_store', 'id' =>'form-contact')) !!}

<div >
    {!! Form::label(trans('contact.name')) !!}
    {!! Form::text('name', null, 
        array('required', 
               'class'=>'input',
              'placeholder'=>trans('contact.name'))) !!}

    {!! Form::label(trans('contact.email')) !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'input', 
              'placeholder'=>trans('contact.email'))) !!}

    {!! Form::label(trans('contact.subject')) !!}
    {!! Form::text('title', null, 
        array('required', 
              'class'=>'input', 
              'placeholder'=>trans('contact.subject'))) !!}

    {!! Form::label(trans('contact.message')) !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'input', 
              'placeholder'=>trans('contact.message'))) !!}

    {!! Form::submit(trans('contact.post'), 
      array('class'=>'button')) !!}
</div>
{!! Form::close() !!}

              
    <hr>

@endsection