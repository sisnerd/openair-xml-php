<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Customerpo_to_project extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'customerpoid' => null, //The ID of the associated customerpo.
		'created' => null, //Time the record was created.
		'customerid' => null, //The ID of the associated customer.
		'active' => null, //A 1/0 field indicating whether this is an active
		'updated' => null, //Time the record was last modified.
		'projectid' => null, //The ID of the associated project.
		'externalid' => null, //If the record was imported from an external
    ];

    function __construct()
    {
        parent::__construct();
    }
}