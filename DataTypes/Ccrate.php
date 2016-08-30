<?php

use OpenAir\Base\BaseCommandClass;

class Ccrate extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'categoryid' => null, //The ID of the category this rate is associated
		'currency' => null, //The currency these rates are quoted in.
		'rate' => null, //The hourly billing rate.
		'created' => null, //Time the record was created.
		'notes' => null, //Notes about the table.
		'customerid' => null, //The ID of the customer this rate is associated
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}