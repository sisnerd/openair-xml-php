<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Task extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'projecttask_typeid' => null, //The ID of the projecttask_type of the
		'userid' => null, //The ID of the associated user.
		'date' => null, //The date of the task.
		'decimal_hours' => null, //The number of decimal hours for the task.
		'cost_centerid' => null, //The ID of the associated cost center.
		'slipid' => null, //The ID of the associated slip if this task was billed.
		'hours' => null, //The number of hours for the task.
		'timetypeid' => null, //The ID of the associated time type.
		'minutes' => null, //The number of minutes for the task.
		'projectid' => null, //The ID of the associated project.
		'description' => null, //Description of the task.
		'categoryid' => null, //The ID of the associated category.
		'projecttaskid' => null, //ID of the task within the associated project.
		'timesheetid' => null, //The ID of the associated timesheet.
		'notes' => null, //Notes associated with this task.
		'customerid' => null, //The ID of the associated customer.
		'payroll_typeid' => null, //The ID of the associated payroll type.
		'job_codeid' => null, //The ID of the associated job code.
		'loaded_cost' => null, //The loaded cost for the associated resource,
		'loaded_cost_2' => null, //User's second level loaded cost, using the
		'loaded_cost_3' => null, //User's third level loaded cost, using the forex
		'project_loaded_cost' => null, //User's project cost override in project
		'project_loaded_cost_2' => null, //User's project second cost in project
		'project_loaded_cost_3' => null, //User's project third cost in project
		'acct_date' => null, //The accounting period date of the task.
		'category_1id' => null, //The ID of the associated category_1.
		'category_2id' => null, //The ID of the associated category_2.
		'category_3id' => null, //The ID of the associated category_3.
		'category_4id' => null, //The ID of the associated category_4.
		'category_5id' => null, //The ID of the associated category_5.
		'thin_client_id' => null, //Used by thin clients to reconcile imported
    ];

    function __construct()
    {
        parent::__construct();
    }
}