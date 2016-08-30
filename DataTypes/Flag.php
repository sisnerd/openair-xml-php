<?php

use OpenAir\Base\BaseCommandClass;

class Flag extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the switch.
		'setting' => null, //The value to which the switch is set.
    ];

    function __construct()
    {
        parent::__construct();
    }
}