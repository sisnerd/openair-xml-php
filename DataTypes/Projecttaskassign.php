<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Projecttaskassign extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'userid' => null, //The ID of the user assigned to this task.
		'planned_hours' => null, //The hours for this user if the planned hours at
		'updated' => null, //Time the record was last updated or modified.
		'projecttaskid' => null, //ID of the project task to which this user is
		'externalid' => null, //If the record was imported from an external system
		'project_groupid' => null, //The ID of the project group if the user was
		'allocation' => null, //The percentage of time the associated user is
		'job_codeid' => null, //The ID of the associated job code.
		'project_assignment_profile_id' => null, //The id of the associated
		'pending_booking_id' => null, //The id of the associated pending booking.
		'booking_id' => null, //The id of the associated booking.
    ];

    function __construct()
    {
        parent::__construct();
    }
}