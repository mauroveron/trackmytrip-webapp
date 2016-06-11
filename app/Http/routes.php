<?php

Route::group(['prefix' => 'api', 'middleware' => ['api']], function () {
    Route::post('/entries', ['uses' => 'ApiController@saveLocations']);
});
