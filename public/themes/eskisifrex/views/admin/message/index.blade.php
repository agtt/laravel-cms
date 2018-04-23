@extends('admin.layout')
@section('meta-title',trans('admin.messages'))
@section('content')
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{trans('admin.messages')}}
                <a href="" class="btn btn-primary">
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
                        <th>{{trans('admin.sender')}}</th>
                        <th>{{trans('admin.reply')}}</th>
                        <th>{{trans('admin.read')}}</th>
                        <th>{{trans('admin.createat')}}</th>
                        <th>{{trans('admin.delete')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>
                                <a href="/admin/message/read/{{$message->id}}">
                                    {{ str_limit($message->title, 40) }}
                                </a>
                            </td>
                            <td>{{$message->name}}</td>
                            <td>
                               {{($message->reply == 1 ? trans('admin.replytrue') : trans('admin.replyfalse'))}}
                            </td>
                            <td>
                                {{($message->read == 1 ? trans('admin.readtrue') : trans('admin.readfalse'))}}
                            </td>
                            <td>
                              {{ $message->created_at->format('Y-m-d \a\t H:i:s') }}
                            </td>
                            <td><a href="message/delete/{{$message->id}}">{{trans('admin.delete')}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       

    </div>
@stop
