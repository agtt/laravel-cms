<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model 
{
      public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

       public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }

    public function slugs()
    {

        return $this->hasMany('App\Models\Slug','content_id');
    }
}
