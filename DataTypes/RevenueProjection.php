<?php

use OpenAir\Base\BaseCommandClass;

class RevenueProjection extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'hour' => null, //The number of hours for a T slip.
		'date' => null, //The date of the billing slip.
		'um' => null, //The unit of measure for an E or P slip or the rate
		'rate' => null, //The hourly rate for a T slip. Dated by the date field.
		'slip_stage_id' => null, //The ID of the associated slip stage.
		'project_billing_rule_id' => null, //The ID of the associated project <project_billing_rule_id/>Id of the project billing rule that
		'cost' => null, //The cost per unit of measure for an E or P slip, the
		'description' => null, //The description of the billing slip.
		'total' => null, //The total value of the slip. Dated by the date field.
		'category_id' => null, //The ID of the associated category. If this is set,
		'timer_start' => null, //The starting time of the timer.
		'minute' => null, //The number of minutes for a T slip.
		'customer_id' => null, //The ID of the associated customer.
		'type' => null, //The type of the slip: T - hourly rate slip, E - expense
		'agreement_id' => null, //The ID of the associated agreement.
		'total_tax_paid' => null, //The total tax paid. Dated by the date field.
		'customerpo_id' => null, //The ID of the associated customerpo.
		'user_id' => null, //The ID of the associated user.
		'invoice_id' => null, //The ID of the associated invoice once billed.
		'currency' => null, //Currency for the money fields in the record
		'city' => null, //The slip city or location.
		'payment_type_id' => null, //The ID of the associated payment type.
		'total_with_tax' => null, //A 1/0 field indicating whether the cost
		'item_id' => null, //The ID of the associated item. If this is set, the
		'timetype_id' => null, //The ID of the associated time type.
		'quantity' => null, //The quantity for an E, O, or P slip.
		'project_id' => null, //The ID of the associated project.
		'project_task_id' => null, //The ID of the task within the associated
		'product_id' => null, //The ID of the associated product.
		'notes' => null, //Notes associated with the slip.
		'cost_center_id' => null, //The ID of the associated cost center.
		'acct_date' => null, //The accounting period date of the slip.
		'projecttask_type_id' => null, //The ID of the projecttask_type of the
		'job_code_id' => null, //The ID of the associated job code.
		'payroll_type_id' => null, //The ID of the associated payroll type.
		'ref_slip_id' => null, //For credit/rebill, ID of the original slip id.
		'portfolio_project_id' => null, //The ID of the associated portfolio
		'category_1_id' => null, //The ID of the associated category_1.
		'category_2_id' => null, //The ID of the associated category_2.
		'category_3_id' => null, //The ID of the associated category_3.
		'category_4_id' => null, //The ID of the associated category_4.
		'category_5_id' => null, //The ID of the associated category_5.
		'revenue_recognition_rule_id' => null, //Id of the revenue recognition rule
		'revenue_projection_type' => null, //The type of the projection:
		'total_hp' => null, //A high precision version of the total field. This is
		'slip_projection_id' => null, //Id of the slip_projection that was used for
		'slip_projection_type' => null, //The type of the slip_projection:
		'booking_type_id' => null, //Id of the booking type if this was generated
		'revenue_stage_id' => null, //Id of the revenue_stage. This will always be
		'transaction_id' => null, //For internal user only.
		'incomplete' => null, //Is the slip complete, e.g. can it be included in an
		'name' => null, //The name of the slip. This field is never populated.
		'slip_type_id' => null, //This field is redundant with the type field. It
		'originating_id' => null, //For use with split slips feature. If set, the
		'repeat_id' => null, //The id of the associated repeating event.
		'vehicle_id' => null, //The id of the associated vehicle.
		'cost_includes_tax' => null, //A 1/0 field indicating whether the cost
		'exported' => null, //Date and time the record was marked as exported.
    ];

    function __construct()
    {
        parent::__construct();
    }
}