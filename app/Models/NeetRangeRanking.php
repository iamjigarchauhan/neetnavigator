<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeetRangeRanking extends Model
{
    use HasFactory;

    public static function getCollegeIdsByMark($marks, $category)
    {
        return NeetRangeRanking::where('min_mark', '<=', $marks)
            ->where('category', strtoupper($category))
            ->where('status', 'active')
            ->where(function($q){
                $q->whereNotNull('min_rank')
                ->where('min_rank', '!=', '');
            })
            ->orWhere(function($q){
                $q->whereNotNull('max_rank')
                ->where('max_rank', '!=', '');
            })
            ->pluck('college_id');
    }

    public static function getRankByMark($marks, $category)
    {
        return NeetRangeRanking::where('min_mark', '<=', $marks)
            ->where('category', strtoupper($category))
            ->where('status', 'active')
            ->first();
    }
}
