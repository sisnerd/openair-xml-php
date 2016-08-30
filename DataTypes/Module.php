<?php

use OpenAir\Base\BaseCommandClass;

class Module extends BaseCommandClass
{

    private $data = [
		'abbr' => null, //Abbreviation within OpenAir.
		'enabled' => null, //A 1/0 field indicating whether the module is enabled.
    ];

    function __construct()
    {
        parent::__construct();
    }
}