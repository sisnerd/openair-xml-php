<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Uprate extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'userid' => null, //The ID of the associated user.
		'customerid' => null, //The ID of the associated customer.
		'notes' => null, //Notes associated with the user project rate (uprate).
		'updated' => null, //Time the record was last updated or modified.
		'duration' => null, //Billing rate: H - hourly or D - Daily.
		'projectid' => null, //The ID of the associated project.
		'categoryid' => null, //The ID of the associated category.
		'currency' => null, //Currency for the money fields in the record.
		'rate' => null, //The billing rate.
		'project_billing_ruleid' => null, //If project billing rules are used,
		'job_codeid' => null, //The ID of the associated job code.
    ];

    function __construct()
    {
        parent::__construct();
    }
}