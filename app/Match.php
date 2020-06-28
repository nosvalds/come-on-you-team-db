<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Match Model
//
// This class represent a single match of football. It contains a methods that can be used for a Match object.

class Match extends Model
{
    // fillable properties, control what can be saved into DB from a request
    protected $fillable = [
        'team_size',
        'team_a_name',
        'team_b_name',
        'team_a_score',
        'team_b_score',
        'game_complete',
    ];

    // calculates if team A has won
    public function teamAWon() : bool
    {
        return $this->game_complete 
            && $this->team_a_score > $this->team_b_score;
    }

    // calculates if team B has won
    public function teamBWon() : bool
    {
        return $this->game_complete 
            && $this->team_b_score > $this->team_a_score;
    }

    // calculates if it was a tie
    public function tie() : bool
    {
        return $this->game_complete 
            && $this->team_b_score === $this->team_a_score;
    }
};
