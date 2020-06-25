<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class MatchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int) $this->id,
            'team_size' => (int) $this->team_size,
            'teamA' => [
                'name' => $this->team_a_name,
                'score' => (int) $this->team_a_score,
            ],
            'teamB' => [
                'name' => $this->team_b_name,
                'score' => (int) $this->team_b_score,
            ],
            'game_complete' => (bool) $this->game_complete,
        ];
    }
}
