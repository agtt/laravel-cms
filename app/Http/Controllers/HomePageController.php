<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Theme;
// Load Model
use App\Models\Post;

class HomePageController extends Controller
{
    //
    public function index()
    {
	
    	return Theme::view('layout.blog.main')
        ->with('blogs',Post::whereType('post')->take(5)->orderBy('id','desc')->get())
        ->with('videos',Post::whereType('video')->take(5)->orderBy('id','desc')->get())
        ->with('lessons',Post::whereType('lesson')->take(5)->orderBy('id','desc')->get())
        ->with('slides','')
        ->with('banner','')
        ->with('gallery','');


    }
}
