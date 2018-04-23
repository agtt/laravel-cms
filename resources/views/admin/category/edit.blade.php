@extends('admin.layout')

@section('meta-title', 'Edit Category')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Edit Category
            </h1>
        </div>
    </div>

    {!! Form::model($category, ['route' => ['admin.category.update', $category->id] ,'method' => 'put', 'files' => true]) !!}
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    {!! Form::text('name', null, ['placeholder' => 'Title of the post', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('description', null, ['class' => 'wysiwyg']) !!}
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
                            {{ $category->updated_at->format('d M Y \a\t H:i:s') }}
                     
                        </div>
                            <div class="form-group">
                            {!! Form::label('parent_id', 'Üst Kategori') !!}
                         <select class="form-control" id="parent_id" name="parent_id">
                         <option value=""> - Yok - </option>
                          @foreach($categories as $cat)
                          <option {{($cat->id == $category->parent_id ? 'selected' : '')}} value="{{$cat->id}}">{{$cat->name}}</option>
                          @endforeach
                          </select>
                        </div>
       
                   
                        <div class="form-group">
                            {!! Form::label('status', 'Status') !!}
                            {!! Form::select('status', config('post_status'), null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('lang', 'Language') !!}
                            {!! Form::select('lang', config('languages'), null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('created_at', 'Date of Creation') !!}
                            {!! Form::text('created_at', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="panel-footer clearfix">
                        <a href="{{ route('admin.category.delete', $category->id) }}" class="text-danger confirm-delete btn btn-link">
                            Delete Category
                        </a>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </div>
              
            </div>
        </div>
    {!! Form::close() !!}
@stop

