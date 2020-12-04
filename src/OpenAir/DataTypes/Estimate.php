<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Estimate extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'hide_expense' => null, //A 1/0 field indicating if expenses should be
        'dealid' => null, //The ID of the associated deal.
        'name' => null, //The short description for the estimate.
        'created' => null, //Time the record was created.
        'notes' => null, //Notes about the estimate.
        'customerid' => null, //The ID of the associated customer.
        'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
