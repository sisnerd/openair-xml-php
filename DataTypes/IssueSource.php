<?php

use OpenAir\Base\BaseCommandClass;

class IssueSource extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'name' => null, //The name of the issue source.
		'active' => null, //A 1/0 field indicating whether this issue source is
		'notes' => null, //Notes associated with the issue source.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}