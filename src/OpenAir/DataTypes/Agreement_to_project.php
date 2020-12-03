<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Agreement_to_project extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'agreementid' => null, //The ID of the associated agreement.
		'customerid' => null, //The ID of the associated customer. Does not need to
		'projectid' => null, //The ID of the associated project.
		'active' => null, //A 1/0 field indicating whether this is an active
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}