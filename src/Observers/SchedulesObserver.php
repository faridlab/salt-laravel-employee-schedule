<?php

namespace SaltEmployeeSchedule\Observers;

use SaltEmployeeSchedule\Models\ScheduleWeekday;

trait SchedulesObserver
{

    public static function bootSchedulesObserver()
    {
        static::created(function ($model) {
            // FIXME: this line of code below should be executed through event
            $data = request('weekday', []);
            ScheduleWeekday::create($data);
        });
    }
}