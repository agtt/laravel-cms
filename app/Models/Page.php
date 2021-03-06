<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model implements SluggableInterface
{
    use SoftDeletes, SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
        public function slugs()
    {
        return $this->hasMany('App\Models\Slug','content_id');
    }
}
