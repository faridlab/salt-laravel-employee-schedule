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
use SaltEmployeeSchedule\Observers\SchedulesObserver;

class Schedules extends Resources {

    use Uuids;
    use ObservableModel;
    use SchedulesObserver;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',
        // Fields table provinces
        'id',
        'name',
        'is_default',
        'order_number',
        'start_date',
        'end_date',
        'time_in',
        'time_out',
        'is_override_holiday',
    ];

    protected $rules = array(
        'name' => 'required|string',
        'is_default' => 'nullable|boolean',
        'order_number' => 'nullable|integer',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date',
        'time_in' => 'required|date_format:H:i:s',
        'time_out' => 'required|date_format:H:i:s',
        'is_override_holiday' => 'nullable|boolean',
        'weekday' => 'required|json', // insert into weekday
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

    protected $searchable = array(
        'name',
        'is_default',
        'order_number',
        'start_date',
        'end_date',
        'time_in',
        'time_out',
        'is_override_holiday',
    );

    public function weekday() {
        return $this->hasOne('SaltEmployeeSchedule\Models\ScheduleWeekday', 'schedule_id', 'id');
    }

}
