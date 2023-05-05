<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public static function allCity($status = 'all', $state = '', $city_id = 0)
    {
        return  City::when($status != 'all', function ($q) use ($status) {
            $q->where('status', $status);
        })
            ->when(is_numeric($state), function ($q) use ($state) {
                $q->where('state_id', $state);
            })
            ->when(!is_numeric($state), function ($q) use ($state) {
                $q->whereHas('state', function ($q1) use ($state) {
                    $q1->where('name', trim($state));
                });
            })
            ->when($city_id > 0, function ($q) use ($city_id) {
                $q->where('id', $city_id);
            })
            ->select('id', 'name')
            ->orderBy('state_id', 'asc')->orderBy('name', 'asc')->get();
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }   

    public function user_neet_info()
    {
        return $this->hasMany(UserNeetInfo::class);
    }
}
