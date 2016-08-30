<?php

use OpenAir\Base\BaseCommandClass;

class IssueStatus extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the issue status.
		'active' => null, //A 1/0 field indicating if this issue status is active.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}