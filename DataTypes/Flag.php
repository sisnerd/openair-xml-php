<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Flag extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the switch.
		'setting' => null, //The value to which the switch is set.
    ];

    function __construct()
    {
        parent::__construct();
    }
}