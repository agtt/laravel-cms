<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Sofa\Eloquence\Eloquence;

class Post extends Model implements SluggableInterface
{
    use /*SoftDeletes,*/ SluggableTrait, Eloquence;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    protected $searchableColumns = ['title', 'content', 'tags.name'];

    protected $fillable = ['title', 'content', 'status', 'lang', 'image', 'allow_comments', 'created_at','meta_title','meta_description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    public function slugs()
    {
        return $this->hasMany('App\Models\Slug','content_id');
    }

}
