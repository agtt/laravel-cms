<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Slug extends Model implements SluggableInterface
{
    use SluggableTrait;
     public $timestamps = false;
     protected $primaryKey = 'slug_id';
     
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

  
}
