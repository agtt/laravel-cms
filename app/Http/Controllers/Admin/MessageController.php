<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function getIndex()
    {
    	
    	return view('admin.message.index')->with('messages',Message::paginate(15));
     }

     public function getRead($id)
     {
     	$message = Message::find($id);
     	$message->read=1;
     	$message->save();
     	return view('admin.message.read')->with('message',$message);
     }

     public function postRead($id)
     {

     }

     public function getDelete($id)
     {
     	$message = Message::find($id);
     	$message->delete();
     	\Redirect::back()->with('message', 'Başarıyla Silindi');

     }
}
