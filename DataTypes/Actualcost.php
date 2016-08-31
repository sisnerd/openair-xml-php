<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Actualcost extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the actual cost. This field is never
		'date' => null, //Date for the actual cost.
		'userid' => null, //The ID of the user.
		'externalid' => null, //If the record was imported from an external
		'period' => null, //The time period of the actual cost: Daily, Weekly,
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Notes.
		'currency' => null, //Currency of the cost field.
		'cost' => null, //The cost.
		'cost_typeid' => null, //The ID of the cost_type.
		'is_accrual' => null, //A 1/0 field indicating whether this actual cost is
    ];

    function __construct()
    {
        parent::__construct();
    }
}