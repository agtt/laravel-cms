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
class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::getCategories("lesson");

        return view('admin.lesson.index')
        ->with('lessons',Post::whereType('unit')->whereParent_id(0)->get())
        ->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=0)
    {
        //
       $categories=Category::getCategories("lesson");
       $tags = Tag::groupBy('name')->pluck('name');
        return view('admin.lesson.create')
            ->with('tags', json_encode($tags))
            ->with('id',$id)
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
        $lesson = new post();
        $lesson->user_id = Auth::id();
        $lesson->parent_id = $request->input('parent_id');
        $lesson->title = $request->input('title');
        $lesson->meta_title= $request->input('meta_title');
        $lesson->meta_description= $request->input('meta_description');
        $lesson->content = $request->input('content');
        $lesson->status = $request->input('status');
        $lesson->lang = $request->input('lang');
        $lesson->allow_comments = $request->input('allow_comments');
        $lesson->type = "unit";
        $lesson->videoid = $request->input('videoid');
        $lesson->hosted = $request->input('hosted');
        $lesson->sort = $request->input('sort');
        // IMAGE BANNER
        if ($request->hasFile('image')) {
            $image = new Upload($request->file('image'));
            $lesson->image = $image->getFullPath();
        }

        $lesson->save();

        // Clear previous tags
        $current_tags = $lesson->tags()->delete();
        $tags = $request->input('tags');
        if (count($tags)) {
            foreach ($tags as $tag) {
                $new_tag = new Tag();
                $new_tag->name = $tag;
                $lesson->tags()->save($new_tag);
            }
        }

        // Slug settings
        $slug = new Slug();
        $slug->type="unit";
        $slug->name=$request->input('title');
        $lesson->slugs()->save($slug);

        $lesson->categories()->sync($request->input('category_id', []));

        return redirect()->route('admin.lesson.index');
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
        $lesson = Post::find($id);
        $categories=Category::getCategories("lesson");
        $tags = Tag::groupBy('name')->lists('name');
        $subjects = Post::whereParent_id($id)->Orderby('sort')->get();

        return view('admin.lesson.edit')
            ->with('lesson', $lesson)
            ->with('tags', json_encode($tags))
            ->with('categories', $categories)
            ->with('subjects',$subjects);
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
        $lesson = Post::find($id);
        $lesson->title = $request->input('title');
        $lesson->meta_title= $request->input('meta_title');
        $lesson->meta_description= $request->input('meta_description');
        $lesson->content = $request->input('content');
        $lesson->status = $request->input('status');
        $lesson->lang = $request->input('lang');
        $lesson->allow_comments = $request->input('allow_comments');
        $lesson->created_at = $request->input('created_at');
        $lesson->is_updated = $request->input('is_updated');
        $lesson->videoid = $request->input('videoid');
        $lesson->hosted = $request->input('hosted');
        $lesson->sort = $request->input('sort');



        // IMAGE BANNER
        if ($request->hasFile('image')) {
            $image = new Upload($request->file('image'));
            $lesson->image = $image->getFullPath();
        }

        $lesson->save();

        // Clear previous tags
        $current_tags = $lesson->tags()->delete();
        $tags = $request->input('tags');
        if (count($tags)) {
            foreach ($tags as $tag) {
                $new_tag = new Tag();
                $new_tag->name = $tag;
                $lesson->tags()->save($new_tag);
            }
        }

        $lesson->categories()->sync($request->input('category_id', []));

        Flash::success('lesson edited !');

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
        $lesson = Post::find($id);
        $lesson->categories()->detach();
        $slug = Slug::whereType($lesson->type)->whereContent_id($lesson->id);
        $slug->delete();
        $lesson->delete();

        Flash::success('lesson deleted !');

        return redirect()->route('admin.lesson.index');
    }
}
