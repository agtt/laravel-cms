<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements SluggableInterface
{
    use /*SoftDeletes,*/ SluggableTrait;

    protected $table="category";

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $fillable = ['name','description','meta_description','meta_title','parent_id','type'];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }


     public function slugs()
    {
        return $this->hasMany('App\Models\Slug','content_id');
    }


   /* public function videos()
    {
        return $this->belongsToMany('App\Models\Video');
    }*/




    public static  function getCategories($type="post"){

            $categories=Category::where('parent_id',0)
            ->where('type',$type)->get();//united

            $categories=self::addRelation($categories);

            return $categories;

        }

        protected static function selectChild($id)
        {
            $categories=Category::where('parent_id',$id)->get(); //rooney

            $categories=self::addRelation($categories);

            return $categories;

        }

        protected  static function addRelation($categories){

            $categories->map(function ($item, $key) {
                
                $sub=self::selectChild($item->id); 
                
                return $item=array_add($item,'subCategory',$sub);

            });

            return $categories;
        }



}
