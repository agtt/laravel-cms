<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use App\Models\Category;
use Theme;

class LessonController extends Controller
{
    public function index($id=0)
    {	    	
    	//$posts = Post::whereStatus('published')->orderBy('created_at', 'desc')->paginate(15);
    	$cat = Category::find($id) ;
    	$title = ($id != 0 ? $cat->name : 'Dersler');
        $uniteler = Post::Select(array("posts.id","posts.title","posts.content","posts.parent_id","posts.sort","posts.slug","posts.image","posts.type","posts.meta_title"))
         ->leftJoin('category_post', function($join) {
        $join->on('posts.id', '=', 'category_post.post_id');})
         ->whereCategory_id($id)
         ->whereType('unit')
         ->orderBy('posts.sort', 'asc')
         ->whereStatus('published')
         //->whereParent_id(0)
         ->get();

     $altkonular = array();
     $basliklar = array();
     foreach ($uniteler as $sub) {//echo $sub->id;echo "<br>";
         if($sub->parent_id > 0 ) :
         $basliklar[$sub->parent_id]['subtitle'][] =$sub->title;
         $basliklar[$sub->parent_id]['subcontent'][] =$sub->content;
         $basliklar[$sub->parent_id]['subslug'][] =$sub->slug;


            else:

         $basliklar[$sub->id]['title'] =$sub->title;
         $basliklar[$sub->id]['content'] =$sub->content;
         $basliklar[$sub->id]['slug'] =$sub->slug;
         $basliklar[$sub->id]['sort'] =$sub->sort;
         
         endif;
     }     
       

        return Theme::view('lesson.index')
            
             ->with('title',$title)
             ->with('subjects',$basliklar)
             ->with('categories',Category::whereType('lesson')->
              whereParent_id($id)->get());

           
    }


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

    public function subjects($id)
    {

    }
}
