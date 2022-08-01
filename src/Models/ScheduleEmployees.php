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

class ScheduleEmployees extends Resources {

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
        'employee_id',
        'schedule_date',
        'order_number',
        'time_in',
        'time_out',
    ];

    protected $rules = array(
        'employee_id' => 'required|string',
        'schedule_date' => 'required|date',
        'order_number' => 'nullable|integer',
        'time_in' => 'required|date_format:H:i:s',
        'time_out' => 'required|date_format:H:i:s',
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
        'employee_id',
        'schedule_date',
        'order_number',
        'time_in',
        'time_out',
    );

    public function manager() {
        return $this->belongsTo('SaltEmployeeSchedule\Models\Employees', 'employee_id', 'id')->withTrashed();
    }

}
