<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Timetype extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'notes' => null, //Notes associated with this time type.
		'active' => null, //A 1/0 field indicating whether this is time type is
		'name' => null, //The name of the time type.
		'updated' => null, //Time the record was last updated or modified.
		'externalid' => null, //If the record was imported from an external system
		'payroll_code' => null, //The payroll code for this time type.
		'cost_centerid' => null, //The ID of the associated cost center.
		'code' => null, //Optional accounting system code for integration with
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}