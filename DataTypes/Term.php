<?php

use OpenAir\Base\BaseCommandClass;

class Term extends BaseCommandClass
{

    private $data = [
		'name' => null, //The name for the term.
		'display' => null, //Display the term as.
    ];

    function __construct()
    {
        parent::__construct();
    }
}