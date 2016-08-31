<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Paymenttype extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'active' => null, //A 1/0 field specifying if the type is active.
		'notes' => null, //Notes associated with the payment type.
		'name' => null, //The name of the payment type.
		'updated' => null, //Time the record was last updated or modified.
		'default_status' => null, //Default receipt status, e.g. R =>
		'default_payment_type' => null, //A "1/0" field indicating whether this is
    ];

    function __construct()
    {
        parent::__construct();
    }
}