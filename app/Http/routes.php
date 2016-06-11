<?php

Route::group(['prefix' => 'api', 'middleware' => ['api']], function () {
    Route::post('entries', ['uses' => 'ApiController@saveLocations']);
    Route::get('entries', ['uses' => 'ApiController@displayLocationEntries']);
});
