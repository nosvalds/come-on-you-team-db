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

    public function teamAWon() : bool
    {
        return $this->game_complete 
            && $this->team_a_score > $this->team_b_score;
    }

    public function teamBWon() : bool
    {
        return $this->game_complete 
            && $this->team_b_score > $this->team_a_score;
    }

    public function tie() : bool
    {
        return $this->game_complete 
        && $this->team_b_score === $this->team_a_score;
    }
};
