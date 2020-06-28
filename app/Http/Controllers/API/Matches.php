<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Match;
use App\Http\Resources\API\MatchResource;
use App\Http\Requests\API\MatchRequest;

class Matches extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the matches, sort with newest at top
        return MatchResource::collection(Match::all()->sortByDesc("updated_at"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatchRequest $request)
    {
        // get all the request data
        // returns an array of all the data the user sent
        $data = $request->all();

        // create a match and store in the DB
        // return this as JSON to the requestor
        return new MatchResource(Match::create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        // return the specific match
        return new MatchResource($match);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatchRequest $request, Match $match)
    {
        // get the request data
        $data = $request->all();

        // use fill to save it into the specified match
        $match->fill($data)->save();

        // send back the updated match
        return new MatchResource($match);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        // delete the match from the DB
        $match->delete();

        // return a 204 code as there is no content in the response
        return response(null, 204);
    }
}
