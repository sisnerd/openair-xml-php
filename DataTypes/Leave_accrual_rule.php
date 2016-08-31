<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Leave_accrual_rule extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'project_task_filter' => null, //CSV list of project_tasks that will
		'category_filter' => null, //CSV list of categories that will trigger a
		'lose_how' => null, //How is accrued time lost: N - Never, A - The users
		'cap' => null, //Number of hours to cap the accrual at.
		'timetype_filter' => null, //CSV list of timetypes that will trigger a
		'project_filter' => null, //CSV list of projects that will trigger a draw
		'period' => null, //The period for the cap.
		'draw_down_when' => null, //Generate the draw down when: R - When leave
		'notes' => null, //Notes associated with the leave accrual rule.
		'active' => null, //A 1/0 field indicating whether this is an active
		'name' => null, //The name for the leave accrual rule.
		'updated' => null, //Time the record was last updated or modified.
		'grace_days' => null, //How many days is the grace period before accrued
		'timing' => null, //When the accrual is applied: S - start of the period or
		'amount' => null, //The number of hours per period.
    ];

    function __construct()
    {
        parent::__construct();
    }
}