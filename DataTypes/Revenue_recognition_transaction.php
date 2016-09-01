<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Revenue_recognition_transaction extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'percent_complete' => null, //The calculated percent complete value if it
		'revenue_recognition_ruleid' => null, //The ID of the associated rule.
		'userid' => null, //The ID of the associated user.
		'date' => null, //The date of the transaction.
		'taskid' => null, //The ID of the associated task.
		'customerpo_id' => null, //The ID of the associated customerpo.
		'recognition_type' => null, //Recognition type: R - revenue, C - cost, or
		'updated' => null, //Time the record was last updated or modified.
		'slipid' => null, //The ID of the associated slip.
		'currency' => null, //Currency for the money fields in the record.
		'customerid' => null, //The ID of the associated customer.
		'ticketid' => null, //The ID of the associated ticket.
		'project_taskid' => null, //The ID of the associated project task.
		'projectid' => null, //The ID of the associated project.
		'total' => null, //The amount of the transaction. Dated by the date field.
		'categoryid' => null, //The ID of the associated category.
		'notes' => null, //Notes associated with this revenue recognition
		'acct_code' => null, //Optional accounting system code for integration
		'type' => null, //The type of the transaction. Matches the type field in
		'agreementid' => null, //The ID of the associated agreement.
		'acct_date' => null, //The accounting period date of the transaction.
		'cost_center_id' => null, //The ID of the associated cost center.
		'category_1id' => null, //The id of the associated category_1.
		'category_2id' => null, //The id of the associated category_2.
		'category_3id' => null, //The id of the associated category_3.
		'category_4id' => null, //The id of the associated category_4.
		'category_5id' => null, //The id of the associated category_5.
		'project_billing_ruleid' => null, //The ID of the associated billing rule.
		'job_codeid' => null, //The ID of the associated job code.
		'rate' => null, //The hourly rate for a T type. Dated by the date field.
		'decimal_hours' => null, //The number of decimal hours.
		'hour' => null, //The number of hours for a T type.
		'minute' => null, //The number of minutes for a T type.
		'revenue_containerid' => null, //The ID of the associated
		'revenue_stageid' => null, //The ID of the associated revenue stage.
		'originatingid' => null, //The ID of the originating
		'offsetsid' => null, //The ID of the revenue_recognition_transaction which
		'is_from_open_stage' => null, //A 1/0 field indicating that the revenue
		'portfolio_projectid' => null, //The ID of the associated portfolio
		'agreement_externalid' => null, //Import-only field.
		'category_externalid' => null, //Import-only field.
		'customer_externalid' => null, //Import-only field.
		'project_externalid' => null, //Import-only field.
		'projecttask_externalid' => null, //Import-only field.
		'user_externalid' => null, //Import-only field.
    ];

    function __construct()
    {
        parent::__construct();
    }
}