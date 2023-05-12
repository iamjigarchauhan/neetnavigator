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

    public static function getCollegeCountByState($stateIds = [],$collgeIds = [])
    {
        return State::withCount(['colleges' => function ($q) use ($collgeIds) {
                $q->where('status', 'active');
                $q->when(!empty($collgeIds), function ($q) use ($collgeIds) {
                    $q->whereIn('id', $collgeIds);
                });
            }])->where('status', 'active')
            ->when(!empty($stateIds), function ($q) use ($stateIds) {
                $q->whereIn('id', $stateIds);
            })
            ->having('colleges_count', '>', 0)
            ->orderby('colleges_count','desc')
            ->get();
    }
}
