<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RangeRanking extends Model
{
    use HasFactory;
    protected $fillable = ['year','min_mark','max_mark','min_rank','max_rank','status'];
}
