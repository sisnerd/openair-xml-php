<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Projecttask extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Notes associated with the project task.
		'name' => null, //Short description of this task.
		'priority' => null, //The priority of the task (1 - 9).
		'percent_complete' => null, //This field is an estimate of the percentage
		'task_budget_cost' => null, //If task budgeting is enabled this is the
		'is_a_phase' => null, //A 1/0 field indicating if any other project_tasks
		'seq' => null, //The sequence number of this task.
		'timetype_filter' => null, //A timetype filter. This will hold a list of
		'non_billable' => null, //If set to 1, this is not billable. This is only
		'externalid' => null, //If the record was imported from an external system
		'default_category' => null, //The category to assign to a timesheet entry
		'all_can_assign' => null, //Is everyone able to assign time/expenses to
		'predecessors' => null, //Comma delimited list of task IDs which must
		'customer_name' => null, //The name of the associated customer.
		'parentid' => null, //The task ID of our immediate ancestor. If zero or
		'projecttask_typeid' => null, //The ID of the associated projecttask_type.
		'calculated_finishes' => null, //Calculated finish date.
		'predecessors_lag' => null, //Comma delimited list for task ID:days of lag
		'currency' => null, //Currency for the money fields in the record. This
		'cost_centerid' => null, //The ID of the associated cost center
		'calculated_starts' => null, //Calculated start date of the project task.
		'estimated_hours' => null, //If the use task estimating feature is turned
		'project_name' => null, //The name of the associated project.
		'id_number' => null, //User-defined task ID.
		'closed' => null, //A 1/0 field indicating if this is closed task.
		'task_budget_revenue' => null, //If task budgeting is enabled this is the
		'planned_hours' => null, //Total number of hours the task is estimated to
		'use_project_assignment' => null, //Flag set to 1 if they are using the
		'projectid' => null, //The ID of the associated project.
		'assign_user_names' => null, //A comma separated list of user nicknames to
		'starts' => null, //Optional scheduled starting date of this task.
		'fnlt_date' => null, //The finish no later than date of the task. The task
		'customerid' => null, //The ID of the associated customer.
		'predecessors_type' => null, //Comma delimited list of task
		'default_category_1' => null, //A feature, if enabled, would assign this
		'default_category_2' => null, //A feature, if enabled, would assign this
		'default_category_3' => null, //A feature, if enabled, would assign this
		'default_category_4' => null, //A feature, if enabled, would assign this
		'default_category_5' => null, //A feature, if enabled, would assign this
		'manual_task_budget' => null, //If set to 1 then the task budget is manually
    ];

    function __construct()
    {
        parent::__construct();
    }
}