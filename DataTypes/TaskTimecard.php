<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class TaskTimecard extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'projecttask_typeid' => null, //The ID of the project task type.
		'project_phaseid' => null, //The ID of the project phase.
		'userid' => null, //The ID of the associated user.
		'date' => null, //The date of the task timecard.
		'decimal_hours' => null, //The number of decimal hours for the task
		'cost_centerid' => null, //The ID of the associated cost center.
		'slipid' => null, //The ID of the associated slip.
		'hours' => null, //The number of hours for the task timecard.
		'timetypeid' => null, //The ID of the associated time type.
		'minutes' => null, //The number of minutes for the task timecard.
		'projectid' => null, //The ID of the associated project.
		'description' => null, //The description of the task timecard.
		'categoryid' => null, //The ID of the associated category.
		'projecttaskid' => null, //The ID of the task within the assoc. project.
		'timesheetid' => null, //The ID of the associated timesheet.
		'notes' => null, //Notes associated with this task timecard.
		'time_cardid' => null, //The ID of the associated timecard.
		'customerid' => null, //The ID of the associated customer.
		'payroll_typeid' => null, //The ID of the associated payroll type.
		'category_1id' => null, //The ID of the associated category_1.
		'category_2id' => null, //The ID of the associated category_2.
		'category_3id' => null, //The ID of the associated category_3.
		'category_4id' => null, //The ID of the associated category_4.
		'category_5id' => null, //The ID of the associated category_5.
    ];

    function __construct()
    {
        parent::__construct();
    }
}