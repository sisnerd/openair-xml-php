<?php

use OpenAir\Base\BaseCommandClass;

class Approval extends BaseCommandClass
{

    private $data = [
		'cc' => null, //Email cc field.
		'notes' => null, //Notes.
    ];

    function __construct()
    {
        parent::__construct();
    }
}