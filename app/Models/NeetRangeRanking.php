<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class NeetRangeRanking extends Model
{
    use HasFactory;

    public static function getRankByMark($marks, $category)
    {
        return NeetRangeRanking::where('min_mark', '<=', $marks)
            ->where('min_mark','>',0)
            ->where('min_rank','>',0)
            ->where('category', strtoupper($category))
            ->select('college_id','min_rank','max_rank')->get();
    }
}
