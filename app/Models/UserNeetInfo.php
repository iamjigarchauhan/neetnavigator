<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNeetInfo extends Model
{
    use HasFactory;

    protected $table = 'user_neet_info';

    protected $fillable = [
        'user_id',
        'state_id_10th',
        'state_id_12th',
        'pincode',
        'state_by_pincode',
        'city_id',
        'area',
        'neet_category',
        'state_category',
        'gender',
        'physical_handicap',
        'armed_force',
        'minority',
        'eligible_quota',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state_10th()
    {
        return $this->belongsTo(State::class, 'state_id_10th', 'id');
    }

    public function state_12th()
    {
        return $this->belongsTo(State::class, 'state_id_12th', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
