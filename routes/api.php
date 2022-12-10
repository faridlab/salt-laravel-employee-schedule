<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltEmployeeSchedule\Controllers\ApiEmployeeResourcesController;
// use SaltEmployeeSchedule\Controllers\ApiNestedResourcesController;

use SaltEmployeeSchedule\Controllers\SchedulesController;
use SaltEmployeeSchedule\Controllers\ScheduleEmployeesController;
use SaltEmployeeSchedule\Controllers\ScheduleOrganizationsController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: SCHEDULES
    Route::get("schedules", [SchedulesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("schedules", [SchedulesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("schedules/trash", [SchedulesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("schedules/import", [SchedulesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("schedules/export", [SchedulesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("schedules/report", [SchedulesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("schedules/{id}/trashed", [SchedulesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedules/{id}/restore", [SchedulesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedules/{id}/delete", [SchedulesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("schedules/{id}", [SchedulesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("schedules/{id}", [SchedulesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("schedules/{id}", [SchedulesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedules/{id}", [SchedulesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: SCHEDULE WEEKDAY
    Route::get("schedule_weekday", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("schedule_weekday", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("schedule_weekday/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("schedule_weekday/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("schedule_weekday/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("schedule_weekday/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("schedule_weekday/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedule_weekday/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_weekday/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("schedule_weekday/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("schedule_weekday/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("schedule_weekday/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_weekday/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: SCHEDULE ORGANIZATION STRUCTURE (Department, Level, Position)
    Route::get("schedule_organizations", [ScheduleOrganizationsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("schedule_organizations", [ScheduleOrganizationsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("schedule_organizations/trash", [ScheduleOrganizationsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("schedule_organizations/import", [ScheduleOrganizationsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("schedule_organizations/export", [ScheduleOrganizationsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("schedule_organizations/report", [ScheduleOrganizationsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("schedule_organizations/{id}/trashed", [ScheduleOrganizationsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedule_organizations/{id}/restore", [ScheduleOrganizationsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_organizations/{id}/delete", [ScheduleOrganizationsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("schedule_organizations/{id}", [ScheduleOrganizationsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("schedule_organizations/{id}", [ScheduleOrganizationsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("schedule_organizations/{id}", [ScheduleOrganizationsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_organizations/{id}", [ScheduleOrganizationsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: SCHEDULE EMPLOYEES
    Route::get("schedule_employees", [ScheduleEmployeesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("schedule_employees", [ScheduleEmployeesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("schedule_employees/trash", [ScheduleEmployeesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("schedule_employees/import", [ScheduleEmployeesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("schedule_employees/export", [ScheduleEmployeesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("schedule_employees/report", [ScheduleEmployeesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("schedule_employees/{id}/trashed", [ScheduleEmployeesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("schedule_employees/{id}/restore", [ScheduleEmployeesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_employees/{id}/delete", [ScheduleEmployeesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("schedule_employees/{id}", [ScheduleEmployeesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("schedule_employees/{id}", [ScheduleEmployeesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("schedule_employees/{id}", [ScheduleEmployeesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("schedule_employees/{id}", [ScheduleEmployeesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

});
