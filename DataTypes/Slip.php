<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Slip extends BaseDataTypeClass
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
		'tax_location_name' => null, //The name of the tax location
		'sold_to_contactid' => null, //The ID of the contact sold to.
		'description' => null, //The description of the billing slip.
		'total' => null, //The total value of the slip. Dated by the date field.
		'categoryid' => null, //The ID of the associated category. If this is set,
		'timer_start' => null, //The starting time of the timer.
		'minute' => null, //The number of minutes for a T slip.
		'customerid' => null, //The ID of the associated customer.
		'type' => null, //The type of the slip: T - hourly rate slip, E - expense
		'agreementid' => null, //The ID of the associated agreement.
		'total_tax' => null, //The total tax paid. Dated by the date field.
		'customerpoid' => null, //The ID of the associated customerpo.
		'userid' => null, //The ID of the associated user.
		'invoiceid' => null, //The ID of the associated invoice once billed.
		'currency' => null, //Currency for the money fields in the record
		'city' => null, //The slip city or location.
		'decimal_hours' => null, //The number of decimal hours for a T slip.
		'payment_typeid' => null, //The ID of the associated payment type.
		'total_with_tax' => null, //A 1/0 field indicating whether the cost
		'shipping_contactid' => null, //The ID of the associated shipping contact.
		'itemid' => null, //The ID of the associated item. If this is set, the slip
		'timetypeid' => null, //The ID of the associated time type.
		'quantity' => null, //The quantity for an E, O, or P slip.
		'billing_contactid' => null, //The ID of the associated billing contact.
		'projectid' => null, //The ID of the associated project.
		'projecttaskid' => null, //The ID of the task within the associated
		'productid' => null, //The ID of the associated product.
		'notes' => null, //Notes associated with the slip.
		'cost_centerid' => null, //The ID of the associated cost center.
		'acct_date' => null, //The accounting period date of the slip.
		'projecttask_type_id' => null, //The ID of the projecttask_type of the
		'job_code_id' => null, //The ID of the associated job code.
		'payroll_type_id' => null, //The ID of the associated payroll type.
		'ref_slipid' => null, //For credit/rebill, ID of the original slip id.
		'portfolio_projectid' => null, //The ID of the associated portfolio
		'originating_id' => null, //For use with split slips feature. If set, the
		'category_1id' => null, //The ID of the associated category_1.
		'category_2id' => null, //The ID of the associated category_2.
		'category_3id' => null, //The ID of the associated category_3.
		'category_4id' => null, //The ID of the associated category_4.
		'category_5id' => null, //The ID of the associated category_5.
		'gl_code' => null, //The fixed code 1234455454.
		'skip_recognition' => null, //A "1/0" field indicating if this record
    ];

    function __construct()
    {
        parent::__construct();
    }
}