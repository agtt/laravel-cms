<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
Use App\Models\Message;
use Theme;

class ContactController extends Controller
{
    //

     public function create()
    {
        return Theme::view('contact.index');
    }

    public function store(ContactFormRequest $request)
    {
    	   \Mail::send('contact.email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('csd@hotmail.com.tr');
        $message->to('csd@hotmail.com.tr', 'Admin')->subject('Karesoft CMS Feedback');
    });
        Message::create([
            'title'=>$request->get('title'),
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'message'=>$request->get('message'),
            ]);

  return \Redirect::back()->with('message', 'Thanks for contacting us!');
    }
}
