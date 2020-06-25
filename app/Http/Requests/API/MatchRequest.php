<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class MatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "team_size" => ['required', 'integer'],
            "team_a_name" => ['required', 'string'],
            "team_b_name" => ['required', 'string'],
            "team_a_score" => ['required', 'integer'],
            "team_b_score" => ['required', 'integer'],
            "game_complete" => ['required', 'boolean'],
        ];
    }
}
