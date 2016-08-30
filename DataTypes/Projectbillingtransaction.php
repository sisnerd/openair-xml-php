<?php

use OpenAir\Base\BaseCommandClass;

class Projectbillingtransaction extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Notes associated with this project billing rule
		'hour' => null, //The number of hours for a T type.
		'userid' => null, //The ID of the associated user.
		'date' => null, //The date of the transaction.
		'taskid' => null, //The ID of the associated task
		'um' => null, //The unit of measure for an E or P type.
		'rate' => null, //The hourly rate for a T type. Dated by the date field.
		'slipid' => null, //The ID of slip that was created.
		'ticketid' => null, //The ID of the associated ticket.
		'project_taskid' => null, //The ID of the associated project task.
		'project_billing_ruleid' => null, //The ID of the associated project
		'cost' => null, //The cost per unit of measure for an E type. The fixed
		'itemid' => null, //The ID of the associated item.
		'quantity' => null, //The quantity for an E or P type.
		'projectid' => null, //The ID of the associated project.
		'description' => null, //Description associated with billing rule
		'total' => null, //The total currency value. Dated by the date field.
		'categoryid' => null, //The ID of the associated category.
		'minute' => null, //The number of minutes for a T type.
		'type' => null, //The type of the transaction. Matches the type field in
		'slip_stage_id' => null, //The ID of the slip stage.
		'job_codeid' => null, //The ID of the associated job code.
		'customerpoid' => null, //The ID of the associated customerpo.
		'cost_centerid' => null, //The ID of the associated cost center.
		'timetypeid' => null, //The ID of the associated time type.
		'customerid' => null, //The ID of the associated customer.
		'agreementid' => null, //The ID of the associated agreement.
		'payroll_typeid' => null, //The ID of the associated payroll type.
    ];

    function __construct()
    {
        parent::__construct();
    }
}