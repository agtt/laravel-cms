<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Project;
use App\Models\Setting;
use App\User;
use Theme;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        if ($users->count() == 0) {
            return Theme::view('admin.user.create');
        }

        if (Setting::first()->show_on_front == 'projects') {
            $projects = Project::wherePublished(true)->orderBy('date', 'DESC')->get();

            return Theme::view('project.index')
                ->with('projects', $projects);
        }
        $posts = Post::whereStatus('published')->orderBy('created_at', 'desc')->paginate(15);

        return Theme::view('post.index')
            ->with('posts', $posts)
            ->with('name',Setting::first()->app_name);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
        $page = Page::whereId($id)->first();

        return Theme::view('page.show')
            ->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
