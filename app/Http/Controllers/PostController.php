<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Theme;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::whereStatus('published')->orderBy('created_at', 'desc')->paginate(15);
        return Theme::view('post.index')
            ->with('posts', $posts)
            ->with('title','Blog')
            ->with('categories',Category::whereType('post')->get());
    }

    public function getPostsByCategory($category)
    {
        $posts = Post::whereStatus('published')
        ->orderBy('created_at', 'desc')
        ->whereHas('categories', function ($q) use ($category) {
            $q->where('slug', '=', $category);
        })->paginate(15);
        $name = Category::where('slug',$category)->FirstOrFail();
        return Theme::view('post.index')
            ->with('posts', $posts)
            ->with('title',$name->name)
            ->with('categories',Category::whereType('post')->get());

    
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = Post::whereId($id)->first();

        $keywords = '';
        foreach ($post->tags as $tag) {
            $keywords .= $tag->name.',';
        }

        return Theme::view('post.show')
            ->with('keywords', $keywords)
            ->with('post', $post);
    }
}
