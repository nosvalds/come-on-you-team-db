<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    // fillable properties
    protected $fillable = [
        'team_size',
        'team_a_name',
        'team_b_name',
        'team_a_score',
        'team_b_score',
        'game_complete',
    ];
};
