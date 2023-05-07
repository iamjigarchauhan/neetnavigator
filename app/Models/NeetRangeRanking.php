<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeetRangeRanking extends Model
{
    use HasFactory;

    public static function getRankByMark($marks, $category)
    {
        return NeetRangeRanking::where('min_mark', '<=', $marks)
            // ->leftJoin('colleges','colleges.id','neet_range_rankings.college_id')
            ->where('category', strtoupper($category))
            // ->orderBy('year','desc')
            // ->toSql();
            ->pluck('college_id');
    }
}
