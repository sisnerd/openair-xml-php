<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Timecard extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'time_start' => null, //Time they started working.
        'hours' => null, //Hours worked.
        'notes' => null, //Notes associated with the timecard.
        'updated' => null, //Time the record was last updated or modified.
        'userid' => null, //The ID of the associated user.
        'date' => null, //The date of the time card.
        'break_end' => null, //Time they ended the break.
        'break_start' => null, //Time they started the break.
        'timesheetid' => null, //The ID of the associated timesheet.
        'time_end' => null, //Time they stopped working.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
