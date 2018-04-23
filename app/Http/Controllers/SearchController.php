<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Theme;

class SearchController extends Controller
{
    public function searchPosts(Request $request)
    {
        $query = $request->input('q');
        $posts = Post::search($query)->whereStatus('published')->paginate(15);

        return Theme::view('post.index')
            ->with('posts', $posts);
    }
}
