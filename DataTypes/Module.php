<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Module extends DataType
{

    protected $data = [
		'abbr' => null, //Abbreviation within OpenAir.
		'enabled' => null, //A 1/0 field indicating whether the module is enabled.
    ];

    function __construct()
    {
        parent::__construct();
    }
}