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

class ScheduleOrganizations extends Resources {

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
        'organization_id',
        'structure_id',
        'type',
        'name',
        'order_number',
        'start_date',
        'end_date',
        'time_in',
        'time_out',
    ];

    protected $rules = array(
        'organization_id' => 'required|string',
        'structure_id' => 'required|string',
        'type' => 'required|string',
        'name' => 'required|string',
        'order_number' => 'nullable|integer',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
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
        'organization_id',
        'structure_id',
        'type',
        'name',
        'order_number',
        'start_date',
        'end_date',
        'time_in',
        'time_out',
    );

    public function organization() {
        return $this->belongsTo('SaltOrganization\Models\Organizations', 'organization_id', 'id');
    }

    public function structure() {
        return $this->belongsTo('SaltOrganization\Models\OrganizationStructures', 'structure_id', 'id')->withTrashed();
    }

}
