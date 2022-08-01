<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('SaltEmployeeSchedule\Controllers')
    ->middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: SCHEDULES
    Route::get("schedules", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("schedules", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("schedules/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("schedules/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("schedules/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("schedules/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("schedules/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedules/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedules/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("schedules/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("schedules/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("schedules/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedules/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


});
