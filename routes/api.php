<?php

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('users','Api\User\UserController', [
        'as' => 'api'
    ]);
    Route::apiResource('users.votes','Api\User\UserVoteController', [
        'only' => ['show', 'store', 'update'],
        'as' => 'api'
    ]);
    Route::apiResource('votes','Api\Vote\VoteController', [
        'only' => ['index', 'show', 'destroy'],
        'as' => 'api'
    ]);
});