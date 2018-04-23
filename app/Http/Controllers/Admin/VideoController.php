<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Slug;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories=Category::getCategories("video");
        return view('admin.video.index')
        ->with('videos',Post::whereType('video')->get())
        ->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $categories=Category::getCategories("video");
        $tags = Tag::groupBy('name')->pluck('name');

        return view('admin.video.create')
            ->with('tags', json_encode($tags))
            ->with('categories', $categories);
    }

/**
    ** Categories Admin **/
    public function categories()
    {
        return "categories";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new post();
        $video->user_id = Auth::id();
        $video->title = $request->input('title');
        $video->meta_title= $request->input('meta_title');
        $video->meta_description= $request->input('meta_description');
        $video->content = $request->input('content');
        $video->status = $request->input('status');
        $video->lang = $request->input('lang');
        $video->allow_comments = $request->input('allow_comments');
        $video->type = "video";
        $video->videoid = $request->input('videoid');
        $video->hosted = $request->input('hosted');
        // IMAGE BANNER
        if ($request->hasFile('image')) {
            $image = new Upload($request->file('image'));
            $video->image = $image->getFullPath();
        }

        $video->save();

        // Clear previous tags
        $current_tags = $video->tags()->delete();
        $tags = $request->input('tags');
        if (count($tags)) {
            foreach ($tags as $tag) {
                $new_tag = new Tag();
                $new_tag->name = $tag;
                $video->tags()->save($new_tag);
            }
        }

        // Slug settings
        $slug = new Slug();
        $slug->type="video";
        $slug->name=$request->input('title');
        $video->slugs()->save($slug);

        $video->categories()->sync($request->input('category_id', []));

        return redirect()->route('admin.video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Post::find($id);
        $categories=Category::getCategories("video");
        $tags = Tag::groupBy('name')->lists('name');

        return view('admin.video.edit')
            ->with('video', $video)
            ->with('tags', json_encode($tags))
            ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $video = Post::find($id);
        $video->title = $request->input('title');
        $video->meta_title= $request->input('meta_title');
        $video->meta_description= $request->input('meta_description');
        $video->content = $request->input('content');
        $video->status = $request->input('status');
        $video->lang = $request->input('lang');
        $video->allow_comments = $request->input('allow_comments');
        $video->created_at = $request->input('created_at');
        $video->is_updated = $request->input('is_updated');
        $video->videoid = $request->input('videoid');
        $video->hosted = $request->input('hosted');



        // IMAGE BANNER
        if ($request->hasFile('image')) {
            $image = new Upload($request->file('image'));
            $video->image = $image->getFullPath();
        }

        $video->save();

        // Clear previous tags
        $current_tags = $video->tags()->delete();
        $tags = $request->input('tags');
        if (count($tags)) {
            foreach ($tags as $tag) {
                $new_tag = new Tag();
                $new_tag->name = $tag;
                $video->tags()->save($new_tag);
            }
        }

        $video->categories()->sync($request->input('category_id', []));

        Flash::success('video edited !');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id)
    {
        //
        $video = Post::find($id);
        $video->categories()->detach();
        $slug = Slug::whereType($video->type)->whereContent_id($video->id);
        $slug->delete();
        $video->delete();

        Flash::success('Video deleted !');

        return redirect()->route('admin.video.index');
    }
}
