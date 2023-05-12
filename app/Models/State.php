<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public static function allState($status = 'all')
    {
        return  State::when($status != 'all', function ($q) use ($status) {
            $q->where('status', $status);
        })
            ->orderBy('name', 'asc')->get();
    }

    public function user_neet_info_10th()
    {
        return $this->hasMany(UserNeetInfo::class, 'state_id_10th');
    }

    public function user_neet_info_12th()
    {
        return $this->hasMany(UserNeetInfo::class, 'state_id_12th');
    }

    public function colleges()
    {
        return $this->hasMany(College::class);
    }

    public static function getCollegeCountByState($stateIds = [])
    {
        return State::withCount(['colleges' => function ($q) {
            $q->where('status', 'active');
        }])->where('status', 'active')
            ->when(!empty($stateIds), function ($q) use ($stateIds) {
                $q->whereIn('id', $stateIds);
            })
            ->having('colleges_count', '>', 0)
            ->orderby('colleges_count', 'desc')
            ->get();
    }

    public static function getUserCollegeCountByMarkAndCategory($marks, $category, $stateName)
    {
        return State::withCount(['colleges' => function ($q) use($marks, $category){
            $q->where('status', 'active')
                ->whereHas('neet_range_rankings', function ($q1) use($marks, $category){
                    $q1->where('category', strtoupper($category))
                    ->where('min_mark', '<=', $marks)
                    ->where('min_mark', '!=', '')
                    ->whereNotNull('min_mark');
                });
        }])->where('status', 'active')
            ->where('name', 'like', trim($stateName))
            ->having('colleges_count', '>', 0)
            ->orderby('colleges_count', 'desc')
            ->get();
    }
}
