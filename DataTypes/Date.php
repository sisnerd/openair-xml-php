<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Date extends BaseDataTypeClass
{

    protected $data = [
		'year' => null, //Year.
		'month' => null, //Month.
		'day' => null, //Day.
		'hour' => null, //Hour.
		'minute' => null, //Minute.
		'second' => null, //Second.
    ];

    function __construct()
    {
        parent::__construct();
    }
}