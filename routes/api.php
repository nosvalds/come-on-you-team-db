<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// all of the routes are in the /matches end-point
Route::group(['prefix' => 'matches'], function () {
    // GET /matches: show all matches
    Route::get('','API\Matches@index');

    // POST /matches: save a new match
    Route::post('','API\Matches@store');

    // /matches/id routes
    Route::group(['prefix' => '{match}'], function () {
        // GET /matches/id: return the match with the provided id
        Route::get('','API\Matches@show');

        // PUT /matches/id: update the match with the provided request
        Route::put('','API\Matches@update');
        
         // DELETE /matches/id: delete match with the provided id
        Route::delete('','API\Matches@destroy');
    });
});