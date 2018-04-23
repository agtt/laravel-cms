<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
     protected $fillable = ['title', 'message','created_at','email','name'];
}
