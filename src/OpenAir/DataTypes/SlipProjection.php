<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class SlipProjection extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'hour' => null, //The number of hours for a T slip.
		'date' => null, //The date of the billing slip.
		'unitm' => null, //The unit of measure for an E or P slip or the rate
		'rate' => null, //The hourly rate for a T slip. Dated by the date field.
		'slip_stageid' => null, //The ID of the associated slip stage.
		'project_billing_ruleid' => null, //The ID of the associated project
		'cost' => null, //The cost per unit of measure for an E or P slip, the
		'sold_to_contactid' => null, //The ID of the contact sold to.
		'description' => null, //The description of the billing slip.
		'total' => null, //The total value of the slip. Dated by the date field.
		'categoryid' => null, //The ID of the associated category. If this is set,
		'timer_start' => null, //The starting time of the timer.
		'minute' => null, //The number of minutes for a T slip.
		'customerid' => null, //The ID of the associated customer.
		'type' => null, //The type of the slip: T - hourly rate slip, E - expense
		'agreementid' => null, //The ID of the associated agreement.
		'customerpoid' => null, //The ID of the associated customerpo.
		'userid' => null, //The ID of the associated user.
		'invoiceid' => null, //The ID of the associated invoice once billed.
		'currency' => null, //Currency for the money fields in the record
		'city' => null, //The slip city or location.
		'decimal_hours' => null, //The number of decimal hours for a T slip.
		'payment_typeid' => null, //The ID of the associated payment type.
		'shipping_contactid' => null, //The ID of the associated shipping contact.
		'itemid' => null, //The ID of the associated item. If this is set, the slip
		'timetypeid' => null, //The ID of the associated time type.
		'quantity' => null, //The quantity for an E, O, or P slip.
		'billing_contactid' => null, //The ID of the associated billing contact.
		'projectid' => null, //The ID of the associated project.
		'projecttaskid' => null, //The ID of the task within the associated
		'productid' => null, //The ID of the associated product.
		'notes' => null, //Notes associated with the slip.
		'slip_projection_type' => null, //The type of the slip projection:
		'booking_typeid' => null, //ID of the booking type if this was generated
		'transactionid' => null, //For internal use only.
		'projecttask_typeid' => null, //The ID of the project task type.
		'cost_centerid' => null, //The ID of the associated cost center.
		'acct_date' => null, //The accounting period date of the task.
		'job_codeid' => null, //The ID of the associated job code.
    ];

    function __construct()
    {
        parent::__construct();
    }
}