 @extends('admin.layout')
 @section('meta-title',trans('admin.messages'))
 @section('content')
 Gönderen : {{$message->name}}
 <br>
 Konu : {{$message->title}} <br>
 Mesaj : {{$message->message}}
 @endsection

