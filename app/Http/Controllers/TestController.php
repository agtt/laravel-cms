<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Theme;

class TestController extends Controller
{
    //

    public function getIndex()
    {	
    	return Theme::view('layout.blog.main');

    }
}
