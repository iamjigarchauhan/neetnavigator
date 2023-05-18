<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RangeRanking extends Model
{
    use HasFactory;

    protected $table = 'range_rankings';

    protected $fillable = [
        'year',
        'min_mark',
        'max_mark',
        'min_rank',
        'max_rank',
        'status',
    ];

    public static function getRangeByMarks($marks = 0)
    {
        return self::where('min_mark','<=',$marks)
        ->where('max_mark','>=',$marks)
        ->first();
    }
}
