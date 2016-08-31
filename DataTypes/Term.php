<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Term extends BaseDataTypeClass
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