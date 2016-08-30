<?php

use OpenAir\Base\BaseCommandClass;

class Jobcode extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'userid_fte' => null, //The user ID of the FTE (Full Time Equivalent)
		'loaded_cost' => null, //Loaded cost for this job code.
		'name' => null, //The name for the job code.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Notes associated with the job code.
		'externalid' => null, //If the record was imported from an external system
		'currency' => null, //Currency for the money fields in the record.
		'code' => null, //Optional accounting system code for integration with
		'active' => null, //A 1/0 field indicating if this is an active job code.
    ];

    function __construct()
    {
        parent::__construct();
    }
}