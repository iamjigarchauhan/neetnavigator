<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRoundCutoffCollege extends Model
{
    use HasFactory;

    const NEET_CATEGORY = [
        'General',
        'EWS',
        'OBC',
        'SC',
        'ST',
    ];

    const STATE_CATEGORY = [
        'General',
        'EWS',
        'OBC',
        'SC',
        'ST',
    ];
}
