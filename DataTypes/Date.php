<?php

use OpenAir\Base\BaseCommandClass;

class Date extends BaseCommandClass
{

    private $data = [
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