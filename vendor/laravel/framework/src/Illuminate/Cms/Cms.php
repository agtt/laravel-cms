<?php

namespace Illuminate\Cms;

use Exception;
use App\Models\Category;
class Cms extends Exception
{
    /**
     * The guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $type;

    /**
     * Create a new authentication exception.
     *
     * @param \Illuminate\Contracts\Auth\Guard|null  $guard
     */
    public function __construct($type = null)
    {
       
    }

    /**
     * Get the guard instance.
     *
     * @return \Illuminate\Contracts\Auth\Guard|null
     */
   public  static function getCategories($type=null;){

            $categories=Category::where('parent_id',0)->get();//united

            $categories=self::addRelation($categories);

            return $categories;

        }

        protected static function selectChild($id)
        {
            $categories=Category::where('parent_id',$id)->get(); //rooney

            $categories=self::addRelation($categories);

            return $categories;

        }

        protected static function addRelation($categories){

            $categories->map(function ($item, $key) {
                
                $sub=self::selectChild($item->id); 
                
                return $item=array_add($item,'subCategory',$sub);

            });

            return $categories;
        }
}
