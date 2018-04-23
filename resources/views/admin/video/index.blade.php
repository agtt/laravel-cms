@extends('admin.layout')

@section('meta-title')
{{trans('admin.videos')}}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{trans('admin.videos')}}
                <a href="{{ route('admin.video.create') }}" class="btn btn-primary">
                     {{trans('admin.addnew')}}
                </a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <table class="table table-striped table-bordered table-hover" id="TablePost">
                <thead>
                    <tr>
                        <th>{{trans('admin.title')}}</th>
                        <th>{{trans('admin.status')}}</th>
                        <th>{{trans('admin.categories')}}</th>
                        <th>{{trans('admin.createat')}}</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($videos as $video)
                        <tr>
                            <td>
                                <a href="{{ route('admin.video.edit', $video->id) }}">
                                    {{ str_limit($video->title, 40) }}
                                </a>
                            </td>
                            <td>
                                {{ $video->status }}
                            </td>
                            <td>
                              Kategori
                            </td>
                            <td>
                                 {{ $video->created_at->format('Y-m-d \a\t H:i:s') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-list fa-fw"></i>
                    {{trans('admin.categories')}}
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                      @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a href="{{ route('admin.category.edit', $category->id) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{ $category->name }} ({{ $category->posts()->count() }})
                                <span class="pull-right text-muted">
                                    <a href="{{ route('admin.category.delete', $category->id) }}" class="confirm-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </span>
                            </li>

                            @foreach($category->subCategory as $sub)
                              <li class="list-group-item" style="margin-left:30px;">
                                <a href="{{ route('admin.category.edit', $sub->id) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{ $sub->name }} ({{ $sub->posts()->count() }})
                                <span class="pull-right text-muted">
                                    <a href="{{ route('admin.category.delete', $sub->id) }}" class="confirm-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </span>
                            </li>
                            @endforeach
                        @endforeach
                    </ul>
                    {!! Form::open(['route' => 'admin.category.store']) !!}
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>trans('admin.addcategory')]) !!}
                          {!! Form::hidden('type','video') !!} 
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#TablePost').dataTable({
                "order": [[ 3, "desc" ]]
            });
        });
    </script>
@stop
