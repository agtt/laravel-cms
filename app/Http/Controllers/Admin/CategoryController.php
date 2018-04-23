<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreCategoryRequest;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
Use App\Models\Lang;
use App\Models\Slug;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::with('posts')->get();

        return view('admin.category.index')
            ->with('categories', $categories);
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
    public function store(AdminStoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->parent_id = (empty($request->input('parent_id')) ? 0 : $request->input('parent_id'));
        $category->type = $request->input('type');
        $category->save();
        // Slug settings
        $slug = new Slug();
        $slug->type=$category->type;
        $slug->name=$request->input('name');
        $category->slugs()->save($slug);


        return redirect()->back();
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
        $languages = Lang::all();
        $category = Category::find($id);
        return view('admin.category.edit')
            ->with('category', $category)
            ->with('languages',$languages)
            ->with('categories',Category::whereType($category->type)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
         $category = Category::find($id)->update(['name' => $request->input('name'),
            'description'=>$request->input('description'),
            'parent_id'=>$request->input('parent_id')
            ]);
        
         Flash::success('Category Edited !');
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function delete($id)
    {
        $category = Category::find($id);
        $category->posts()->detach();
       // $category->slugs()->detach();
        $slug = Slug::whereType($category->type)->whereContent_id($category->id);
        $slug->delete();
        $subupdate = Category::whereParent_id($category->id)->update(['parent_id'=>0]);
        $category->delete();
        return redirect('admin/lesson');
    }
}
