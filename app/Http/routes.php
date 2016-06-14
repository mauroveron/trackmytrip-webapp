<?php

Route::group(['prefix' => 'api', 'middleware' => ['api']], function () {
    Route::post('entries', ['uses' => 'ApiController@saveLocationEntries']);
    Route::get('entries', ['uses' => 'ApiController@displayLocationEntries']);
});

Route::get('/', 'DashboardController@index');
