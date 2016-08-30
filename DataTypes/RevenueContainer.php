<?php

use OpenAir\Base\BaseCommandClass;

class RevenueContainer extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'number' => null, //The revenue_container number that increments by 1.
		'date' => null, //The date of the revenue_container.
		'balancing_type' => null, //A one-character key indicating the type of
		'total_recognized' => null, //The revenue_container recognized total.
		'currency' => null, //The currency of this revenue_container.
		'date_approved' => null, //The date the invoice was approved.
		'updated' => null, //Time the record was last updated or modified.
		'date_submitted' => null, //The date the invoice was submitted.
		'approval_status' => null, //The approval status of the invoice. Used only
		'total_deferred' => null, //The revenue_container deferred total. Dated by
		'name' => null, //The name of the revenue_container (Prefix + number).
		'acct_date' => null, //The accounting period date of the
		'total_accrued' => null, //The revenue_container accrued total. Dated by
		'projectid' => null, //The ID of the associated project.
		'externalid' => null, //If the record was imported from an external
		'total_posted' => null, //The revenue_container posted total. Dated by the
		'created' => null, //Time the record was created.
		'notes' => null, //Notes to print on the revenue_container.
		'total_invoiced' => null, //The revenue_container invoice total. Dated by
		'customerid' => null, //The ID of the associated customer.
		'exported' => null, //Date and time the record was marked as exported.
		'prefix' => null, //A static alphanumeric revenue_container number prefix.
    ];

    function __construct()
    {
        parent::__construct();
    }
}