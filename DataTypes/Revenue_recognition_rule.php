<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Revenue_recognition_rule extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'user_filter' => null, //CSV list of users to limit the rule to.
		'purchase_how' => null, //How purchases should be recognized: M - mark up/
		'percent_complete' => null, //The calculated percent complete value if a
		'percent' => null, //The percentage value for a fixed fee percent trigger.
		'end_milestone' => null, //ID of the ending milestone (project_task).
		'recognition_type' => null, //What we are recognizing: R - revenue,
		'marked_as_ready' => null, //Trigger recognition when a task (id in phase)
		'break_by_user' => null, //Break out the transactions by user. Currently
		'percent_how' => null, //How percent complete should be calculated:
		'timetype_filter' => null, //CSV list of timetypes to limit the rule to.
		'expense_how' => null, //How expenses should be recognized: M - mark up/
		'active' => null, //A 1/0 field indicating whether this is an active rule.
		'name' => null, //Name of the rule.
		'categoryid' => null, //The ID of the associated category.
		'start_milestone' => null, //ID of the starting milestone (project_task).
		'end_date' => null, //End date of the rule.
		'customerid' => null, //The ID of the associated customer.
		'agreementid' => null, //ID of the associated agreement.
		'type' => null, //The type of the rule:
		'asb_exclude_slip_type' => null, //CSV list of the slip types to exclude
		'customerpo_id' => null, //ID of the associated customerpo.
		'percent_trigger' => null, //If the fixed fee is triggered by a percent
		'item_filter' => null, //CSV list of items to limit the rule to.
		'project_task_filter' => null, //CSV list of tasks to limit the rule to.
		'product_filter' => null, //CSV list of products to limit the rule to.
		'slip_stage_filter' => null, //CSV list of slip_stage ID to limit a type A
		'repeatid' => null, //The ID of the associated repeating event.
		'currency' => null, //Currency for the money fields in the record.
		'phase' => null, //ID of the phase if percent_how is B or D. ID of the
		'acct_code' => null, //Optional accounting system code for integration
		'start_date' => null, //Start date of the rule.
		'projectid' => null, //The ID of the associated project.
		'amount' => null, //The amount. If we have multiple amounts, the values are
		'extra_data' => null, //Holds extra data fields associated with the rule.
		'notes' => null, //Notes associated with this revenue recognition rule.
		'acct_date' => null, //The accounting period date to assign to the
		'acct_date_how' => null, //The accounting period date of the transaction
		'accounting_period_id' => null, //The ID of the associated accounting
		'cost_centerid' => null, //The ID of the associated cost center.
		'asb_which_slips' => null, //Which slips should be considered for the as
		'project_billing_rule_filter' => null, //CSV list of project billing rule
		'category_1id' => null, //The ID of the associated category_1. Mutually
		'category_2id' => null, //The ID of the associated category_2. Mutually
		'category_3id' => null, //The ID of the associated category_3. Mutually
		'category_\4id' => null, //The ID of the associated category_4. Mutually
		'category_5id' => null, //The ID of the associated category_5. Mutually
		'assigned_user' => null, //The user to assign to fixed fee recognition.
    ];

    function __construct()
    {
        parent::__construct();
    }
}