<?php

use OpenAir\Base\BaseCommandClass;

class Approvalprocess extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name used for display in popups and lists.
		'externalid' => null, //If the record was imported from an external system you store the unique exte
		'updated' => null, //Time the record was last modified.
		'created' => null, //Time the record was created.
    ];

    function __construct()
    {
        parent::__construct();
    }
}