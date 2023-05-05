<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeetRangeRanking extends Model
{
    use HasFactory;

    public static function getRankByMark($marks)
    {
        return NeetRangeRanking::where('min_mark', '>=', $marks)
            ->where('max_mark', '<=', $marks)
            ->where('year', date('Y'))
            ->where('status', 'active')
            ->first();
    }
}
