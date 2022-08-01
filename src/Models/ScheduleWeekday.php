<?php

namespace SaltEmployeeSchedule\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;
use SaltLaravel\Traits\ObservableModel;
use SaltLaravel\Traits\Uuids;

class ScheduleWeekday extends Resources {

    protected $table = 'schedule_weekday';

    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',
        // Fields table provinces
        'id',
        'schedule_id',
        'sun',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
    ];

    protected $rules = array(
        'schedule_id' => 'required|string',
        'sun' => 'required|string',
        'mon' => 'required|string',
        'tue' => 'required|string',
        'wed' => 'required|string',
        'thu' => 'required|string',
        'fri' => 'required|string',
        'sat' => 'required|string',
    );

    protected $auths = array (
        'index',
        'store',
        'show',
        'update',
        'patch',
        'destroy',
        'trash',
        'trashed',
        'restore',
        'delete',
        'import',
        'export',
        'report'
    );

    protected $structures = array();
    protected $forms = array();

    protected $fillable = array(
        'schedule_id',
        'sun',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
    );

    protected $searchable = array(
        'schedule_id',
        'sun',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
    );

}
