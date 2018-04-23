<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model implements SluggableInterface
{
    use SoftDeletes, SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\ProjectCategory');
    }

    public function images()
    {
        return $this->hasMany('App\Models\ProjectImage');
    }
}
