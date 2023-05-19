<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Blog extends Model
{
    use HasFactory,Mediable;
    protected $fillable = ['title','slug','category_id','author','description','content','published_at','status','from_time','to_time','location'];
}

