<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Customerpo extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'number' => null, //The customerpo number.
        'date' => null, //The date of the customerpo.
        'name' => null, //The name of the customerpo.
        'active' => null, //A 1/0 field indicating whether this is an active
        'externalid' => null, //If the record was imported from an external system
        'total' => null, //The customerpo total. Dated by the date field.
        'created' => null, //Time the record was created.
        'currency' => null, //Currency for the money fields in the record.
        'notes' => null, //Notes.
        'customerid' => null, //The ID of the associated customer.
        'customer_externalid' => null, //The external ID for the associated
        'updated' => null, //Time the record was last modified.
        'code' => null, //Optional accounting system code for integration with
        'acct_date' => null, //The accounting period date of the customerpo.
        'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
