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
            ->whereNotNull('min_mark')
            ->where('category', strtoupper($category))
            ->pluck('college_id');
    }
}
