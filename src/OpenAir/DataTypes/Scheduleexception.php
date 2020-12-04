<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Scheduleexception extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'workhours' => null, //The number of hours per day during this daterange.
        'userid' => null, //The ID of the user of this is an exception to the
        'name' => null, //The exception name and description, e.g. New Years Day.
        'exception_type' => null, //The type of exception. R - Date range of the
        'startdate' => null, //The start date for the exception.
        'enddate' => null, //The end date for the exception.
        'updated' => null, //Time the record was last updated or modified.
        'workscheduleid' => null, //The ID of the corresponding work schedule.
        'timetypeid' => null, //The ID of the associated time type.
        'schedule_request_itemid' => null, //The ID of the schedule change item
    ];
}
