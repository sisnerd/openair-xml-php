<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Projectbillingrule extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'name' => null, //Name of this project billing rule.
		'user_filter' => null, //CSV list of users to limit the rule to.
		'cap_hours' => null, //The number of hours to cap the billing at for a time
		'backout_gst' => null, //If they are using GST/HST/PST taxes, back out the
		'ticket_maximums' => null, //Holds data on ticket maximums per expense
		'markup_type' => null, //A field indicating the type of expense markup:
		'percent' => null, //The percentage value for a fixed fee percent trigger.
		'end_milestone' => null, //The ID of the ending milestone (project_task).
		'daily_roll_to_next' => null, //If the period cap is hit move the
		'category_filter' => null, //CSV list of categories to limit the rule to.
		'exclude_non_reimbursable' => null, //Exclude non-reimbursable expenses.
		'percent_how' => null, //If the fixed fee is triggered by a percent
		'adjust_if_capped' => null, //If a transaction will exceed the cap, should
		'slip_stageid' => null, //The ID of the slip stage to assign to the
		'markup_category' => null, //The ID of the category a markup on expense
		'timetype_filter' => null, //CSV list of timetypes to limit the rule to.
		'cap' => null, //The amount to cap total billing for this rule at (in the
		'daily_cap_period' => null, //Period for the cap: D - day, W - week, M -
		'active' => null, //A 1/0 field indicating whether this is an active
		'description' => null, //The rule description.
		'categoryid' => null, //The ID of the category to assign to the transaction
		'start_milestone' => null, //The ID of the starting milestone
		'end_date' => null, //End date of the rule.
		'rate_from' => null, //Where we get the rate from: U - Users, R - Rate
		'type' => null, //The type of the billing rule: T - time billing rule, E -
		'agreementid' => null, //The ID of the associated agreement.
		'customerpoid' => null, //The ID of the associated customerpo.
		'item_filter' => null, //CSV list of items to limit the rule to.
		'position' => null, //The position of the rule (0,1,2 etc.). Rules are
		'rate_multiplier' => null, //Optional multiplier to adjust the time
		'project_task_filter' => null, //CSV list of tasks to limit the rule to.
		'rate_cardid' => null, //The ID of the associated rate card if using rate
		'product_filter' => null, //CSV list of products to limit the rule to.
		'currency' => null, //Currency for the money fields in the record.
		'repeatid' => null, //The ID of the associated repeating event.
		'exclude_archived_ts' => null, //Exclude time from archive timesheets in
		'exclude_non_billable' => null, //Exclude non-billable expenses.
		'markup' => null, //The amount of markup in percent or monetary amount as
		'start_date' => null, //Start date of the rule.
		'category_when' => null, //When the category should be applied:
		'projectid' => null, //The ID of the associated project.
		'stop_if_capped' => null, //If a transaction is not billed because it
		'amount' => null, //The amount for a fixed fee rule.
		'round_rules' => null, //Rules for rounding time.
		'daily_cap_is_per_user' => null, //Is the daily cap on a per user basis.
		'acct_date' => null, //Accounting period date to assign to transaction.
		'acct_date_how' => null, //The accounting period date of the transaction
		'accounting_period_id' => null, //The ID of the assoc. accounting period.
		'daily_cap_hours' => null, //The number of hours to cap the period billing
		'cost_center_id' => null, //The ID of the associated cost center.
		'notes' => null, //Notes associated with this project billing rule.
		'customerid' => null, //The ID of the associated customer.
		'daily_rate_multiplier' => null, //Optional daily multiplier to adjust the
		'job_code_filter' => null, //CSV list of filters to limit the rule to.
		'category_1id' => null, //The ID of the associated category_1. Mutually
		'category_2id' => null, //The ID of the associated category_2. Mutually
		'category_3id' => null, //The ID of the associated category_3. Mutually
		'category_4id' => null, //The ID of the associated category_4. Mutually
		'category_5id' => null, //The ID of the associated category_5. Mutually
		'exclude_non_billable_task' => null, //Exclude non-billable tasks.
		'assigned_user' => null, //The user to assign to fixed fee billings.
    ];

    function __construct()
    {
        parent::__construct();
    }
}