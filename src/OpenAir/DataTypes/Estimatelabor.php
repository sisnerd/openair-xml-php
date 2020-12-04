<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Estimatelabor extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'estimateid' => null, //The ID of the associated estimate.
        'loaded_cost' => null, //The loaded cost for the associated resource.
        'userid' => null, //The ID of the associated resource.
        'description' => null, //The short description for the estimate.
        'amount_type' => null, //A 1/0 field indicating the type of the amount
        'created' => null, //Time the record was created.
        'amount' => null, //The number of hours or percentage of time associated
        'phaseid' => null, //The ID of the associated estimate phase.
        'end_date' => null, //End date for resource assignment.
        'billing_rate' => null, //The billing rate for the associated resource.
        'start_date' => null, //Start date for resource assignment.
        'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
