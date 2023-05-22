<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;


class Blog extends Model
{
    use HasFactory,Mediable;
    protected $fillable = ['title','slug','category_id','user_id','description','content','published_at','status'];

    public function user(){
        return $this->belongsTo(Admin::class,'user_id','id');
    }
}
