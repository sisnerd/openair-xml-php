<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Estimatephase extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'estimateid' => null, //The ID of the associated estimate.
		'name' => null, //The name for the estimate adjustment.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}