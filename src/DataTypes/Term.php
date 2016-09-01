<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Term extends DataType
{

    protected $data = [
		'name' => null, //The name for the term.
		'display' => null, //Display the term as.
    ];

    function __construct()
    {
        parent::__construct();
    }
}