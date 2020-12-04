<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Payrolltype extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'active' => null, //A 1/0 field specifying whether this is an active
        'externalid' => null, //If the record was imported from an external
        'notes' => null, //Notes associated with the payroll type.
        'name' => null, //The name of the payroll type.
        'updated' => null, //Time the record was last updated or modified.
        'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
