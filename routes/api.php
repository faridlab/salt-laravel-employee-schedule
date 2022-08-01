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


    // API: SCHEDULE WEEKDAY
    Route::get("schedule_weekday", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("schedule_weekday", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("schedule_weekday/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("schedule_weekday/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("schedule_weekday/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("schedule_weekday/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("schedule_weekday/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedule_weekday/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_weekday/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("schedule_weekday/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("schedule_weekday/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("schedule_weekday/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_weekday/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: SCHEDULE ORGANIZATION STRUCTURE (Department, Level, Position)
    Route::get("schedule_organizations", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("schedule_organizations", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("schedule_organizations/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("schedule_organizations/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("schedule_organizations/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("schedule_organizations/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("schedule_organizations/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedule_organizations/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_organizations/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("schedule_organizations/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("schedule_organizations/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("schedule_organizations/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_organizations/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: SCHEDULE EMPLOYEES
    Route::get("schedule_employees", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("schedule_employees", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("schedule_employees/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("schedule_employees/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("schedule_employees/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("schedule_employees/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("schedule_employees/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedule_employees/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_employees/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("schedule_employees/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("schedule_employees/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("schedule_employees/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_employees/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
