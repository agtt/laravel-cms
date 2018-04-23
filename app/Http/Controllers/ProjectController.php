<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Theme;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = Project::wherePublished(true)->orderBy('date', 'DESC')->get();

        return Theme::view('project.index')
            ->with('projects', $projects);
    }
}
